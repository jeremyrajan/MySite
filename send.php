<?php

$name=$_POST['name'];
$email=$_POST['email'];
$purpose=$_POST['purpose'];
$comments=$_POST['comments'];

$to      = 'youremail@email.com';
$subject = 'Message from '.$name;
$message = $comments;
$headers = 'From: webmaster@website.com' . "\r\n" .
    'Reply-To: webmaster@website.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>
