<?php

    require "../../../init.php";

    $validate = validate([
        'name' => 's',
        'email' => 'e'
    ]);

    dd($validate);