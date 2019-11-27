<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>

<body>
  <?php require_once 'menu.html';?>

  <h1>Registration Page</h1>
  <br>
  <form action="" method="post">
    <input type="text" name="mail" value="<?php echo $mail ?>"><br>
    <input type="password" name="password" value="<?php echo $password ?>"><br>
    <input type="submit" name="submit" value="Register">
  </form>
</body>

</html>