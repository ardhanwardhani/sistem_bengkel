<?php 
include 'controllers.php';

$username = $_POST['username'];
$password = $_POST['password'];

$cek = "SELECT * FROM user WHERE username='$username' AND password='$password'";

$result = mysql_query($cek);
$row = mysql_fetch_array($result);

if ($row['username'] == $username AND $row['password'] == $password AND $row['level'] == 1) {
	$session->set($row['username']);
	header('location:fd/fdhome.php');
}else if ($row['username'] == $username AND $row['password'] == $password AND $row['level'] == 2) {
	$session->set($row['username']);
	header('location:pic/pichome.php');
}else if ($row['username'] == $username AND $row['password'] == $password AND $row['level'] == 3) {
	$session->set($row['username']);
	header('location:mekanik/mkhome.php');
}else if ($row['username'] == $username AND $row['password'] == $password AND $row['level'] == 4) {
	$session->set($row['username']);
	header('location:kb/kbhome.php');
}else{
	echo '<script language="javascript">alert("Anda tidak dapat Login"); document.location="login.php";</script>';
}

 ?>