<!DOCTYPE html>
<html>
<head>
    <title>PIC | Bengkel & Suku Cadang</title>
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
<form class="form-horizontal" role="form" method="POST" action="editstok.php">
<?php
include '../controllers.php';
  $id = $_GET['id'];

  $query = mysql_query("SELECT * FROM data_part WHERE kode_part='$id'");
  $data = mysql_fetch_array($query);
?>
<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Kode Part</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="kode_part" name="kode_part" value="<?php echo $data['kode_part'];?>" readOnly>
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Part Name</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="nama_part" name="nama_part" value="<?php echo $data['part_name'];?>" readOnly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Nama Suku Cadang</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="nama_sukucadang" name="nama_sukucadang" value="<?php echo $data['nama_sukucadang'];?>" readOnly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Stok</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $data['stok'];?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Harga</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?php echo $data['harga'];?>">
    </div>
  </div>
<br>
<button type="submit" name="simpan" class="col-md-offset-7 btn btn-success">Simpan</button>
<?php echo "<a href='pichome.php?id=".$data['kode_part']."' class='btn btn-warning'>Kembali</a>";?>
</form>
<br>
</html>