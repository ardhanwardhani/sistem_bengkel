<?php
if (isset($_POST['kode_part'])){

include '../controllers.php';

$a = $_POST['kode_part'];
$b = $_POST['nama_part'];
$c = $_POST['stok'];
$d = $_POST['harga'];

$update=mysql_query("UPDATE stok_part SET ('','$a','$b','$c','$d') WHERE kode_part='$a'") or Die(mysql_error());

if($update){
		echo '<script language="javascript">alert("Data berhasil ditambahkan")';
		header('location:../pic/pichome.php');
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../pic/picstok1.php">Kembali</a>';
}

}
?>