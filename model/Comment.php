<?php

class Comment {

	protected $_id;
	protected $_postID;
	protected $_pseudo;
	protected $_comment;
	protected $_commentdate;
	protected $_reported;

	public function __construct($pseudo, $comment) {
		$this->_pseudo = $pseudo;
		$this->_comment = $comment;
	}

	public function getID() {
		return $this->_id;
	}

	public function getPostID() {
		return $this->_postID;
	}

	public function getPseudo() {
		return $this->_pseudo;
	}

	public function getComment() {
		return $this->_comment;
	}

	public function getCommentDate() {
		return $this->_commentdate;
	}

	public function getReported() {
		return $this->_reported;
	}

	public function setID($id) {
		$this->_id = $id;
	}

	public function setPostid($postID) {
		$this->_postID = $postID;
	}

	public function setPseudo($pseudo) {
		$this->_pseudo = $pseudo;
	}

	public function setComment($comment) {
		$this->_comment = $comment;
	}

	public function setCommentdate($commentdate) {
		$this->_commentdate = $commentdate;
	}

	public function setReported($reported) {
		$this->_reported = $reported;
	}

}