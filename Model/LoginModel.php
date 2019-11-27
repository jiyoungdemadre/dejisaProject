<?php

require_once 'MusicAppModel.php';


function loginTo($email, $password)
{
    $db = connectDB();
    $connect = $db->query('SELECT user_id FROM users WHERE mail="' . $email . '" AND password="' . $password . '"');
    return  $connect->fetch(PDO::FETCH_ASSOC);
}
