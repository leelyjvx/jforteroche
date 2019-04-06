<?php

/**
* Manager
* DataBase Connexion
*
* @author Lena>
*/

class Manager {

	public function dbConnect() {
		try {
			
			$db = new PDO('mysql:host=db774321020.hosting-data.io;dbname=db774321020;charset=utf8', 'dbo774321020', 'Alwayslove01!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			return $db;

		} catch (Exception $e) {
			
			die('Erreur : ' . $e->getMessage());

		}
	}
}