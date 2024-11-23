<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $fname = strip_tags(trim($_POST["fname"]));
    $fname = str_replace(array("\r","\n"),array(" "," "),$fname);
    
    $lname = strip_tags(trim($_POST["lname"]));
    $lname = str_replace(array("\r","\n"),array(" "," "),$lname);

    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    
    $comment = trim($_POST["comment"]);

    // Check that data was sent to the mailer.
    if (empty($fname) || empty($lname) || empty($comment) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }

    // Set the recipient email address.
    $recipient = "mubarakolagoke@gmail.com";

    // Set the email subject.
    $subject = "New contact from $fname $lname";

    // Build the email content.
    $email_content = "First Name: $fname\n";
    $email_content .= "Last Name: $lname\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Comment:\n$comment\n";

    // Build the email headers.
    $email_headers = "From: $fname $lname <$email>";

    // Send the email.
    if (@mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Thank you! Your message has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong, and we couldn't send your message.";
        exit;
    }

} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
