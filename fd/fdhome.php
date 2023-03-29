<!DOCTYPE html>
<html>
<head>
	<title>Front Desk | Bengkel & Suku Cadang</title>
</head>
<body>
<div class="content">
<?php
    include('fdheader.php');
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
<div class="col-md-12">
<label>
  <h2> Konfirmasi Pekerjaan </h2>
</label>
<table class="table table-striped">
  <tr style="background-color: #88888880;">
    <th>No</th>
    <th>ID Transaksi</th>
    <th>Nama Pelanggan</th>
    <th>No Polisi</th>
    <th>Kode Pekerjaan</th>
    <th>Nama Pekerjaan</th>
    <th>Action</th>
  </tr>
<?php
$querys1="SELECT * FROM view_pekerjaan WHERE status='Tanyakan'";
$data4= mysql_query($querys1) or die ("Gagal");
$no = 1;
while ($data5= mysql_fetch_array($data4)) {
  ?>
  <form method="POST" action="kerjakan.php?id=<?php echo $data5['id_trx'];?>&kode=<?php echo $data5['kode_pekerjaan'];?>">
  <tr style="border-bottom: 1px solid;">
    <td><?php echo $no; ?></td>
    <td><?php echo $data5["id_trx"]; ?></td>
    <td><?php echo $data5["nama"]; ?></td>
    <td><?php echo $data5["no_polisi"]; ?></td>
    <td><?php echo $data5["kode_pekerjaan"]; ?></td>
    <td><?php echo $data5["nama_pekerjaan"]; ?></td>
    <td><button name="kerjakan" class="btn btn-primary">Kerjakan</button>&nbsp;&nbsp;&nbsp;<a href="tolak.php?id=<?php echo $data5['kode_pekerjaan'];?>" class="btn btn-danger" name="tolak">Tolak</a></td>
  </tr>
  </form>
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