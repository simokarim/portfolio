<?php
echo '<pre>' . var_export("simo", true) . '</pre>';exit;

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
try {
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = SMTP::DEBUG_SERVER;     

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = "Encryption: TLS";
$mail->Port = 465;

$mail->Username = "simotaquahout@gmail.com";
$mail->Password = "Simo@2002";

$mail->setFrom($email, $name);
$mail->addAddress("simotaquahout@gmail.com", "mohamed");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
