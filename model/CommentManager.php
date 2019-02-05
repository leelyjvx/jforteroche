<?php 

//require('Manager.php');

class CommentManager extends Manager {

	protected $db;

	public function __construct() {
		$this->db = $this->dbConnect();
	}

	public function addComment($comment) {

		$req = $this->db->prepare('INSERT INTO comments(id, postid, pseudo, comment, commentdate, reported) VALUES (?, ?, ?, ?, NOW(), 0)');
		$affectedLines = $req->execute(array($comment->getID(), $comment->getPostID(), $comment->getPseudo(), $comment->getComment()));
		return $affectedLines;
	}

	public function readcomments($postID) {

		$comments = [];
		$req = $this->db->prepare('SELECT * FROM comments WHERE postid = ? ORDER BY commentdate DESC');
		$req->execute(array($postID));
		while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
			$comment = new Comment($data['pseudo'], $data['comment']);
			$comment->setID($data['id']);
			$comments[] = $comment;
		}
		return $comments;
	}

	public function comments() {

		$comments = [];
		$req = $this->db->query('SELECT * FROM comments ORDER BY commentdate DESC');
		while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
			$comment = new Comment($data['pseudo'], $data['comment']);
			$comment->setID($data['id']);
			$comment->setPostID($data['postid']);
			$comments[] = $comment;
		}
		return $comments;
	}

	public function readcomment($id) {

		$req = $this->db->prepare('SELECT * FROM comments WHERE id = ?');
		$req->execute(array($id));
		$data = $req->fetch(PDO::FETCH_ASSOC);
		$comment = new Comment($data['postid'], $data['pseudo'], $data['comment']);
		$comment->setID($data['id']);
		return $comment;

	}

	public function report($id) {
		$req = $this->db->prepare('UPDATE comments SET reported = reported + 1 WHERE id = :id');
		$req->execute([':id' => $id]);
		return $req;
	}

	public function reported() {
		$comments = [];
		$req = $this->db->query('SELECT * from comments WHERE reported > 0 ORDER BY commentdate DESC');
		while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
			$comment = new Comment($data['pseudo'], $data['comment'], $data['commentdate']);
			$comment->setPostID($data['postid']);
			$comment->setID($data['id']);
			$comments[] = $comment; 
		}
		return $comments;
	}

	public function deletecomment($id) {
		$req = $this->db->prepare('DELETE FROM comments WHERE id = :id');
		$req->execute([':id' => $id]);
		return $req;
	}

}

// WHERE postid = $postid

// créer un commentaire CHECKKKKK
// lire un commentaire OK
// lire tous les commentaires OK
// lire tous les commentaires d'une page ou d'un article CHECKKKK
// signaler un commentaire OK
// voir les commentaires signalés OK
// supprimer un commentaire OK
