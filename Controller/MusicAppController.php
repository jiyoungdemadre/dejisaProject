<?php

require_once '../Model/MusicAppModel.php';

$users = getUsers();

if (count($users) == 0)
    include_once 'ErrorView.php';
else
    include_once '../View/MusicAppView.php';
