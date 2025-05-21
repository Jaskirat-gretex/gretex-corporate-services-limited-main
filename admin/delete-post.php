<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $postId = intval($_GET['id']);

    // Optionally, delete the image file too
    $stmt = $conn->prepare("SELECT image FROM post WHERE id = ?");
    $stmt->bind_param("i", $postId);
    $stmt->execute();
    $stmt->bind_result($image);
    if ($stmt->fetch() && $image) {
        $imagePath = __DIR__ . '/../uploads/' . $image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }
    $stmt->close();

    // Delete the post
    $deleteStmt = $conn->prepare("DELETE FROM post WHERE id = ?");
    $deleteStmt->bind_param("i", $postId);
    $deleteStmt->execute();

    header("Location: dashboard.php");
    exit;
} else {
    echo " Invalid request.";
}
?>
