<?php
class Controller {
	public $load;
	public $model;


	public function __construct() {
		$this->load = new Load();
		$this->model = new Model();

		$this->home();
	}

	public function home() {
		$data = $this->model->queryUsers();

		if( count($data) >= 1) {
			$this->load->view('users.php', $data);
		} else {
			throw new Exception('No users!');
		}
	}
}