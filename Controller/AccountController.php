<?php 
session_start();
require 'Classes/User.php';
$currentUser = unserialize($_SESSION['user']);
var_dump($currentUser);

   if(isset($_POST['editProfile'])){
      $currentID = $currentUser->getUser_id();
      if(!empty($_POST['firstname']))
      $newFirstName= $_POST['firstname'];
      
      if ($_POST['lastname'])
      $newLastName= $_POST['lastname'];
      
      if ($_POST['email'])
      $newEmail= $_POST['email'];
      
      echo $currentUser->editProfile($newFirstName, $newLastName, $newEmail, $currentID);
      $_SESSION['user'] = serialize($currentUser);
      var_dump($currentUser);
   }
 

   include_once 'View/AccountView.php';
?>