<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$clientID =$_POST['clientID'];
$message=$_POST['message'];

$email_from='info@yogastudio.com';
$email_subject='new form submission';
$email_body="User Name: $name.\n".
"User Email: $visitor_email.\n".
"ClientID: $clientID.\n".
"User Message: $message.\n";
$to='bansalkhushi1505@gmail.com';
$headers="From: $email_from\r\n";
$headers .="Reply-To:$visitor_email \r \n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>