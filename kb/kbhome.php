<!DOCTYPE html>
<html>
<head>
  <title>Kepala Bengkel | Bengkel & Suku Cadang</title>
  <?php
    include('kbheader.php');
    include '../controllers.php';

    $page = $_SERVER['PHP_SELF'];
    $sec = "5";

    header("Refresh : $sec; url=$page");
  ?>
</head>
<body>
<div class="col-md-12">
  <div class="col-md-offset-2 col-md-8" style="margin-top: 8%;">
    <table class="table table-striped">
      <tr style="background-color: #88888880; ">
        <th>No</th>
        <th>Tanggal</th>
        <th>ID Transaksi</th>
        <th>Nama</th>
        <th>No. Polisi</th>
        <th>Status</th>
      </tr>
      <?php
      echo mysql_error();
        $query="SELECT * FROM view_transaksi WHERE status='Selesai' ";
        $data = mysql_query($query);
        $no = 1;
        while ($data1= mysql_fetch_array($data)) {
      ?>
        <tr style="border-bottom: 1px solid;">
          <td><?php echo $no; ?></td>
          <td><?php echo $data1["tanggal"]; ?></td>
          <td><?php echo $data1["id_trx"]; ?></td>
          <td><?php echo $data1["nama"]; ?></td>
          <td><?php echo $data1["no_polisi"]; ?></td>
          <td><?php echo $data1["status"]; ?></td>
        </tr>
      <?php
        $no++;
        }
      ?>
    </table>
  </div>
</div>
</body>
</html>