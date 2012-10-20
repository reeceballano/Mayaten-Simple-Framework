<?php
class Db {
	public $conn;

	public function __construct() {
		try {
			$this->conn = new PDO('mysql:host=localhost;dbname=loginlogout', 'root', '');
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
}