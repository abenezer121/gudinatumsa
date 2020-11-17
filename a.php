<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$headers = 'From: '.$email . "\r\n" .
'Reply-To: <test@test.com>';

mail('gudinatumsafound@gudinatumsafoundation.org', $subject, $message, $headers,
  '-fwebmaster@example.com');

echo "email sent.";
?>