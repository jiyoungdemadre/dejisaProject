<?php
require_once 'View/register.php';
require_once 'Model/RegisterModel.php';

$mail = "";
$password = "";

if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $sanitizeMail = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);
    $checkEmail = filter_var($sanitizeMail, FILTER_VALIDATE_EMAIL);

    if (empty($checkEmail) || empty($password)) {
        // Check if the fields are empty
        echo 'You must fill every fields';
    } elseif (!$checkEmail) {
        // Check if the mail is ok
        echo 'You must enter a valid email';
    }else{
        if(checkEmailMatch($checkEmail)){
            register($checkEmail,$password);
        } else{
            echo'This email is already used sorry bro';
        }
    }
}
