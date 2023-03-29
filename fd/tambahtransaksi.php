<?php
if (isset($_POST['id_transaksi'])){

include '../controllers.php';

date_default_timezone_set("Asia/Jakarta");

$a = $_POST['id_transaksi'];
$b = $_POST['no_ktp'];
$c = $_POST['no_polisi'];
$d = date("d-m-Y");
$e = date("h:i:s");;

$insert=mysql_query("INSERT INTO transaksi VALUES ('$a','$b','$c','','$d','$e','','Mengantri')") or Die(mysql_error());

if($insert){
		echo '<script language="javascript">alert("Data berhasil ditambahkan")';
		header('location:../fd/fdtambahpekerjaan.php?id='.$a);
		
	}else{
		
		echo mysql_error();		//Pesan jika proses tambah gagal
}

}
?>