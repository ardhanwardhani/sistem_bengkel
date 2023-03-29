<!DOCTYPE html>
<html>
<head>
    <title>PIC | Bengkel & Suku Cadang</title>
</head>
<body>
<?php
      include('picheader1.php');
      include '../controllers.php';
    ?>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/scrolling-nav.css" rel="stylesheet">
    <link href="../assets/css/font.css" rel="stylesheet">
<br><br><br><br><br>

<body style="background-color: #88888880;">
<div class="col-md-12">
  <div class="col-md-offset-2 col-md-10" style="margin-top: 50px;">
    <form class="form-horizontal" role="form" method="POST" action="tambahpart.php">
      <div class="form-group">
        <label for="inputEmail3" class="col-md-2 control-label">Kode Part</label>
          <div class="col-md-7">
            <input type="text" class="form-control" id="kode_part" name="kode_part" placeholder="Kode Part">
          </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-md-2 control-label">Part Name</label>
          <div class="col-md-7">
            <input type="text" class="form-control" id="nama_part" name="nama_part" placeholder="Part Name">
          </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-md-2 control-label">Nama Suku Cadang</label>
          <div class="col-md-7">
            <input type="text" class="form-control" id="nama_sukucadang" name="nama_sukucadang" placeholder="Nama Suku Cadang">
          </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-md-2 control-label">Stok</label>
          <div class="col-md-7">
            <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok">
          </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-md-2 control-label">Harga</label>
          <div class="col-md-7">
            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
          </div>
      </div>
<br>
      <div class="col-md-offset-7">
      <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
    </form>
    <a href="picstok.php"><button type="submit" name="kembali" class="btn btn-warning">Kembali</button></a>
  </div>
</div>
</html>