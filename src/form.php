<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "camille.denis.24@eigsi.fr";
  $subject = "New message from $name";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "Message sent successfully!";
  } else {
    echo "Error: Message not sent.";
  }
}
?>
