<?php

function myAutoloader($class)
{
    require_once '../Classes/' . $class . '.php';
}
spl_autoload_register('myAutoloader');


function getUsers()
{
    $db = new PDO('mysql:host=localhost;dbname=music_app', 'root', '');

    $user = $db->query('SELECT * FROM users');
    $users = $user->fetchAll(PDO::FETCH_CLASS, 'User');
    return $users;
}
