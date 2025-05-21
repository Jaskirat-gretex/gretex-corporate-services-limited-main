<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';

// Fetch posts in descending order (latest first)
$result = $conn->query("SELECT * FROM post ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f4f4f4;
            padding: 10px;
        }

        .post {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 15px 0;
        }

        .post img {
            max-width: 200px;
            display: block;
            margin-bottom: 10px;
        }

        .post-actions {
            margin-top: 10px;
        }

        .btn {
            padding: 6px 12px;
            margin-right: 5px;
            text-decoration: none;
            background-color: #007BFF;
            color: white;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .create-btn {
            background-color: #28a745;
        }

        .create-btn:hover {
            background-color: #218838;
        }

        .btn.logout {
            background-color: #dc3545;
        }

        .btn.logout:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<div class="top-bar">
    <h2>Admin Dashboard</h2>
    <div>
        <a href="create-post.php" class="btn create-btn">+ Create New Post</a>
        <a href="logout.php" class="btn logout">Logout</a>
    </div>
</div>

<?php if ($result && $result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="post">
            <h3><?= htmlspecialchars($row['title']) ?></h3>

            <p>
                <strong>Category:</strong> <?= htmlspecialchars($row['category']) ?>
                <?php if (!empty($row['subcategory'])): ?>
                    → <strong>Subcategory:</strong> <?= htmlspecialchars($row['subcategory']) ?>
                <?php endif; ?>
            </p>

            <img src="../uploads/<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
                    <!-- the code of single line in the notepad if any error put here -->

                    <div><?= $row['description'] ?></div>


            <div class="post-actions">
                <a href="edit-post.php?id=<?= $row['id']?>" class="btn">Edit</a>
                <a href="delete-post.php?id=<?= $row['id'] ?>" class="btn" style="background-color: #dc3545;" onclick="return confirm('Are you sure you want to delete this post?');">Delete</a>
            </div>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <p>No posts found.</p>
<?php endif; ?>

</body>
</html>
