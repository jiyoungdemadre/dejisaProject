<?php 
session_start();
$currentUser= $_SESSION['user']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Account</title>
</head>
<body>
    <div>
        <form method="post">
            <label for="firstname">Firstname</label> <br>
                <input type="text" name="firstname" value="<?php echo $currentUser->getFirst_name ?>"><br>
            <label for="lastname">Last Name</label><br>
                <input type="text" name="lastname" value="<?php echo $currentUser->getlast_name ?>"><br>
            <label for="email">Email Address</label><br>
                <input type="text" name="email" value="<?php echo $currentUser->getmail ?>" readonly><br>
            <input type="submit" name="editProfile" value="Edit">
            </form>

    </div>
</body>
</html>