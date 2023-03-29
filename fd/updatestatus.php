<?php
include '../controllers.php';

if (isset($_POST['kerjakan'])){
$a = $_GET['id'];
$b = $_POST['kode_mekanik'];

$update = mysql_query("UPDATE pekerjaan SET status='Kerjakan' WHERE id_trx=$a") or Die(mysql_error());
echo mysql_error();

if($update){
		header('location:../mekanik/mkhome.php');
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../mk/mkhome.php">Kembali</a>';
}
}
?>