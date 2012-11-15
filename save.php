<?php
$to      = 'ali.amaan@gmail.com';
$subject = 'you are a rockstar!';
$message = 'Yes you really are';
$headers = 'From: ali.amaan@gmail.com' . "\r\n" .
    'Reply-To: ali.amaan@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
