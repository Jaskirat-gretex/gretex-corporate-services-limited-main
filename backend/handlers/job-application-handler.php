<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../../vendor/autoload.php';

$recaptchaSecret = $_ENV['RECAPTCHA_SECRET'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate reCAPTCHA
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
    $captchaSuccess = json_decode($verifyResponse);

    if (!$captchaSuccess->success) {
        echo 'Captcha verification failed. Please try again.';
        exit;
    }

    // Validate and sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $coverLetter = htmlspecialchars(trim($_POST['message']));
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';


     if (!$email) {
        echo 'Invalid email address.';
        exit;
    }

    if (!preg_match('/^\d{10}$/', $phone)) {
        echo 'Phone number must be exactly 10 digits.';
        exit;
    }

    // File Upload
    if (!isset($_FILES['cv']) || $_FILES['cv']['error'] !== UPLOAD_ERR_OK) {
        echo 'File upload failed.';
        exit;
    }

    $allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    $maxSize = 2 * 1024 * 1024; // 2MB

     $file = $_FILES['cv'];
    if (!in_array($file['type'], $allowedTypes) || $file['size'] > $maxSize) {
        echo 'Invalid file type or file too large.';
        exit;
    }

     // Random directory
    $randomDir = __DIR__ . '/../../secure_uploads/' . rand(10000, 99999);
    if (!is_dir($randomDir)) {
        mkdir($randomDir, 0755, true);
    }

    $fileName = basename($file['name']);
    $targetPath = $randomDir . '/' . time() . '_' . $fileName;

    if (!move_uploaded_file($file['tmp_name'], $targetPath)) {
        echo 'File storage failed.';
        exit;
    }

     // Store in database
    try {
        $stmt = $pdo->prepare("INSERT INTO job_applications (name, email, phone, message, file_path, submitted_at, ip_address, user_agent) VALUES (?, ?, ?, ?, ?, NOW(), ?, ?)");
        $stmt->execute([$name, $email, $phone, $coverLetter, $targetPath, $ipAddress, $userAgent]);
    } catch (PDOException $e) {
        echo 'Database error. Please try again later.';
        exit;
    }

    // Send Email
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USER'];
        $mail->Password = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $_ENV['SMTP_PORT'];

        $mail->setFrom($_ENV['FROM_EMAIL'], 'Gretex Careers');
        $mail->addAddress($_ENV['TO_EMAIL']);

        $mail->isHTML(true);
        $mail->Subject = 'New Job Application';
        $mail->Body = "<p><strong>Name:</strong> {$name}</p>
                        <p><strong>Email:</strong> {$email}</p>
                        <p><strong>Phone:</strong> {$phone}</p>
                        <p><strong>Cover Letter:</strong> {$coverLetter}</p>";

        $mail->addAttachment($targetPath);

        $mail->send();
        echo 'Thank you! Your application has been submitted.';
        exit;
    } catch (Exception $e) {
        echo 'Mailer Error: Could not send your application.';
        exit;
    }

    } else {
    echo 'Invalid request';
    exit;
}