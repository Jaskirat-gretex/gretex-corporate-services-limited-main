<?php
require_once __DIR__ . '/../../vendor/autoload.php';

// Enable error reporting (for development only)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

try {
    $pdo = new PDO(
        "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']};charset=utf8mb4",
        $_ENV['DB_USER'],
        $_ENV['DB_PASS']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ✅ You can use echo OR JavaScript alert — choose one or both

    // 1. Plain PHP message:
    // echo "✅ Connection established successfully";

} catch (PDOException $e) {
    // ❌ Display both error message and alert
    echo "❌ Database connection failed: " . $e->getMessage();
    echo "<script>alert('❌ DB connection error: " . addslashes($e->getMessage()) . "');</script>";
    exit;
}
