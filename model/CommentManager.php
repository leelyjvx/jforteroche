<?php 

//require('Manager.php');

class CommentManager extends Manager {

	protected $db;

	public function __construct() {
		$this->db = $this->dbConnect();
	}

	public function addComment($comment) {

		$req = $this->db->prepare('INSERT INTO comments(postid, pseudo, comment, commentdate, reported) VALUES (?, ?, ?, NOW(), 0)');
		$affectedLines = $req->execute(array($comment->getPostID(), $comment->getPseudo(), $comment->getComment()));
		return $affectedLines;
	}

	public function readcomments($postID) {

		$comments = [];
		$req = $this->db->prepare('SELECT * FROM comments WHERE postid = ?');
		$req->execute(array($postID));
		while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
			$comments[] = new Comment($data['postid'], $data['pseudo'], $data['comment']);
		}
		return $comments;
	}
}

// WHERE postid = $postid
 
// créer un commentaire CHECKKKKK
// lire un commentaire 
// lire tous les commentaires
// lire tous les commentaires d'une page ou d'un article CHECKKKK
// signaler un commentaire
// voir les commentaires signalés
// supprimer un commentaire
