<?php

use app\models\User;

$user = new User;
$users = $user->all();

$title = 'Home';

require "../app/views/index.php";

// $layout->add('home');
