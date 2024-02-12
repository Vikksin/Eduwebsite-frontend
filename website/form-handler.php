<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_from = 'info@yourwebsite.com'
$email_subject = 'New Form Submission'
$email_body="user name: $name.\n".
            "user email: $visitor_email.\n".
            "subject: $subject.\n".
            "user message: $message.\n";

  $to = 'vikaskohli77043@gmail.com';

  $headers = "from: email_from \r\n";

  $headers .= "Reply-To:$visitor_email \r\n";   
  
  mail($to,$email_subject,$email_body,$headers)

  header("Location: CONTACT.html");
            
?>