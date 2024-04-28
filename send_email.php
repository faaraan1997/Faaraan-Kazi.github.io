<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "faaraankazi@gmail.com"; // Change this to your email address
    $subject = "New message from your Portfolio website";
    $body = "Name: $name\nEmail: $email\n\n$message";
    
    if (mail($to, $subject, $body)) {
        echo '<script>alert("Message sent successfully. We will contact you shortly.")</script>';
    } else {
        echo '<script>alert("There was a problem sending your message. Please try again later.")</script>';
    }
}
?>
