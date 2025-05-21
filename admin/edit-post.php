<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';

// Validate ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "❌ Invalid post ID.";
    exit;
}

$postId = intval($_GET['id']);

// Fetch the post data
$stmt = $conn->prepare("SELECT title, description, image, category, subcategory FROM post WHERE id = ?");
$stmt->bind_param("i", $postId);
$stmt->execute();
$stmt->bind_result($title, $description, $image, $category, $subcategory);
if (!$stmt->fetch()) {
    echo "❌ Post not found.";
    exit;
}
$stmt->close();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newTitle = $_POST['title'] ?? '';
    $newDescription = $_POST['description'] ?? '';
    $newCategory = $_POST['category'] ?? '';
    $newSubcategory = $_POST['subcategory'] ?? '';
    $newImage = $image; // keep the old image unless replaced

    // Handle image update if uploaded
    if (!empty($_FILES['image']['name'])) {
        $newImage = time() . '_' . preg_replace("/[^a-zA-Z0-9.\-_]/", "_", $_FILES['image']['name']);
        $uploadDir = __DIR__ . '/../uploads/';
        $target = $uploadDir . $newImage;
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo "❌ Failed to upload new image.";
            exit;
        }
        // Delete old image
        $oldImagePath = $uploadDir . $image;
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
    }

    // Update the post
    $updateStmt = $conn->prepare("UPDATE post SET title = ?, description = ?, image = ?, category = ?, subcategory = ? WHERE id = ?");
    $updateStmt->bind_param("sssssi", $newTitle, $newDescription, $newImage, $newCategory, $newSubcategory, $postId);
    $updateStmt->execute();
    $updateStmt->close();

    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog Post</title>
</head>
<body>
    <h2>Edit Blog Post</h2>
    <form method="POST" enctype="multipart/form-data">
        <label>Title:</label><br>
        <input type="text" name="title" value="<?= htmlspecialchars($title) ?>" required><br><br>

        <label>Description:</label><br>
        <textarea name="description" rows="6" required><?= htmlspecialchars($description) ?></textarea><br><br>

        <label>Current Image:</label><br>
        <img src="../uploads/<?= htmlspecialchars($image) ?>" alt="" width="150"><br>
        <label>Replace Image:</label>
        <input type="file" name="image"><br><br>

        <label>Category:</label><br>
        <select name="category" required onchange="toggleSubcategories(this.value)">
            <option value="">-- Select Category --</option>
            <option value="Latest Financial news" <?= $category == 'Latest Financial news' ? 'selected' : '' ?>>Latest Financial news</option>
            <option value="Our services - IPO" <?= $category == 'Our services - IPO' ? 'selected' : '' ?>>Our services - IPO</option>
            <option value="SEBI Updates" <?= $category == 'SEBI Updates' ? 'selected' : '' ?>>SEBI Updates</option>
            <option value="Thought Leadership" <?= $category == 'Thought Leadership' ? 'selected' : '' ?>>Thought Leadership</option>
        </select><br><br>

        <div id="subcategory-container" style="display: none;">
            <label>Subcategory:</label><br>
            <select name="subcategory" id="subcategory">
                <option value="">-- Select Subcategory --</option>
                <option value="Valuation" <?= $subcategory == 'Valuation' ? 'selected' : '' ?>>Valuation</option>
                <option value="Open Offer" <?= $subcategory == 'Open Offer' ? 'selected' : '' ?>>Open Offer</option>
                <option value="Exit Offer" <?= $subcategory == 'Exit Offer' ? 'selected' : '' ?>>Exit Offer</option>
                <option value="Compliance Health Check" <?= $subcategory == 'Compliance Health Check' ? 'selected' : '' ?>>Compliance Health Check</option>
                <option value="Corporate Advisory" <?= $subcategory == 'Corporate Advisory' ? 'selected' : '' ?>>Corporate Advisory</option>
                <option value="M & A" <?= $subcategory == 'M & A' ? 'selected' : '' ?>>M & A</option>
            </select><br><br>
        </div>

        <button type="submit">Update Post</button>
    </form>

    <script>
        function toggleSubcategories(category) {
            const subcatDiv = document.getElementById('subcategory-container');
            if (category === 'Our services - IPO') {
                subcatDiv.style.display = 'block';
            } else {
                subcatDiv.style.display = 'none';
                document.getElementById('subcategory').value = '';
            }
        }

        // Trigger subcategory logic on page load (for editing)
        document.addEventListener("DOMContentLoaded", function() {
            toggleSubcategories("<?= $category ?>");
        });
    </script>
</body>
</html>
