<?php
if (isset($_POST['id_transaksi'])){

include '../controllers.php';

$a = $_POST['id_transaksi'];
$c = $_POST['part'];
$d = $_POST['banyak'];

$query = "SELECT kode_part FROM data_part WHERE nama_sukucadang='$c'";
$data = mysql_query($query);
$b = mysql_fetch_array($data);
echo mysql_error();
print_r($b);
$insert=mysql_query("INSERT INTO part VALUES ('$a','$b[0]','$d','Diminta')") or Die(mysql_error());

if($insert){
		echo '<script language="javascript">alert("Data berhasil ditambahkan")';
		header('location:../mekanik/mkruangkerja.php?id='.$a);
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../fd/fdtransaksi2.php?id=".$a>Kembali</a>';
}

}
?>