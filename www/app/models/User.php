<?php

namespace app\models;

class User extends Model {

	protected $table = 'users';

	// public function insert(array $attributes) {
	// 	$sql = "insert into {$this->table}(name,email,password) values(:name,:email,:password)";

	// 	$insert = $this->connection->prepare($sql);

	// 	// foreach ($attributes as $key => $value) {
	// 	// $insert->bindValue($key, $value);
	// 	// }

	// 	return $insert->execute($attributes);
	// }

	// public function update(array $attributes) {
	// 	$sql = "update {$this->table} set name = :name, email = :email, password =:password where id = :id";
	// 	$update = $this->connection->prepare($sql);
	// 	$update->execute($attributes);

	// 	return $update->rowCount();
	// }

}