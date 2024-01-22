<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Process the form data, like sending an email
    echo "Thank you for your message, " . $name . "!";
    // Additional PHP code for form handling
}
?>
