<!DOCTYPE html>
<html>
<head>
	<title>Mekanik | Bengkel & Suku Cadang</title>
</head>
<body>
<?php
  include('mkheader.php');
  include '../controllers.php';
?>
<br><br><br><br><br>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "5";

header("Refresh : $sec; url=$page");

$query="SELECT * FROM view_transaksi WHERE status='Mengantri'";
$data= mysql_query($query);
$no = 1;
while ($data1= mysql_fetch_array($data)) {
  ?>
<div class="col-md-3" style="font-size: 15pt; background-color: #80808066; border-radius: 20px; margin-left: 80px; margin-top: 50px;">
	<form method="POST" action="dikerjakan.php?id=<?php echo $data1['id_trx'];?>">
  <tr>
  <br>
  <td>ID Transaksi : <?php echo $data1["id_trx"]; ?></td><br><br>
  <td>No. Polisi : <?php echo $data1["no_polisi"]; ?></td><br><br>
  <td>Type : <?php echo $data1["type"]; ?></td><br><br>
  <td><div class="col-md-12">
      <input type="text" class="form-control" id="kode_mekanik" name="kode_mekanik" placeholder="Kode Mekanik yang mengerjakan">
    </div></td><br><br>
  <td><button name="kerjakan" class="col-md-12 btn btn-primary">Kerjakan</button></td><br><br>
  </form>
  </tr>
</div>
<?php } ?>
</body>
<br>
<br>

</html>