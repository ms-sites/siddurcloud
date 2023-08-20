<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mshimonov@gmail.com"; // Email address to receive the email
    $subject = $_POST["event-type"]; // Event type as the subject
    $message = $_POST["comments"]; // User's comments as the email body
    $headers = "From: " . $_POST["email"] . "\r\n" .
               "Reply-To: " . $_POST["email"] . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>
