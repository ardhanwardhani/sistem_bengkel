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
    <br><br><br><br><br>
<div class="col-md-12">
  <label>
    <h2> Stok Part </h2>
  </label>
  <a href="pictambahpart.php"><button class="col-md-offset-9 btn btn-primary">Tambah Part</button></a>
  <table class="table table-striped">
    <tr style="background-color: #88888880; ">
      <th>No</th>
      <th>Kode Part</th>
      <th>Part Name</th>
      <th>Nama Suku Cadang</th>
      <th>Stok</th>
      <th>Harga</th>
      <th>Action</th>
    </tr>
    <?php
      $query="SELECT * FROM data_part";
      $data= mysql_query($query);
      $no = 1;
      while ($data1= mysql_fetch_array($data)) {
    ?>
    <tr style="border-bottom: 1px solid;">
      <td><?php echo $no; ?></td>
      <td><?php echo $data1["kode_part"]; ?></td>
      <td><?php echo $data1["part_name"]; ?></td>
      <td><?php echo $data1["nama_sukucadang"]; ?></td>
      <td><?php echo $data1["stok"]; ?></td>
      <td><?php echo $data1["harga"]; ?></td>
      <td><?php echo "<a href='piceditpart.php?id=".$data1['kode_part']."' class='btn btn-warning'>Edit</a>";?></td>
    </tr>
    <?php
      $no++;
      }
    ?>
  </table>
</div>
</body>
<br>
<br>

</html>