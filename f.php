<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "grecualexandrugabriel@yahoo.com";
    $subject = "Feedback from $fname $lname";
    $body = "Name: $fname $lname\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    if (mail($to, $subject, $body)) {
        http_response_code(200); // OK
    } else {
        http_response_code(500); // Internal Server Error
    }
} else {
    http_response_code(405); // Method Not Allowed
}
?>
