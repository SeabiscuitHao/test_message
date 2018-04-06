<?php
class MessageModel {
	public $mysqli;
	public function __construct() {
		$this -> mysqli = new mysqli('localhost','root','root','zt_test');
	}
	public function addMessage($title,$author,$content) {
		$sql = "insert into test_blog(title,author,content) values('$title','$author','$content')";
		$query = $this -> mysqli -> query($sql);
		return $query;
	}

	public function lisMessage() {
		$sql = "select * from test_blog";
		$query = $this -> mysqli -> query($sql);
		return $query;
	}

	public function getInfoById($id) {
		$sql = "select * from test_blog where id = {$id}";
		$query = $this -> mysqli -> query($sql);
		$res = $query -> fetch_array(MYSQLI_ASSOC);
		return $res;
	}

	public function setInfo($title,$author,$content) {
		$sql = "update test_blog set author = {$author},title = {$title},content = {$content}";
		$query = $this -> mysqli -> query($sql);
		return $query;
	}

}