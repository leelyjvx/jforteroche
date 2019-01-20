<?php

require('Manager.php');

class PostManager extends Manager {

	protected $db;

	public function __construct() {
		$this->db = $this->dbConnect();
	} 

	public function addpost($post) {
		$req = $this->db->prepare('INSERT INTO posts(id, title, content, postdate) VALUES (?, ?, ?, NOW())');
		$req->execute(array($post->getID(), $post->getTitle(), $post->getContent()));
		return $this->db->lastInsertId();
	}

	public function read() {

		$posts = [];
		$req = $this->db->query('SELECT * FROM posts');
		while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
			$post = new Post($data['title'], $data['content']);
			$post->setID($data['id']);
			$posts[] = $post;
		}
		return $posts;
	}

	public function readID($id) {

		$req = $this->_db->prepare('SELECT id, title, content FROM posts WHERE id = ?');
		$req->execute(array($id));
		$data = $req->fetch(PDO::FETCH_ASSOC);
		$post = new Post($data['title'], $data['content']);
		$post->setID($data['id']);
		return $post;

	}

	public function delete($id) {

		$req = $this->_db->prepare('DELETE FROM posts WHERE id = :id');
		$req->execute([':id' => $id]);
		return $req;

	}

	public function update($post) {

		$req = $this->_db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
		$req->execute([':title' => $post->getTitle(), ':content' => $post->getContent(), ':id' => $post->getID()]);
		var_dump($req);
		return $req;
	}
}