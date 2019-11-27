<?php



function register()
{
    $pdo = connectDB();

    $user = $pdo->prepare('INSERT INTO users (mail, password) VALUES (?,?)');
    $user->bindParam((1,))
}