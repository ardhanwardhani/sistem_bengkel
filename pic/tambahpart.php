<?php
if (isset($_POST['kode_part'])){

include '../controllers.php';

$a = $_POST['kode_part'];
$b = $_POST['nama_part'];
$c = $_POST['nama_sukucadang'];
$d = $_POST['stok'];
$e = $_POST['harga'];

$insert=mysql_query("INSERT INTO data_part VALUES ('$a','$b','$c','$d','$e')") or Die(mysql_error());

if($insert){
		echo '<script language="javascript">alert("Data berhasil ditambahkan")';
		header('location:../pic/picstok.php');
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../pic/picstok.php">Kembali</a>';
}

}
?>