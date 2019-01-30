
	public function readcomments($postID) {

		$comments = [];
		$req = $this->db->prepare('SELECT * FROM comments WHERE postid = ? ORDER BY commentdate DESC');
		$req->execute(array($postID));
		while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
			$comments = new Comment($data['pseudo'], $data['comment']);
			$comments->setID($data['id']);
			$comment
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

try {

	if ($_GET['action']) {

		if ($_GET['action'] === 'connect') {
			connect();
		}

		if ($_GET['action'] === 'valide') {
			if (isset($_POST['username']) && isset($_POST['password'])) {
				valide();
			}
		} else {
			throw new Exception("Problème d'authentification. Merci de réessayer.");

		}

		if ($_GET['action'] === 'admin') {
			// Peut-être ajouter encore une condition qui dit que si la session est OK
			/*if (condition) {
				# code...
			} else {
			throw new Exception("Vous n'avez pas accès à cette page")
			}
			*/
			admin();
		}

		if ($_GET['action'] === 'addpost') {
			if (isset($_POST['title']) && isset($_POST['content'])) {
				addpost();
			} else {
				throw new Exception("Erreur d'enregistrement");
			}
		}

		if ($_GET['action'] === 'createpost') {
			createpost();
		}

		if ($_GET['action'] === 'readposts') {
			readposts();
		}

		if ($_GET['action'] === 'readpost') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				readpost();			
			} else {
				throw new Exception("L'article n'a pas été trouvé.");
			}
		}

		if ($_GET['action'] === 'update') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				update();
			} else {
				throw new Exception("L'article n'a pas été trouve.");
			}
		}

		if ($_GET['action'] === 'updatepost') {
			updatepost();
		}

		if ($_GET['action'] === 'deletepost') {
			deletepost();
		}

	}

} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

*/



trash2.php

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
			$comments[] = new Comment($data['pseudo'], $data['comment']);
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

	public function reported($id) {
		
	}
}

// WHERE postid = $postid

// créer un commentaire CHECKKKKK
// lire un commentaire OK
// lire tous les commentaires OK
// lire tous les commentaires d'une page ou d'un article CHECKKKK
// signaler un commentaire
// voir les commentaires signalés
// supprimer un commentaire
