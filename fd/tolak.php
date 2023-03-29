<?php 
	include '../controllers.php';

	$id = $_GET['id'];
	
	$query = mysql_query("DELETE FROM pekerjaan WHERE kode_pekerjaan=$id");

	if ($query) {
		header('location:../fd/fdhome.php');
	}
	else{
		echo "Gagal";
		echo mysql_error();
	}
	
?>