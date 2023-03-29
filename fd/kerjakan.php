<?php
if (isset($_POST['kerjakan'])){

include '../controllers.php';

$a = $_GET['id'];
$b = $_GET['kode'];

$update = mysql_query("UPDATE pekerjaan SET status='Kerjakan' WHERE id_trx=$a AND kode_pekerjaan=$b") or Die(mysql_error());

echo mysql_error();

if($update){
		header('location:../fd/fdhome.php');
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../fd/fdhome.php">Kembali</a>';
}

}
?>