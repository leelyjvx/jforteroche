<?php

//require('Manager.php');

class AdminManager extends Manager {

	protected $db;

	public function __construct() {
		$this->db = $this->dbConnect();
	}

	public function check($admin) {

		$req = $this->db->prepare('SELECT username, password FROM admin WHERE username = ? AND password = ?');
		$req->execute(array($admin->getUsername(), $admin->getPassword()));
		$result = $req->fetch(PDO::FETCH_ASSOC);
		return $result; 
	} 

	public function add($admin) {

		$req = $this->db->prepare('INSERT INTO admin (username, password) values (?, ?)');
		$req->execute(array($admin->getUsername(), $admin->getPassword()));
		return $req;
	}
}