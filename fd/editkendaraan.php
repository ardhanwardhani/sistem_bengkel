<?php
if (isset($_POST['no_ktp'])){

include '../controllers.php';

$a = $_POST['no_ktp'];
$b = $_POST['no_polisi'];
$c = $_POST['kilometer'];
$d = $_POST['email'];
$e = $_POST['sosmed'];

$update = mysql_query("UPDATE kendaraan SET kilometer=$c WHERE no_polisi='$b'") or die (mysql_error());

echo mysql_error();

if($update){
		header('location:../fd/fddetailpelanggan.php?id='.$a);
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../fd/fdeditkendaraan.php">Kembali</a>';
}

}
?>