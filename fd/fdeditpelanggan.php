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
<form class="form-horizontal" role="form" method="POST" action="editpelanggan.php">
<?php
include '../controllers.php';
if($session->check() == false){
      header('location:../login.php');
    }

    echo $session->check();

  $id = $_GET['id'];

  $query = mysql_query("SELECT * FROM pelanggan WHERE no_ktp='$id'");
  $data = mysql_fetch_array($query);
?>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">No. KTP</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo $data['no_ktp'];?> " readOnly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Nama</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'];?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Alamat</label>
    <div class="col-md-7">
      <input type=text class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat'];?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">No. HP/Telepon</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data['no_hp'];?>">
    </div>
  </div>
<br>
<div class="col-md-offset-7">
<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
<?php echo "<a href='fddetailpelanggan.php?id=".$data['no_ktp']."' class='btn btn-warning'>Kembali</a>";?>
</div>
</form>
</html>