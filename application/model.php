<?php
include('db.php');

class Model {
	private $_db;

	public function __construct() {
		$this->_db = new Db();
	}

	public function prep($s) {
		return $this->_db->conn->prepare($s);
	}

	public function query($option, $table, $mode) {
		if( is_array($option) ) {
			$option = implode(',', $option);
		}

		$query = Model::prep("SELECT $option FROM $table");
		$query->execute();
		$query->setFetchMode($mode);
		return $query->fetchAll();
	}

	public function queryUsers() {
		$fields = array('uid', 'username');
		return Model::query($fields, 'users', PDO::FETCH_OBJ);
	}

	public function user_info() {
		return array(
			'firstname'=>'Reece',
			'lastname'=>'Ballano'
			);
	}
}
