<!DOCTYPE html>
<html>
<head>
	<title>PIC | Bengkel & Suku Cadang</title>
</head>
<body>
<?php
    	include('picheader.php');
      include '../controllers.php';

      $page = $_SERVER['PHP_SELF'];
    $sec = "5";

    header("Refresh : $sec; url=$page");
    ?>
    <br><br><br><br><br>
<div class="col-md-12">
  <label>
    <h2> Permintaan Part </h2>
  </label>
  <table class="table table-striped">
  <tr style="background-color: #88888880;">
    <th>No</th>
    <th>ID Transaksi</th>
    <th>Nama Pelanggan</th>
    <th>No Polisi</th>
    <th>Kode Part</th>
    <th>Nama Part</th>
    <th>Banyak</th>
    <th>Action</th>
  </tr>
<?php
$query="SELECT * FROM view_part WHERE status='Diminta'";
$data= mysql_query($query) or die ("Gagal");
$no = 1;
while ($data1= mysql_fetch_array($data)) {
  ?>
  <form method="POST" action="diterima.php?id=<?php echo $data1['id_trx'];?>&kode=<?php echo $data1['kode_part'];?>&banyak=<?php echo $data1['banyak'];?>">
  <tr style="border-bottom: 1px solid;">
  <td><?php echo $no; ?></td>
  <td><?php echo $data1["id_trx"]; ?></td>
  <td><?php echo $data1["nama"]; ?></td>
  <td><?php echo $data1["no_polisi"]; ?></td>
  <td><?php echo $data1["kode_part"]; ?></td>
  <td><?php echo $data1["part_name"]; ?></td>
  <td><?php echo $data1["banyak"]; ?></td>
  <td><button name="terima" class="btn btn-primary">Permintaan Diterima</button></td>
  </tr>
  </form>
<?php
$no++;
}
?>
</table>
</div>
</body>
<br>
<br>

</html>