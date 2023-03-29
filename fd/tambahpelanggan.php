<?php
if (isset($_POST['no_ktp'])){

include '../controllers.php';

$a = $_POST['no_ktp'];
$b = $_POST['nama'];
$c = $_POST['alamat'];
$d = $_POST['no_hp'];

$insert=mysql_query("INSERT INTO pelanggan VALUES ('$a','$b','$c','$d')") or Die(mysql_error());
echo mysql_error();
if($insert){
		header('location:../fd/fdtambahkendaraan.php?id='.$a);
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../fd/fdtransaksi.php">Kembali</a>';
}

}
?>