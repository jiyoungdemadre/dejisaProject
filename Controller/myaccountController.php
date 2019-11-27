<?php 

session_start();
$currentUser = $_SESSION['user'];


   if(isset($_POST['editProfile'])){
      $currentID = $currentUser->getUser_id();
   
      if(!empty($_POST['firstname']))
         $newFirstName= $_POST['firstname'];

      if ($_POST['lastname'])
         $newLastName= $_POST['lastname'];
         
      if ($_POST['email'])
         $newEmail= $_POST['email'];
      
      $currentUser->editProfile($newFirstName, $newLastName, $newEmail, $currentID);

   }

   include_once 'myaccountView.php';
   ////firstname lastname email
?>