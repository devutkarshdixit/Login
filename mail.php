<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'luckygame2427@gmail.com';
$email_subject = "New form submission";

$email_body = "User Name: $name .\n".
"User Email: $visitor_email.\n".
"User meassage: $message. \n";

$to = "utkarshdixit2021@gmail.com";
$headers = "From: $email_from \r \n";
$headers = "Reply-to: $visitor_email \r\n";
mail(
    $to,$email_subject,$email_body,$headers);
    header("Location: Contact.html");


?>