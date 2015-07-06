<?php

//form variables
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$human = intval($_POST['human']);

//compose email variables

$from = 'Your Website';
$to = 'tytodesigns@gmail.com';
$subject = 'Message from your website';

$body = "From: $name\n Email: $email\n Message:\n $message";

mail ($to, $subject, $body, $from)
?>