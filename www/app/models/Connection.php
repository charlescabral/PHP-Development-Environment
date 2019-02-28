<?php

namespace app\models;

use PDO;

class Connection {

	public static function connect() {
		$config = require "../config.php";
		$pdo = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['name']};charset={$config['db']['charset']}", $config['db']['user'], $config['db']['pass'], null);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		return $pdo;
	}

}