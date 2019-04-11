<?php

use app\classes\Validation;
use app\models\User;

$user = new User;
$validation = new Validation;
$validate = $validation->validate($_GET);

$updated = $user->delete($validate->id);

if ($updated) {
    header('location:/');
}