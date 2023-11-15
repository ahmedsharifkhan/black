<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Replace with your email address
    $to = "abdunnoor540@gmail.com.com";

    // Extract form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Send email
    $headers = "From: $email\r\nReply-To: $email\r\n";
    if (mail($to, $subject, $email_message, $headers)) {
        http_response_code(200);
        echo json_encode(["message" => "Form submission successful"]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => "Failed to send email"]);
    }
} else {
    // Not a POST request, return 404
    http_response_code(404);
    echo "Not Found";
}
