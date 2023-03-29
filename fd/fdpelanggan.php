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
?>
<br><br><br><br><br>
<div class="col-md-offset-9">
  <div class="col-md-6">
  <form action="fdpelanggan.php" method="GET">
    <div class="input-group">
      <input type="text" id="cari" name="cari" class="form-control" style="width: 200px;">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="button">Cari</button>
      </span>
    </div>
    </form>
  </div>
</div>
</div>
<div class="col-md-12">
<label>
	<h2> Data Pelanggan </h2>
</label>
<a href="fdtambahpelanggan.php"><button class="col-md-offset-8 btn btn-primary"> + Tambah Pelanggan</button></a>
<div class="col-md-12">
<table class="table table-striped">
  <tr style="background-color: #88888880;">
    <th>No</th>
    <th>No. KTP</th>
    <th>Nama Pelanggan</th>
    <th>Action</th>
  </tr>

<?php 
  if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $data = mysql_query("SELECT * FROM pelanggan WHERE nama LIKE '%".$cari."%'");
  }
  else{
    $data = mysql_query("SELECT * FROM pelanggan");
  }
  $no = 1;
  while($d = mysql_fetch_array($data)){
?>
<tr>
  <td><?php echo $no; ?></td>
  <td><?php echo $d["no_ktp"]; ?></td>
  <td><?php echo $d["nama"]; ?></td>
  <td><?php echo "<a href='fddetailpelanggan.php?id=".$d['no_ktp']."' class='btn btn-primary'>Selengkapnya</a>";?></td>
  </tr>
  <?php
  $no++;
  } ?>
</table>
</div>
</div>
</body>
<br>
<br>
</div>
</html>