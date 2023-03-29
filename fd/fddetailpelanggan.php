<!DOCTYPE html>
<html>
<head>
	<title>Front Desk | Bengkel & Suku Cadang</title>
</head>
<body>
<div class="content">
<?php
    include('fdheader1.php');
    include '../controllers.php';

    if($session->check() == false){
      header('location:../login.php');
    }

    echo $session->check();
?>
<br><br><br><br><br>
<div class="col-md-12">
<label>
	<h2> Detail Data Pelanggan </h2>
</label>
<div class="col-md-12">
<table class="table table-striped">
  <tr style="background-color: #88888880;">
    <th>No</th>
    <th>No. KTP</th>
    <th>Nama Pelanggan</th>
    <th>Alamat</th>
    <th>No.HP/Telepon</th>
    <th>Action</th>
  </tr>
<?php
$id = $_GET['id'];

$query = mysql_query("SELECT * FROM pelanggan WHERE no_ktp='$id'") or die ("Gagal");
$no = 1;
$cek = mysql_num_rows($query);
  if ($cek > 0 ) {
    while ($data = mysql_fetch_array($query)) {
  ?>
  <tr style="border-bottom: 1px solid;">
  <td><?php echo $no; ?></td>
  <td><?php echo $data["no_ktp"]; ?></td>
  <td><?php echo $data["nama"]; ?></td>
  <td><?php echo $data["alamat"]; ?></td>
  <td><?php echo $data["no_hp"]; ?></td>
  <td><?php echo "<a href='fdeditpelanggan.php?id=".$data['no_ktp']."' class='btn btn-warning'>Edit</a>";?></td>
  </tr>
<?php
$no++;
}
}else{
  echo "<tr><td class='text-center' colspan='8' valign='top'>No data available in this table</td></tr>";
  }
?>
</table>
</div>
</div>

<div class="col-md-12">
<h2> Data Kendaraan </h2>
<div class="col-md-offset-10">
<?php
$id = $_GET['id'];

echo "<a href='fdtambahkendaraan.php?id=".$id."' class='btn btn-primary'> + Tambah Kendaraan</a>";?></div>
<br>
<div class="col-md-12">
<table class="table table-striped">
  <tr style="background-color: #88888880;">
    <th>No</th>
    <th>No. Mesin</th>
    <th>No. Polisi</th>
    <th>Type</th>
    <th>Tahun</th>
    <th>Kilometer</th>
    <th>Email</th>
    <th>Sosmed</th>
    <th>Action</th>
  </tr>
<?php
$id = $_GET['id'];

$query = mysql_query("SELECT * FROM kendaraan WHERE no_ktp='$id'") or die ("Gagal");
$no = 1;
while ($data = mysql_fetch_array($query)) {
  ?>
  <tr style="border-bottom: 1px solid;">
  <td><?php echo $no; ?></td>
  <td><?php echo $data["no_mesin"]; ?></td>
  <td><?php echo $data["no_polisi"]; ?></td>
  <td><?php echo $data["type"]; ?></td>
  <td><?php echo $data["tahun"]; ?></td>
  <td><?php echo $data["kilometer"]; ?></td>
  <td><?php echo $data["email"]; ?></td>
  <td><?php echo $data["sosmed"]; ?></td>
  <td><?php echo "<a href='fdtambahtransaksi.php?id=".$data['no_polisi']."' class='btn btn-primary'>Tambah Transaksi</a>";?>&nbsp;&nbsp;<?php echo "<a href='fdeditkendaraan.php?id=".$data['no_ktp']."' class='btn btn-warning'>Edit</a>";?></td>
  </tr>
<?php
$no++;
}
?>
</table>
</div>
</div>
<div class="col-md-12">
<label>
  <h2> Data Transaksi </h2>
</label>
<div class="col-md-12">
<table class="table table-striped">
  <tr style="background-color: #88888880;">
    <th>No</th>
    <th>Tanggal</th>
    <th>ID Transaksi</th>
    <th>No. Polisi</th>
    <th>Status</th>
  </tr>
<?php
$id = $_GET['id'];

$query = mysql_query("SELECT * FROM transaksi WHERE no_ktp='$id'") or die (mysql_error());
$no = 1;
$cek1 = mysql_num_rows($query);
if($cek1 > 0){
while ($data = mysql_fetch_array($query)) {
  ?>
  <tr style="border-bottom: 1px solid;">
  <td><?php echo $no; ?></td>
  <td><?php echo $data["tanggal"]; ?></td>
  <td><?php echo $data["id_trx"]; ?></td>
  <td><?php echo $data["no_polisi"]; ?></td>
  <td><?php echo $data["status"]; ?></td>
  </tr>
<?php
$no++;
}
}else{
  echo "<tr><td class='text-center' colspan='8' valign='top'>No data available in this table</td></tr>";
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