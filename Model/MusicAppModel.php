<?php

function myAutoloader($class)
{
    require_once 'Classes/' . $class . '.php';
}
spl_autoload_register('myAutoloader');

function connectDB()
{
  return new PDO('mysql:host=localhost;dbname=music_app;charset=utf8', 'root', '');
}

function getUsers()
{
    $db = connectDB();

    $user = $db->query('SELECT * FROM users');
    $users = $user->fetchAll(PDO::FETCH_CLASS, 'User');
    return $users;
}
