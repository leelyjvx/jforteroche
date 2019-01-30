<?php

require('Manager.php');

class AdminManager extends Manager {

	protected $db;

	public function __construct() {
		$this->db = $this->dbConnect();
	}

	public function addAdmin($admin) {
		$req = $this->db->prepare('INSERT INTO admin(id, username, password) VALUES (?, ?, ?)');
		$req->execute(array($admin->getID(), $admin->getUsername(), $admin->getPassword()));
		return $req;
	}

	public function count() {
		$req = $this->db->query('SELECT ')
	}

}