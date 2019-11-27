<?php
session_start();

require_once 'Model/LoginModel.php';

if (!empty($_POST)) {
    $connect = loginTo($_POST['email'], $_POST['password']);
    if ($connect) {
        $_SESSION['user'] = $connect;
        header("Location: ?page=account");
    }
}

include_once 'View/LoginView.php';
