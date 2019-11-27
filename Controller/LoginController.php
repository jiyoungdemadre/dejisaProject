<?php
session_start();

require_once 'Model/LoginModel.php';

$connect = loginTo('lil.buk@si.com', '123456');
var_dump($connect);
if ($connect) {
    $_SESSION['id'] = $connect['user_id'];
    header("Location: ?page=account");
}

include_once 'View/LoginView.php';
