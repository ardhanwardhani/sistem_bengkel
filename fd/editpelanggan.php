<?php
if (isset($_POST['no_ktp'])){

include '../controllers.php';

$a = $_POST['no_ktp'];
$b = $_POST['nama'];
$c = $_POST['alamat'];
$d = $_POST['no_hp'];

$update=mysql_query("UPDATE pelanggan SET no_ktp='$a', nama='$b', alamat='$c', no_hp='$d' WHERE no_ktp=$a") or Die(mysql_error());

if($update){
		header('location:../fd/fddetailpelanggan.php?id='.$a);
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../fd/fdeditpelanggan.php">Kembali</a>';
}

}
?>