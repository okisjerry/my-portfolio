<?php

$name = $_POST["name"];
$email= $_POST["name"];
$message = $_POST["name"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer("true");
$mail->isSMTP();
$mail->SMTPauth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "yourexample.com";
$mail->Password = "password";

$mail->setFrom($emai, $name);
$mail->addAddress("okisjeremiah@gmail.com", "Gold");

$mail->Subject = $subject;
$mail->body = $message;

$mail->send();

return "Email sent";