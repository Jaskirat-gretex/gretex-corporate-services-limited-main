<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../../vendor/autoload.php';

// === RECAPTCHA SECRET KEY ===
$recaptchaSecret = $_ENV['RECAPTCHA_SECRET'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Validate reCAPTCHA
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
    $captchaSuccess = json_decode($verifyResponse);

    if (!$captchaSuccess->success) {
        echo 'Captcha verification failed. Please try again.';
        exit;
    }

    // 2. Validate and sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $company = htmlspecialchars(trim($_POST['company']));
    $revenue = htmlspecialchars(trim($_POST['revenue']));
    $pat = htmlspecialchars(trim($_POST['profit']));
    $messageText = htmlspecialchars(trim($_POST['message']));
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // 3. Basic validation
    if (!$name || !$email || !$phone || !$company || !$revenue || !$pat || !$messageText) {
        echo 'Please fill in all required fields.';
        exit;
    }

    if (!preg_match('/^\d{10}$/', $phone)) {
        echo 'Phone number must be exactly 10 digits.';
        exit;
    }

    // 4. Store in database
    try {
        $stmt = $pdo->prepare("INSERT INTO contact_leads (name, email, phone, company_name, revenue, profit_after_tax, message, ip_address, user_agent, submitted_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
        $stmt->execute([$name, $email, $phone, $company, $revenue, $pat, $messageText, $ipAddress, $userAgent]);
    } catch (PDOException $e) {
        echo 'db_error: ' . $e->getMessage();
        // echo 'Database error. Please try again later.';
        exit;
    }

    // 4. Send email
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USER'];
        $mail->Password = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $_ENV['SMTP_PORT'];

        $mail->setFrom($_ENV['FROM_EMAIL'], 'Gretex Corporate Services Limited');
        $mail->addAddress($_ENV['TO_EMAIL']);

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Company:</strong> {$company}</p>
            <p><strong>Revenue:</strong> {$revenue}</p>
            <p><strong>Profit After Tax:</strong> {$pat}</p>
            <p><strong>Message:</strong><br>{$messageText}</p>
            <hr>
            <p><strong>IP Address:</strong> {$ipAddress}</p>
            <p><strong>User Agent:</strong><br>{$userAgent}</p>
        ";

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
