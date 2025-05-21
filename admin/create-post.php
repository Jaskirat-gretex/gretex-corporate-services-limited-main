<!DOCTYPE html>
<?php
session_start();

//  Authentication check
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Include database connection
include 'db.php';

//  Handle POST submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $category = $_POST['category'] ?? '';
    $subcategory = $_POST['subcategory'] ?? '';

    if (empty($title) || empty($description) || empty($_FILES['image']['name']) || empty($category)) {
        echo "All fields are required.";
        exit;
    }

    // Handle image upload
    $image = time() . '_' . preg_replace("/[^a-zA-Z0-9.\-_]/", "_", $_FILES['image']['name']);
    $uploadDir = __DIR__ . '/../uploads/';
    $target = $uploadDir . $image;

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Insert into database with category and subcategory
        $stmt = $conn->prepare("INSERT INTO post (title, description, image, category, subcategory) VALUES (?, ?, ?, ?, ?)");
        if (!$stmt) {
            die("Database error: " . $conn->error);
        }
        $stmt->bind_param("sssss", $title, $description, $image, $category, $subcategory);
        $stmt->execute();
        echo "✅ Post uploaded successfully!";
    } else {
        echo "❌ Failed to upload image.";
    }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">

     <!-- TinyMCE CDN -->
    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
     <!-- repled it because the api key is requed for the tinymce -->
     <script src="https://cdn.tiny.cloud/1/qb2zrvh2rvplrwz4r19sqdemgbunxw4442fiy5pd8igfzmp3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>   
<!--  Display form -->
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Post Title" required><br>

    <!-- <textarea name="description" id="description" placeholder="Description" required></textarea><br> -->
         <!-- <textarea name="description" id="description" placeholder="Description" required></textarea><br> -->
          <textarea name="description" id="description" placeholder="Description"></textarea>


    <!-- Category Dropdown -->
    <select name="category" id="category" required onchange="toggleSubcategory(this.value)">
        <option value="">Select Category</option>
        <option value="Latest Financial News">Latest Financial News</option>
        <option value="Our Services">Our Services</option>
        <option value="SEBI Updates">SEBI Updates</option>
        <option value="Thought Leadership">Thought Leadership</option>
    </select><br>

    <!-- Subcategory Dropdown (only for 'Our Services') -->
    <select name="subcategory" id="subcategory" style="display:none;">
        <option value="">Select Subcategory</option>
        <option value="Valuation">Valuation</option>
        <option value="Open Offer">Open Offer</option>
        <option value="Exit Offer">Exit Offer</option>
        <option value="Compliance Health Check">Compliance Health Check</option>
        <option value="Corporate Advisory">Corporate Advisory</option>
        <option value="M & A">M & A</option>
    </select><br>

    <input type="file" name="image" required><br>
    <button type="submit">Publish</button>
</form>

<!-- for the subcategory -->
<script>
    function toggleSubcategory(category) {
        const subcategory = document.getElementById('subcategory');
        if (category === "Our Services") {
            subcategory.style.display = 'inline';
        } else {
            subcategory.style.display = 'none';
            subcategory.value = '';
        }
    }
</script>


<!-- upgrade normal textarea to tinymca -->
<!-- script tag  -->

<!-- Initialize TinyMCE for your textarea -->

<script>
    tinymce.init({
        selector: 'textarea#description', // Match the ID of your textarea
        height: 300,
        plugins: 'lists table image code link',
        toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table | image | link | code',
        branding: false
    });
</script>

</body>
</html>