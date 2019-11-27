<?php

function register($email, $password)
{
    $pdo = connectDB();

    $user = $pdo->prepare('INSERT INTO users (mail, password) VALUES (?,?)');
    $user->bindParam(1,$email);
    $user->bindParam(2,$password);

    if ($user->execute()) {
        return 'successful';
      } else {
        return 'error';
      }
}

function getEmails()
{
    $pdo = connectDB();

    $pdo->query('SELECT mail FROM users');
    $emails = $pdo->fetchAll(PDO::FETCH_ASSOC);
    
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