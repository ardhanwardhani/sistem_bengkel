<?php
if (isset($_POST['id_transaksi'])){

include '../controllers.php';

$a = $_POST['id_transaksi'];
$c = $_POST['nama_pekerjaan'];

$query = "SELECT kode_pekerjaan FROM data_pekerjaan WHERE nama_pekerjaan='$c'";
$data = mysql_query($query);
$b = mysql_fetch_array($data);
echo mysql_error();
print_r($b);
$insert=mysql_query("INSERT INTO pekerjaan VALUES ('$a','$b[0]','1','Kerjakan')") or Die(mysql_error());

if($insert){
		echo '<script language="javascript">alert("Data berhasil ditambahkan")';
		header('location:../fd/fdtambahpekerjaan.php?id='.$a);
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../fd/fdtransaksi2.php?id=".$a>Kembali</a>';
}

}
?>