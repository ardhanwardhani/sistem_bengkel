<?php
if (isset($_POST['kerjakan'])){

include '../controllers.php';

$a = $_GET['id'];
$b = $_POST['kode_mekanik'];

$update = mysql_query("UPDATE transaksi SET kode_mekanik='$b', status='Dikerjakan' WHERE id_trx=$a") or Die(mysql_error());

echo mysql_error();

if($update){
		header('location:../mekanik/mkaktivitas.php');
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../mk/mkhome.php">Kembali</a>';
}

}
?>