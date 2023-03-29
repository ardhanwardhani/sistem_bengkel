<!DOCTYPE html>
<html>
<head>
    <title>Front Desk | Bengkel & Suku Cadang</title>
</head>
<body>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/scrolling-nav.css" rel="stylesheet">
    <link href="../assets/css/font.css" rel="stylesheet">
<br><br>

<body style="background-color: #88888880;">
<div class=" col-md-offset-2 col-md-10" style="margin-top: 50px;">
<form class="form-horizontal" role="form" method="POST" action="tambahtransaksi.php?id=".$newID.">
<?php
  include("../controllers.php");

   date_default_timezone_set("Asia/Jakarta");

  $id = $_GET['id'];

  $query = mysql_query("SELECT * FROM kendaraan WHERE no_polisi='$id'");
  $data = mysql_fetch_array($query);

  $query1 = "SELECT max(id_trx) as maxId FROM transaksi";
  $hasil = mysql_query($query1);
  $data1  = mysql_fetch_array($hasil);
  $id_trx = $data1['maxId'];

  $id_trx++;
  $newID = sprintf("%03s", $id_trx);
?>
<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">ID Transaksi</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo $newID;?>" readOnly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">No. KTP</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo $data['no_ktp'];?>" readOnly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">No. Polisi</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="no_polisi" name="no_polisi" value="<?php echo $data['no_polisi'];?>" readOnly>
    </div>
  </div>
<br>
<div class="col-md-offset-7">
<button type="submit" name="mulai" class="btn btn-success">Mulai</button>
<?php echo "<a href='fddetailpelanggan.php?id=".$data['no_ktp']."' class='btn btn-warning'>Kembali</a>";?>
</div>
</form>
<br>
</html>