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
<form class="form-horizontal" role="form" method="POST" action="tambahkendaraan.php">
<?php
  include("../controllers.php");
  $id = $_GET['id'];

  $query = mysql_query("SELECT * FROM pelanggan WHERE no_ktp='$id'");
  while ($data = mysql_fetch_array($query)) {
?>
<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">No. KTP</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo $data['no_ktp'];?>" readOnly>
    </div>
</div>
<?php 
  }
 ?>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">No. Polisi</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="no_polisi" name="no_polisi" placeholder="No. Polisi">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">No. Mesin</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="no_mesin" name="no_mesin" placeholder="No. Mesin">
    </div>
  </div>
  <div class="form-group">
          <label for="inputEmail3" class="col-md-2 control-label">Type</label>
          <div class="col-md-7">
              <select class="form-control" id="type_kendaraan" name="type_kendaraan">
                <?php
              $querys="SELECT type FROM type_kendaraan";
              $datas= mysql_query($querys);
              while ($datas1= mysql_fetch_array($datas)) {
                ?>
              <option value="<?php echo $datas1['type']?>"><?php echo $datas1['type']?></option>
            <?php } ?>
              </select>
          </div>
        </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Tahun</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Kilometer</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="kilo" name="kilo" placeholder="Kilometer">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Email *</label>
    <div class="col-md-7">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Sosmed *</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="sosmed" name="sosmed" placeholder="Sosmed">
    </div>
  </div>
<br>
<div class="col-md-offset-7">
<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
<?php 
  $querys1 = ("SELECT no_ktp FROM pelanggan");
  $datas2 = mysql_query($querys1);
  $datas3 = mysql_fetch_array($datas2);

?>
<?php
$id = $_GET['id'];

echo "<a href='fddetailpelanggan.php?id=".$id."' class='btn btn-warning'>Kembali</a>";?>
</div>
</form>
<br>
<p class="text-info">* Khusus Type CBR250R, PCX 150</p>
<div class="col-md-offset-8">
</html>