<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amazing Bengkel & Suku Cadang</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/scrolling-nav.css" rel="stylesheet">
    <link href="../assets/css/font.css" rel="stylesheet">
<?php 
	include '../controllers.php';
	$id = $_GET['id'];

	$querys="SELECT * FROM struk_pembayaran WHERE id_trx=$id";
	$datas= mysql_query($querys);
	$datas1 = mysql_fetch_array($datas);
 ?>
 <body>
 	<div class="col-md-12">
 	<label>Admin Front Desk</label><br><br><br>
 		<div style="border-bottom: 2px solid;">
 			<div class="col-md-6">
 				<b>PT. AMAZING Transport</b><br>
 				Jln. Ngamprah No.1, Ngamprah, Bandung Barat<br>
 				PHONE/FAX 083820653380/(022)7293862781
 			</div>
 			<div class="col-md-offset-10">
 				<br><br>NOTA PEMBAYARAN
 			</div>
 		</div>
 		<div>
 		<br>
 			<div class="col-md-12">
	 			<div class="col-md-6">
		 			<table>
		 				<tr>
		 					<td>NO POLISI</td>
		 					<td> : <?php echo $datas1["no_polisi"]; ?></td>
		 				</tr>
		 				<tr>
		 					<td>CUSTOMER</td>
		 					<td> : <?php echo $datas1["nama"]; ?><br>&nbsp;&nbsp;<?php echo $datas1["alamat"]; ?></td>
		 				</tr>
		 				<tr>
		 					<td>JENIS MOTOR</td>
		 					<td> : <?php echo $datas1["type"]; ?></td>
		 				</tr>
		 				<tr>
		 					<td>MEKANIK</td>
		 					<td> : <?php echo $datas1["kode_mekanik"]; ?> - <?php echo $datas1["nama_depan"]; ?></td>
		 				</tr>
		 			</table><br>
		 		</div>
		 		<div class="col-md-offset-2 col-md-4">
		 			<table>
		 				<tr>
		 					<td>NO TRANSAKSI</td>
		 					<td> : <?php echo $datas1["id_trx"]; ?></td>
		 				</tr>
		 				<tr>
		 					<td>TANGGAL TRANSAKSI</td>
		 					<td> : <?php echo $datas1["tanggal"]; ?></td>
		 				</tr>
		 			</table><br>
		 		</div>
		 	</div>
 		</div>
 		<table class="table">
  			<tr>
    			<th>Kode</th>
    			<th>Deskripsi</th>
    			<th>Jumlah</th>
    			<th>@Harga</th>
    			<th>Total</th>
  			</tr>
			<?php
				$id = $_GET['id'];

				$query="SELECT * FROM struk_pembayaranpekerjaan WHERE id_trx=$id";
				$data= mysql_query($query);
				while ($data1= mysql_fetch_array($data)) {
  			?>
  			<tr style="border-bottom: 1px solid;">
  				<td><?php echo $data1["kode_pekerjaan"]; ?></td>
  				<td><?php echo $data1["nama_pekerjaan"]; ?></td>
  				<td>1</td>
  				<td>Rp.<?php echo $data1["biaya"]; ?></td>
  				<td>Rp.<?php echo $data1["biaya"]; ?></td>
  			</tr>
			<?php
				}
			?>
			<?php
				$id = $_GET['id'];

				$query="SELECT * FROM struk_pembayaranpart WHERE id_trx=$id";
				$data= mysql_query($query);
				$data1= mysql_fetch_array($data); 
				if($data1 > 0 ) {
  			?>
  			<tr style="border-bottom: 1px solid;">
  				<td><?php echo $data1["kode_part"]; ?></td>
  				<td><?php echo $data1["part_name"]; ?></td>
  				<td><?php echo $data1["banyak"]; ?></td>
  				<td>Rp.<?php echo $data1["harga"]; ?></td>
  				<?php 
  					$total = $data1['banyak']*$data1['harga'];
  				?>
  				<td>Rp.<?php echo $total ?></td>
  			</tr>
			<?php
				}
			?>
		</table>
		<div class="col-md-12" style="border-bottom: 1px solid;">
	 			<div class="col-md-offset-8 col-md-4">
	 			<?php
	 			$id = $_GET['id'];

	 			$query1="SELECT * FROM struk_pembayaran WHERE id_trx=$id";
				$data1= mysql_query($query1);
				$data2= mysql_fetch_array($data1);

				$total_jasa = mysql_query("SELECT SUM(biaya) FROM struk_pembayaran WHERE id_trx=$id");
				$total_part = mysql_query("SELECT SUM(harga) FROM struk_pembayaran WHERE id_trx=$id");
				?>
			 			<table>
			 				<tr>
			 					<td>TOTAL JASA</td>
			 					<td> :  <?php echo $total_jasa;?></td>
			 				</tr>
			 				<tr>
			 					<td>TOTAL PART</td>
			 					<td> : <?php echo $total_part;?></td>
			 				</tr>
			 				<tr>
			 					<td>TOTAL TRANSAKSI</td>
			 					<td> : <?php echo $total_jasa+$total_part; ?></td>
			 				</tr>
			 			</table><br>
		 		</div>
		 	</div>
 		</div>
 	</div>
 	<script type="text/javascript">
 		window.print();
 	</script>
 </body>