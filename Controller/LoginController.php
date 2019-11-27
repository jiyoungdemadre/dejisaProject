<?php
session_start();

require_once 'Model/LoginModel.php';

if (!empty($_POST)) {
    $connect = loginTo($_POST['email'], $_POST['password']);
    var_dump($connect);
    if ($connect) {

        // storing objects into session (serialize then unserialize)
        $_SESSION['user'] = serialize($connect);
        header("Location: ?page=account");
    }
}

include_once 'View/LoginView.php';
