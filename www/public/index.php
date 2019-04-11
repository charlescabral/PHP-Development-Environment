<?php require "../init.php";

use app\classes\Routes;
use app\classes\Uri;
use app\classes\Layout;

$routes = [
	'/' => 'controllers/index',
	'/signup' => 'controllers/signup',
	'/user_store' => 'controllers/user_store',
	'/user_edit' => 'controllers/user_edit',
	'/user_update' => 'controllers/user_update',
	'/user_delete' => 'controllers/user_delete'
];

$uri = Uri::load();
$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->base('base');