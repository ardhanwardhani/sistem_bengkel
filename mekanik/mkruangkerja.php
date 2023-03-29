<!DOCTYPE html>
<html>
<head>
	<title>Mekanik | Bengkel & Suku Cadang</title>
</head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/scrolling-nav.css" rel="stylesheet">
    <link href="../assets/css/font.css" rel="stylesheet">
<body>
<?php
    include '../controllers.php';

?>
<div class="col-md-12">
	<div class="col-md-12" style="text-align: center; background-color: grey; position: fixed;">
		<h2>Ruang Kerja Mekanik</h2>
	</div>
	<?php
	$id = $_GET['id'];

  $page = $_SERVER['PHP_SELF'];
  $sec = "5";

  header("Refresh : $sec; url=$page?id=".$id);

	$query="SELECT * FROM view_transaksi WHERE id_trx=$id";
	$data= mysql_query($query);
	$data1= mysql_fetch_array($data);
	  ?>
  <br><br><br>
  <div class="col-md-12">
    <div class="col-md-5">
      <div class="col-md-10" style="font-size: 15pt; background-color: #80808066; border-radius: 20px; margin-top: 30px;">
        <tr>
        <br>
          <td>ID Transaksi : <?php echo $data1["id_trx"]; ?></td><br><br>
          <td>No. Polisi : <?php echo $data1["no_polisi"]; ?></td><br><br>
          <td>Type : <?php echo $data1["type"]; ?></td><br><br>
        </tr>
      </div>
      <form>
      <div class="col-md-10" style="background-color: #80808066; border-radius: 20px; margin-top: 30px;">
        <table class="table table-striped"><br>
        <thead>
          <tr style="background-color: #88888880;">
            <th>No</th>
            <th>Nama Pekerjaan</th>
            <th>Action</th>
          </tr>
        </thead>
          <?php
            $id = $_GET['id'];

            $querys1="SELECT * FROM view_pekerjaan WHERE status='Kerjakan' AND id_trx=$id";
            $data4= mysql_query($querys1) or die (mysql_error());
            $no = 1;
            while ($data5= mysql_fetch_array($data4)) {
          ?>
          <form class="form-horizontal" role="form" method="POST" action="statusdikerjakan.php">
          <tbody>
          <tr style="border-bottom: 1px solid;">
            <td><?php echo $no; ?></td>
            <td><?php echo $data5["nama_pekerjaan"]; ?></td>
            <td><a href="statusdikerjakan.php?id=<?php echo $data5['id_trx'];?>&kode=<?php echo $data5['kode_pekerjaan'];?>" class="btn btn-primary" name="ok">Ok</a></td>
          </tr>
          </tbody>
          <?php
            $no++;
            }
          ?>
        </table>
      </div>
    </form>
    </div>
    <div class="col-md-7">
      <div class="col-md-11" style="margin-top: 5%; background-color: #80808066; border-radius:15px;">
        <?php
          $id = $_GET['id'];

          $query = mysql_query("SELECT * FROM transaksi WHERE id_trx=$id");
          while ($data = mysql_fetch_array($query)) {
        ?>
          <form class="form-horizontal" role="form" method="POST" action="tanyapekerjaan.php">
            <div class="form-group" style="margin-top: 10px;">
              <label for="inputEmail3" class="col-md-3 control-label">ID Transaksi</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo $id;?>" readOnly>
                </div>
            </div>
            <?php
              }
            ?>
            <div class="form-group">
              <label for="inputEmail3" class="col-md-3 control-label">Pekerjaan</label>
                <div class="col-md-9">
                  <select class="form-control" id="nama_pekerjaan" name="nama_pekerjaan">
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
            <div class="col-md-offset-3">
              <button type="submit" name="tanyakan" class="btn btn-warning">Tanyakan</button>
            </div><br>
          </form>
      </div>
    <div class="col-md-11" style="margin-top: 5%; background-color: #80808066; border-radius: 15px;">
      <form class="form-horizontal" role="form" method="POST" action="mintapart.php">
      <?php
        $id = $_GET['id'];

        $query = mysql_query("SELECT * FROM transaksi WHERE id_trx=$id");
        while ($data = mysql_fetch_array($query)) {
      ?>
       <div class="form-group" style="margin-top: 10px;">
          <label for="inputEmail3" class="col-md-3 control-label">ID Transaksi</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo $id;?>" readOnly>
            </div>
        </div>
        <?php
          }
        ?>
        <div class="form-group">
          <label for="inputEmail3" class="col-md-3 control-label">Part</label>
          <div class="col-md-9">
              <select class="form-control" id="part" name="part">
                <?php
              $querys1="SELECT * FROM data_part";
              $datas1= mysql_query($querys1);
              while ($datas2= mysql_fetch_array($datas1)) {
                ?>
              <option value="<?php echo $datas2['nama_sukucadang']?>"><?php echo $datas2['nama_sukucadang']?></option>
            <?php } ?>
              </select>
          </div>
        </div>
        <div class="form-group" style="margin-top: 10px;">
          <label for="inputEmail3" class="col-md-3 control-label">Banyak</label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="banyak" name="banyak" placeholder="Banyak">
          </div>
        </div>
        <div class="col-md-offset-3">
        <button type="submit" name="minta" class="btn btn-success">Minta</button>
        </div>
        <br>
    </form>
    </div>
    </div>
    <form method="POST" action="selesai.php?id=<?php echo $data1['id_trx'];?>">
      <button class="col-md-offset-10 btn btn-success" name="selesai" style="margin-top: 2%;">Selesai</button>
    </form>
    <a href="mkaktivitas.php"><button class="btn btn-warning";">Kembali</button></a>
</div>
</body>
</html>