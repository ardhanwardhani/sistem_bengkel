<!DOCTYPE html>
<html>
<head>
	<title>Front Desk | Bengkel & Suku Cadang</title>
</head>
<body>
<div class="content">
<?php
    include('fdheader2.php');
    include '../controllers.php';
?>
<br><br><br><br><br>
<div class="col-md-12">
  <div class="col-md-offset-2 col-md-8">
    <table class="table table-striped">
      <tr style="background-color: #88888880; ">
        <th>No</th>
        <th>Tanggal</th>
        <th>ID Transaksi</th>
        <th>Nama</th>
        <th>No. Polisi</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      <?php
        $query="SELECT * FROM view_transaksi WHERE status='Selesai' ORDER BY id_trx DESC";
        $data= mysql_query($query);
        $no = 1;
        while ($data1 = mysql_fetch_array($data)) {
      ?>
        <tr style="border-bottom: 1px solid;">
          <td><?php echo $no; ?></td>
          <td><?php echo $data1["tanggal"]; ?></td>
          <td><?php echo $data1["id_trx"]; ?></td>
          <td><?php echo $data1["nama"]; ?></td>
          <td><?php echo $data1["no_polisi"]; ?></td>
          <td><?php echo $data1["status"]; ?></td>
        <td><?php echo "<a href='fdstrukpembayaran.php?id=".$data1['id_trx']."' class='btn btn-primary'>Print</a>";?></td>
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