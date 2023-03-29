<!DOCTYPE html>
<html>
<head>
  <title>Kepala Bengkel | Bengkel & Suku Cadang</title>
  <?php
    include('kbheader1.php');
    include '../controllers.php';
  ?>
</head>
<body>
<div class="col-md-12" style="background-color: #80808066; height: 100%;"><br><br>
  <form action="laporantransaksi.php" method="POST" role="form">
    <div class="col-md-offset-3 col-md-8" style="margin-top: 8%;">
      <div class="form-group">
        <label for="inputEmail3" class="col-md-2 control-label">Tanggal Awal</label>
          <div class="col-md-7">
            <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal">
          </div>
      </div><br><br><br>
      <div class="form-group">
        <label for="inputEmail3" class="col-md-2 control-label">Tanggal Akhir</label>
          <div class="col-md-7">
            <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir">
          </div>
      </div><br><br>
      <button class="col-md-offset-4 btn btn-primary">Dapatkan Laporan</button>
    </div>
  </form>  
</div>
</body>
</html>