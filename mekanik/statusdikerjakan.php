<?php
include '../controllers.php';

$a = $_GET['id'];
$b = $_GET['kode'];

$update = mysql_query("UPDATE pekerjaan SET status='Sudah Dikerjakan' WHERE id_trx=$a AND kode_pekerjaan=$b") or Die(mysql_error());

echo mysql_error();

if($update){
		header('location:../mekanik/mkruangkerja.php?id='.$a);
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../mekanik/mkhome.php">Kembali</a>';
}
?>