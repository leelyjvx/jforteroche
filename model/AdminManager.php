<?php

//require('Manager.php');

class AdminManager extends Manager {

	protected $db;

	public function __construct() {
		$this->db = $this->dbConnect();
	}


	public function add($admin) {

		$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

		$req = $this->db->prepare('INSERT INTO admin(username, password) VALUES (:username, :password)');
		$req->bindValue(':username', $admin->getUsername());
		$req->bindValue(':password', $hash );
		$req->execute();
		return $req;
	}

	public function check($username, $password) {

		$req = $this->db->prepare('SELECT username, password FROM admin WHERE username = :username');
		$req->execute(array('username' => $username ));
		$data = $req->fetch();
		$verif = password_verify($password, $data['password']);
		return $verif;
	}

}