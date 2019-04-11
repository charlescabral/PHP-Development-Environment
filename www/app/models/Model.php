<?php namespace app\models;

use app\classes\Bind;
use app\models\Connection;
use app\traits\PersistDb;

abstract class Model {

	use PersistDb;

	protected $connection;

	public function __construct() {
		$this->connection = Bind::get('connection');
	}

	public function all() {
		$sql = "select * from {$this->table}";
		$list = $this->connection->prepare($sql);
		$list->execute();

		return $list->fetchAll();
	}

	public function find($field, $value) {
		// prepare() -> para comandos com dados variaveis
		// query() -> para dados fechados
		// bindValue(1, var) -> substitui o ? pelo valor recebido. É necessário uma chamada pra cada interrogação. Ex.: bindValue(2, var)
		// bindValue('id', var) -> substitui o ':id' pelo valor recebido
		// bindParam($field) -> só aceita os parametros herdados da função, nunca valores diretos.
		$sql = "select * from {$this->table} where {$field} = :{$field}";
		$list = $this->connection->prepare($sql);
		$list->bindValue($field, $value);
		$list->execute();

		return $list->fetch();
	}

	public function delete($id) {
		$sql = "delete from {$this->table} where id = ?";
		$delete = $this->connection->prepare($sql);
		$delete->bindValue(1, $id);
		$delete->execute();

		return $delete->rowCount();
	}

}