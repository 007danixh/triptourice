<?php
session_start();


if (isset($_POST['submit']))
{
    
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $_SESSION['message'] = "Invalid Email";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

$name = $_POST['name'];
$mailFrom = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mailTo = "info@triptourice.com";
$headers = ['From' => $mailFrom, 'Reply-To' => $mailTo, 'Content-type' => 'text/html; charset=iso-8859-1'];

// $headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$txt = "You have received an e-mail from " . $name . "\n\n" . $message . " The Contact number is " . $phone;

if (mail($mailTo, 'NeverSleeps', $txt, $headers)) {

    $_SESSION['message'] = "Your message have been sent successfully, We will get back to you soon!";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}

// testing this should be removed in prod.
// mail($mailTo, 'Seperhr', $txt, $headers);
// $_SESSION['message'] = "Your message have been sent successfully.";
// header('Location: ' . $_SERVER['HTTP_REFERER']);

}
 else {
    $_SESSION['message'] = "Something went wrong try again latter!";
    header("Location: ../index");

}
