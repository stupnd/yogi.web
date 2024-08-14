<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com";
    $subject = "Appointment Request from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nPreferred Date: $date\nPreferred Time: $time\n\nAdditional Notes:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Appointment request sent successfully.";
    } else {
        echo "There was a problem sending your request.";
    }
}
?>
