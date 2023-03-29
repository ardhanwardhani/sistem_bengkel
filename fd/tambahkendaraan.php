<?php
if (isset($_POST['no_polisi'])){

include '../controllers.php';

$a = $_POST['no_ktp'];
$b = $_POST['no_polisi'];
$c = $_POST['no_mesin'];
$d = $_POST['type_kendaraan'];
$e = $_POST['tahun'];
$f = $_POST['kilo'];
$g = $_POST['email'];
$h = $_POST['sosmed'];

$insert=mysql_query("INSERT INTO kendaraan VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')") or Die(mysql_error());
echo mysql_error();
if($insert){
		echo '<script language="javascript">alert("Data berhasil ditambahkan")';
		header('location:../fd/fddetailpelanggan.php?id='.$a);
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../fd/fdtransaksi2.php">Kembali</a>';
}

}
?>