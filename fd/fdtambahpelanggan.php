<!DOCTYPE html>
<html>
<head>
    <title>Front Desk | Bengkel & Suku Cadang</title>
</head>
<body>
<?php
    include('fdheader1.php');
?>
<br><br><br><br>
<div class=" col-md-offset-2 col-md-10" style="margin-top: 50px;">
<body style="background-color: #88888880;">

<form class="form-horizontal" role="form" method="POST" action="tambahpelanggan.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">No. KTP</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="No. KTP">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Nama</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Alamat</label>
    <div class="col-md-7">
      <input type=text class="form-control" id="alamat" name="alamat" placeholder="Alamat">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">No. HP/Telepon</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. HP/Telepon">
    </div>
  </div>
<div class="col-md-offset-8">
<button type="submit" id="simpan" name="simpan" class="btn btn-success">Simpan</button>
</form>
</html>