<?php
if (isset($_POST['selesai'])){

include '../controllers.php';
date_default_timezone_set("Asia/Jakarta");

$a = $_GET['id'];
$b = date("h:i:s");

$update = mysql_query("UPDATE transaksi SET jam_keluar='$b', status='Selesai' WHERE id_trx=$a") or Die(mysql_error());

if($update){
		header('location:../mekanik/mkaktivitas.php');
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../mk/mkhome.php">Kembali</a>';
}

}
?>