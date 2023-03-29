<!DOCTYPE html>
<html>
<head>
	<title>Mekanik | Bengkel & Suku Cadang</title>
</head>
<body>
<?php
  include('mkheader1.php');
  include '../controllers.php';

  $page = $_SERVER['PHP_SELF'];
  $sec = "5";

  header("Refresh : $sec; url=$page");
?>
<br><br><br><br><br>
<?php
$query="SELECT * FROM view_transaksi WHERE status='Dikerjakan'";
$data= mysql_query($query);
$no = 1;
while ($data1= mysql_fetch_array($data)) {
  ?>
<div class="col-md-3" style="font-size: 15pt; background-color: #80808066; border-radius: 20px; margin-left: 80px; margin-top: 50px;">
	<form method="POST" action="updatestatus.php?id=<?php echo $data1['id_trx'];?>">
  <tr>
  <br>
  <td>ID Transaksi : <?php echo $data1["id_trx"]; ?></td><br><br>
  <td>No. Polisi : <?php echo $data1["no_polisi"]; ?></td><br><br>
  <td>Type : <?php echo $data1["type"]; ?></td><br><br>
  <td><?php echo "<a href='mkruangkerja.php?id=".$data1['id_trx']."' class='col-md-12 btn btn-primary'>Lihat Pekerjaan</a>";?></td><br><br>
  </form>
  </tr>
</div>
<?php } ?>
</body>
<br>
<br>

</html>