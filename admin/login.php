<?php
session_start();
if ($_POST) {
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    // Hardcoded for now
    if ($userid === 'admin' && $password === 'admin123') {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
    } else {
        echo "Invalid credentials!";
    }
}
?>

<form method="POST">
    <input type="text" name="userid" placeholder="User ID" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
