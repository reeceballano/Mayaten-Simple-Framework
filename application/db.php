<?php
class Db {
	public $conn;

	public function __construct() {
		try {
			$this->conn = new PDO('mysql:host=YOURHOST;dbname=YOUR-DATABASE', 'MYSQL-USERNAME', 'MYSQL-PASSWORD');
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
}