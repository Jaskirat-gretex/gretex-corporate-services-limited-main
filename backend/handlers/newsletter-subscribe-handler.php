<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);

    if (!$email) {
        echo 'Invalid email address.';
        exit;
    }

    // 1. Store in database
    try {
        $stmt = $pdo->prepare("INSERT INTO newsletter_subscribers (email, subscribed_at) VALUES (?, NOW())");
        $stmt->execute([$email]);
    } catch (PDOException $e) {
        // Check for duplicate entry
        if ($e->getCode() == 23000) {
            echo 'You are already subscribed.';
        } else {
            echo 'Database error. Please try again later.';
        }
        exit;
    }

    // 2. Send confirmation email
    $mail = new PHPMailer(true);

    try {
        // SMTP settings from .env
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USER'];
        $mail->Password   = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $_ENV['SMTP_PORT'];

        $mail->setFrom($_ENV['FROM_EMAIL'], 'Gretex Corporate Services Limited');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Thank you for subscribing!';
        $mail->Body    = '<p>Hi there,</p><p>Thank you for subscribing to our newsletter!</p>';

        $mail->send();

        echo 'You have been successfully subscribed.';
        exit;
    } catch (Exception $e) {
        echo 'Mailer Error: Could not send confirmation.';
        exit;
    }
} else {
    echo 'Invalid request';
    exit;
}
