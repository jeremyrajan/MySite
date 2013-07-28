<?php

$name=$_POST['name'];
$email=$_POST['email'];
$purpose=$_POST['purpose'];
$comments=$_POST['comments'];

$to      = 'jeremy_rajan@yahoo.in';
$subject = 'Message from '.$name;
$message = $comments;
$headers = 'From: webmaster@jeremyrajan.com' . "\r\n" .
    'Reply-To: webmaster@jeremyrajan.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>