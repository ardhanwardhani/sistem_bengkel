
<!DOCTYPE html>
<html>
<head>
  <title>Front Desk | Bengkel & Suku Cadang</title>
</head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/scrolling-nav.css" rel="stylesheet">
    <link href="../assets/css/font.css" rel="stylesheet">
<body style="background-color: #88888880;">
<div class=" col-md-offset-2 col-md-10" style="margin-top: 50px;">
<form class="form-horizontal" role="form" method="POST" action="tambahpekerjaan.php">
<?php
  include("../controllers.php");
  $id = $_GET['id'];

  $query = "SELECT * FROM transaksi WHERE id_trx='$id'";
  $data = mysql_query($query);
  $data1 = mysql_fetch_array($data);

?>
<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">ID Transaksi</label>
    <div class="col-md-7">
      <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo $data1['id_trx'];?>" readOnly>
    </div>
  </div>
  <div class="form-group">
          <label for="inputEmail3" class="col-md-2 control-label">Pekerjaan</label>
          <div class="col-md-7">
              <select class="form-control" id="nama_pekerjaan" name="nama_pekerjaan">
              <option>Pilih Pekerjaan</option>
                <?php
              $querys="SELECT * FROM data_pekerjaan";
              $datas= mysql_query($querys);
              while ($datas1= mysql_fetch_array($datas)) {
                ?>
              <option value="<?php echo $datas1['nama_pekerjaan']?>"><?php echo $datas1['nama_pekerjaan']?></option>
            <?php } ?>
              </select>
          </div>
        </div>
<div class="col-md-offset-7">
<button type="submit" name="mulai" class="btn btn-success">Tambah</button>
<?php echo "<a href='fddetailpelanggan.php?id=".$data1['no_ktp']."' class='btn btn-primary'>Selesai</a>";?>
</div>
</form>
</div>
<div class="col-md-offset-2 col-md-8"><br><br>
<table class="table table-striped">
  <tr style="background-color: #88888880;">
    <th>No</th>
    <th>Nama Pekerjaan</th>
    <th>Biaya</th>
    <th>Jumlah</th>
  </tr>
<?php
$id = $_GET['id'];

$query = mysql_query("SELECT * FROM view_pekerjaan WHERE id_trx='$id'") or die (mysql_error());
$no = 1;
while ($data = mysql_fetch_array($query)) {
  ?>
  <tr style="border-bottom: 1px solid;">
    <td><?php echo $no; ?></td>
    <td><?php echo $data["nama_pekerjaan"]; ?></td>
    <td><?php echo $data["biaya"]; ?></td>
    <?php 
      $jumlah = $data['banyak_pekerjaan']*$data['biaya'];
    ?>
    <td>Rp.<?php echo $jumlah ?></td>
  </tr>
<?php
$no++;
}
?>
</table>
</div>
</html>