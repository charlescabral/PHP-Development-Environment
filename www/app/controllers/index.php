<?php

use app\models\User;

$user = new User;
$users = $user->all();

$title = 'Home';

$layout->add('home');