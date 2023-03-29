<?php
	include 'controllers.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysql_query("select * from user where username = \"$username\" and password = \"$password\"");
	if(mysql_num_rows($query) > 0){
		$data = mysql_fetch_array($query);
		print_r($data);
		$session->set($data["username"]);
		header("location:masuk.php");
	}else{
		header("location:login.php");
	}


?>