<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "tntaajtak@gmail.com";
  $subject = "New Email from Website";
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $headers = "From: $name <$email>" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>
