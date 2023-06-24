<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sender's Information
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Attachment
    $attachment = $_FILES['attachment']['tmp_name'];
    $attachment_name = $_FILES['attachment']['name'];

    // Recipient Email Addres
    $recipient_email = 'joshua.pardo30@gmail.com';

    // Email Subject
    $subject = 'New Email from Contact Form';

    // Email Body
    $email_body = "Name: $name\n\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message\n";

    // Headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Attachment Handling
    if (!empty($attachment)) {
        $file_size = $_FILES['attachment']['size'];
        $file_type = $_FILES['attachment']['type'];

        $file_content = file_get_contents($attachment);
        $file_content = chunk_split(base64_encode($file_content));

        $boundary = md5(time());
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n";

        $email_body = "--" . $boundary . "\r\n";
        $email_body .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
        $email_body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $email_body .= $email_body . "\r\n";

        $email_body .= "--" . $boundary . "\r\n";
        $email_body .= "Content-Type: $file_type; name=\"$attachment_name\"\r\n";
        $email_body .= "Content-Disposition: attachment; filename=\"$attachment_name\"\r\n";
        $email_body .= "Content-Transfer-Encoding: base64\r\n";
        $email_body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
        $email_body .= $file_content . "\r\n";

        $email_body .= "--" . $boundary . "--";
    }

    // Send Email
    if (mail($recipient_email, $subject, $email_body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>
