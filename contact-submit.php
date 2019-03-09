<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "rayyvonne46@gmail.com";
$subject = "Pet Seeker Contact";
$mailheader = "From: $email \r\n";

$location = "contact-thankyou.php#section-contact";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

header( "Location: $location" );

?>