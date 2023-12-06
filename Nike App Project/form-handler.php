<?php
$name = $_Post['name'];
$visitor_email = $_Post['email']; 
$subject = $_Post['Category'];
$message = $_POST['Message'];

$email_from='info@nikestore.com';

$email_subject='New From Submission';

$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "Category: $Category.\n".
            "User Message: $Message.\n".


$to = 'priyanshsoni186@gmail.com';

$header = "From: $email_from \r\n";

$header = "Reply-To: $visitor_email"


mail($to,$email_subject,$email_body);

header("Location: Contact.html");           
?>