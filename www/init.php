<?php

require "vendor/autoload.php";

app\classes\Bind::bind('connection', app\models\Connection::connect());