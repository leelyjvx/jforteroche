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


	/*public function exists($info)
	{
		if (is_int($info)) {
			return $this->db->query('SELECT username FROM admin WHERE id = '.$info)->fetchColumn();
		} else {
			$req = $this->db->prepare('SELECT username FROM admin WHERE username = :username');
			$req->execute([':username' => $info]);

			return $req->fetchColumn();
		}
	}*/
}