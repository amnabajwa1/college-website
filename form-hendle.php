<?php
$name =$-POST['name '];
$=$visitor-email = $_POST['email '];
$=$subject = $_POST['subject '];
$=$message = $_POST['message '];


$email-form = 'info@yourwebsite.con'
$email-subject = 'New Form Submission';

$email-body = "User Name: $name.\n".
              "User Email:$visitor-email.\n".
              "Subject: $subject. \n".
              "User Message: $message .\n".


$tp = 'avinash6252@gmail.con';

$headers = "From: $email-from \r\n"
$headers .= "reply-To: $visitor-email\r\n";
mail($to,$email-subject, $email-body,$headers);

header("Location: Contact.html")

?>