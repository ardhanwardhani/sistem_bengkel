<!DOCTYPE html>
<html>
<head>
	<title>Front Desk | Bengkel & Suku Cadang</title>
</head>
<body>
<div class="content">
<?php
    include('fdheader3.php');
    include '../controllers.php';

    if($session->check() == false){
      header('location:../login.php');
    }

    echo $session->check();

    $page = $_SERVER['PHP_SELF'];
    $sec = "5";

    header("Refresh : $sec; url=$page");
?>
<br><br><br><br><br>
<div class="col-md-12">
<div class="col-md-6">
<center><label>
  <h2> Daftar Antrian </h2>
  *Unit yang sedang mengantri
</label></center>
<table class="table table-striped">
  <tr style="background-color: #88888880; ">
    <th>No</th>
    <th>ID Transaksi</th>
    <th>No. Polisi</th>
  </tr>
<?php
$query="SELECT * FROM view_transaksi WHERE status='Mengantri'";
$data= mysql_query($query);
$no = 1;
while ($data1= mysql_fetch_array($data)) {
  ?>
  <tr style="border-bottom: 1px solid;">
  <td><?php echo $no; ?></td>
  <td><?php echo $data1["id_trx"]; ?></td>
  <td><?php echo $data1["no_polisi"]; ?></td>
  </tr>
<?php
$no++;
}
?>
</table>
</div>
<div class="col-md-6">
<center><label>
  <h2> Daftar Pengerjaan </h2>
  *Unit yang sedang dikerjakan
</label></center>
<table class="table table-striped">
  <tr style="background-color: #88888880;">
    <th>No</th>
    <th>ID Transaksi</th>
    <th>No. Polisi</th>
  </tr>
<?php
$querys="SELECT * FROM view_transaksi WHERE status='Dikerjakan'";
$data2= mysql_query($querys) or die ("Gagal");
$no = 1;
while ($data3= mysql_fetch_array($data2)) {
  ?>
  <tr style="border-bottom: 1px solid;">
  <td><?php echo $no; ?></td>
  <td><?php echo $data3["id_trx"]; ?></td>
  <td><?php echo $data3["no_polisi"]; ?></td>
  </tr>
<?php
$no++;
}
?>
</table>
</div>
</div>
</body>
<br>
<br>
</div>
</html>