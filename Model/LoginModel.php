<?php

require_once 'MusicAppModel.php';


function loginTo($email, $password)
{
    $db = connectDB();
    $user = $db->query('SELECT * FROM users WHERE mail="' . $email . '" AND password="' . $password . '"LIMIT 1');
    $user->setFetchMode(PDO::FETCH_CLASS, 'User');
    $final = $user->fetch();
    return $final;
}
