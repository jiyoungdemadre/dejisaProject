<?php

class User
{
    private $user_id;
    private $first_name;
    private $last_name;
    private $mail;
    private $password;

    



    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }


    public function getFirst_name()
    {
        return $this->first_name;
    }

    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;
    }


    public function getLast_name()
    {
        return $this->last_name;
    }

    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

public function editProfile($firstName,$lastName,$mail,$id){

    $pdo = new PDO('mysql:host=localhost;dbname=music_app;charset=utf8', 'root', '');

    $editprofile = $pdo->prepare("UPDATE users SET first_name = ?, last_name = ?, mail = ? WHERE user_id = ?");

    $editprofile->bindParam(1,$firstName);
    $editprofile->bindParam(2,$lastName);
    $editprofile->bindParam(3,$mail);
    $editprofile->bindParam(4,$id);

    if($editprofile->rowCount()>0){
        return 'No Update';
    }else{
        return 'Profile updated';
    }
}
}
