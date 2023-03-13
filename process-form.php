<?php
if($_POST) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = 'recruiter@company.com'; // Replace with your own email address
  $subject = 'New message from job applicant';
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  
  if(mail($to, $subject, $body)) {
    echo 'Thank you for your message!';
  } else {
    echo 'There was a problem sending your message.';
  }
}
?>
