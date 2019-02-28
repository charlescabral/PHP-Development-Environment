<?php require "../init.php";

use app\classes\Routes;
use app\classes\Uri;

$routes = [
	'/' => 'controllers/index'
];

$uri = Uri::load();

require Routes::load($routes, $uri);

