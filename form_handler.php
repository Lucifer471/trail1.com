<?php

$name = $_POST['name'];
$vister_mail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = "New Enqurey Form Submission";

$email_body = "User Name: $name.\n".
"User Email: $visiter_mail.\n". 
"Subject Of Interest: $subject.\n". 
"User Message: $message.\n";

$to = 'mental1961982@gmail.com';

$headers = "From: $email_from\r\n";
$headers .="Replay-to: $vister_mail\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>