<?php
class MessageController {
	public function add() {
		include "./view/message/add.html";
	}

	public function doAdd() {
		$title 	 = $_POST['title'];
		$author  = $_POST['author'];
		$content = $_POST['content'];

		$query = D('message') -> addMessage($title,$author,$content);
		if ($query) {
			header("location:index.php?c=message&a=lists");
		}else{
			echo "error 10002";
		}
	}

	public function lists() {
		$query = D('message') -> lisMessage();
		$res = $query -> fetch_all(MYSQLI_ASSOC);
		include './view/message/lists.html';
	}

	public function edit() {
		$id = $_GET['id'];
		$res = D('message') -> getInfoById($id);
		include './view/message/edit.html';
	}

	public function doEdit() {
		$title 	 = $_POST['title'];
		$author  = $_POST['author'];
		$content = $_POST['content'];

		$query = D('message') -> setInfo($title,$author,$content);
		if ($query) {
			// header("location:index.php?c=message&a=lists");
			echo "111";
		}else{
			echo "error 10003";
		}
	}


}