<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email-address']))
$email = $_POST['email-address'];
if(isset( $_POST['phone-number']))
$phone = $_POST['phone-number'];
if(isset( $_POST['comment']))
$message = $_POST['comment'];


$subject = 'Support Mail';

$content="From: $name \n Email: $email \n Message: $message \n Phone: $phone";
$recipient = "grocykaa@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>