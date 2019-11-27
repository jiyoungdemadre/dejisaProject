<?php
require_once 'RegisterModel.php';

$mail = "";
$password = "";

if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    $sanitizeMail = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);
    $checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

    if (empty($mail) || empty($password)) {
        // Check if the fields are empty
        echo 'You must fill every fields';
    } elseif (!$sanitizeMail) {
        // Check if the mail is ok
        echo 'You must enter a valid email';
    } else {
        if (checkEmailMatch($sanitizeMail)) {
            register($sanitizeMail, $hashPassword);
        } else {
            echo 'This email is already used sorry bro';
        }
    }
}
