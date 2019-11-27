<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
</head>

<body>
    <?php
    // Display the movies
    foreach ($users as $user) {
        echo '<div>';
        echo $user->getFirst_name() . '<br>';
        echo $user->getLast_name() . '<br>';
        echo $user->getMail() . '<br>';
        ?>
    <?php

        echo '</div>';
        echo '<hr>';
    }


    ?>


</body>

</html>