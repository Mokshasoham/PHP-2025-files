<?php
$to = "sankabaktulamoksha3soham12@gmail.com";
$subject = "Testing Email with Attachment";
$message = "This is a Testing Email with an attachment.";
$from = "sankabaktulamoksha3soham12@gmail.com";
$file = "file:///C:/Users/sanka/Downloads/Ai_patent1.pdf"; // Change this to your file path

// Read the file
$content = chunk_split(base64_encode(file_get_contents($file)));
$filename = basename($file);
$boundary = md5(time());

// Headers
$headers = "From: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

// Email Body
$body = "--$boundary\r\n";
$body .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
$body .= "$message\r\n";
$body .= "--$boundary\r\n";
$body .= "Content-Type: application/octet-stream; name=\"$filename\"\r\n";
$body .= "Content-Disposition: attachment; filename=\"$filename\"\r\n";
$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
$body .= "$content\r\n";
$body .= "--$boundary--";

// Send Email
if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully with attachment.";
} else {
    echo "Email not sent successfully.";
}
?>