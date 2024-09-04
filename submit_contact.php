// submit_contact.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your email where the form submissions will be sent
    $to = "dfemid@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Use mail() function or any other email sending library like PHPMailer
    if (mail($to, $subject, $body)) {
        echo "Thank you for contacting us! We'll get back to you soon.";
    } else {
        echo "An error occurred. Please try again.";
    }
}
?>
