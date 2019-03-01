<?php require "../init.php";

use app\classes\Routes;
use app\classes\Uri;
use app\classes\Layout;

$routes = [
	'/' => 'controllers/index',
	'/signup' => 'controllers/signup',
	'/user_store' => 'controllers/user_store'
];

$uri = Uri::load();
$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->base('base');