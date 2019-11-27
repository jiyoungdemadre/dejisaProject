<?php
require_once 'MusicAppModel.php';
function register($email, $password)
{
    $pdo = connectDB();

    $user = $pdo->prepare('INSERT INTO users (mail, password) VALUES (?,?)');
    $user->bindParam(1,$email);
    $user->bindParam(2,$password);
    var_dump($user);
    var_dump($email);
    var_dump($password);
    if ($user->execute()) {
        echo 'successful';
      } else {
        echo 'error';
      }
}

function getEmails()
{
    $pdo = connectDB();

    $result = $pdo->query('SELECT mail FROM users');
    $emails = $result->fetchAll(PDO::FETCH_ASSOC);
    
    return $emails;
}

// for Dennis
function checkEmailMatch($mail)
{
    foreach (getEmails() as $email) {
        if($mail == $email){
            return false;                    
        }
    }
    return true;
}