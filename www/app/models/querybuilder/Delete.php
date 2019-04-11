<?php

namespace app\models\querybuilder;

class Update {

	private $where;

	public function where($where) {
		$this->where = $where;

		return $this;
	}

	public function sql($table, $attributes) {

		$sql = "delete from {$table} where id = ?";

		// unset($attributes[array_keys($this->where)[0]]);

		// foreach ($attributes as $key => $value) {
		// 	$sql .= "{$key} = :{$key}, ";
		// }

		// Remove a virgula e espaço no final da string
		// $sql = rtrim($sql, ', ');

		// $where = array_keys($this->where);

		// $sql .= " where {$where[0]} = :{$where[0]}";

        return $sql;
        
        // $sql = "delete from {$this->table} where id = ?";

	}

}