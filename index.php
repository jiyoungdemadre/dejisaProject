<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
</head>

<body>
    <?php
    if (!empty($_GET)) {
        if ($_GET['page'] == '') {
            include_once 'Controller/MusicAppController.php';
        } else if ($_GET['page'] == 'register') {
            include_once 'Controller/RegisterController.php';
        } else if ($_GET['page'] == 'login') {
            include_once 'Controller/LoginController.php';
        } else if ($_GET['page'] == 'account') {
            include_once 'Controller/AccountController.php';
        } else if ($_GET['page'] == 'artist') {
            include_once 'Controller/ArtistController.php';
        }
    } else {
        include_once 'Controller/MusicAppController.php';
    }
    ?>

    
</body>

</html>