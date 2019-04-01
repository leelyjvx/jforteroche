<?php

class Admin 

{
	protected $_id;
	protected $_username;
	protected $_password;
	
	public function __construct($username, $password) {
		$this->_username = $username;
		$this->_password = $password;
	}

	public function getID() {
		return $this->_id;
	}

	public function getUsername() {
		return $this->_username;
	}

	public function getPassword() {
		return $this->_password;
	}

	public function setID($id) {
		$this->_id = $id;
	}

	public function setUsername($username) {
		$this->_username = $username;
	}

	public function setPassword($password) {
		$this->_password = $password;
	}
	
}