<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Recipient email address
  $to = 'uchicagoacm@gmail.com';

  // Subject of the email
  $email_subject = 'New Contact Form Submission - ' . $subject;

  // Email body
  $email_body = "Name: $name\n";
  $email_body .= "Email: $email\n";
  $email_body .= "Telephone: $telephone\n";
  $email_body .= "Subject: $subject\n";
  $email_body .= "Message:\n$message";

  // Additional headers
  $headers = "From: $email";

  // Send the email
  mail($to, $email_subject, $email_body, $headers);

  // Redirect back to the contact page or a thank you page
  header("Location: contact-thank-you.html");
  exit;
}
?>
