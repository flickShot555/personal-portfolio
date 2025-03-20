<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "abbas1795khan@gmail.com"; // Replace with your email
    $subject = "New Contact Form Message from $name";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email";

    $emailBody = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $emailBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
