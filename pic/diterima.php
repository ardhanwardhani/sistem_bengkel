<?php
include '../controllers.php';

if (isset($_POST['terima'])){
$a = $_GET['id'];
$b = $_GET['kode'];
$c = $_GET['banyak'];

$update = mysql_query("UPDATE part SET status='Diterima' WHERE (id_trx=$a AND kode_part=$b)") or Die(mysql_error());
echo mysql_error();

if($update){
		$s_sparepart=mysql_query("SELECT * FROM data_part WHERE kode_part='$b'");
		$sparepart=mysql_fetch_array($s_sparepart);
		$sparepart_kurang=$sparepart['stok']-$c;
		mysql_query("UPDATE data_part SET stok='$sparepart_kurang' WHERE kode_part='$b'");
		header('location:../pic/pichome.php');
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../pic/pichome.php">Kembali</a>';
}
}
?>