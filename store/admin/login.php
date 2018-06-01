<?php
	$name = $_POST['name'];
	$password = $_POST['password'];
	
	if($name == 'dummy' and $password == 'dummy'){
		session_start();
		$_SESSION['auth']= true;
		header("location: book_list.php");
		exit();
	}
		header("location: index.php");
	
?>