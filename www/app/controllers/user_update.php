<?php

use app\classes\Validation;
use app\models\User;

$user = new User;

$validation = new Validation;

$validate = $validation->validate($_GET);

$updated = $user->update($validate, ['id' => $validate->id]);

if ($updated) {
	header('location:/');
}