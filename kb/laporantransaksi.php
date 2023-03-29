<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bengkel & Suku Cadang</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/scrolling-nav.css" rel="stylesheet">
    <link href="../assets/css/font.css" rel="stylesheet">
<?php 
	include '../controllers.php';

	$awal = $_POST['tanggal_awal'];
	$akhir = $_POST['tanggal_akhir'];

	$jumlah_trx = mysql_query("SELECT COUNT(id_trx)  AS jumlah_trx FROM transaksi WHERE tanggal >='$awal' AND tanggal<='$akhir'");
	$sum = mysql_fetch_array($jumlah_trx);

	$pendapatan_part = mysql_query("SELECT SUM(harga) AS pendapatan_part FROM struk_pembayaranpart WHERE tanggal >='$awal' AND tanggal<='$akhir'");
	$sum1 = mysql_fetch_array($pendapatan_part);

	$pendapatan_pekerjaan = mysql_query("SELECT SUM(biaya) AS pendapatan_pekerjaan FROM struk_pembayaranpekerjaan WHERE tanggal >='$awal' AND tanggal<='$akhir'");
	$sum2 = mysql_fetch_array($pendapatan_pekerjaan);

	$pendapatan_trx = $pendapatan_part['pendapatan_part']+$pendapatan_pekerjaan['pendapatan_pekerjaan'];
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
		 					<td>TRANSAKSI DARI</td>
		 					<td> : <?php echo $awal; ?></td>
		 				</tr>
		 				<tr>
		 					<td>SAMPAI</td>
		 					<td> : <?php echo $akhir; ?></td>
		 				</tr>
		 			</table><br>
		 		</div>
		 	</div>
 		</div>
 		<table class="table">
  			<tr>
    			<th>Tanggal</th>
    			<th>Jumlah Transaksi</th>
    			<th>Pendapatan Transaksi</th>
  			</tr>
  			<?php 
  				$query = mysql_query("SELECT * FROM transaksi WHERE tanggal >='$awal' AND tanggal<='$akhir'");
				$no =1;
				while ($data1 = mysql_fetch_array($query)) {
  			?>
  			<tr style="border-bottom: 1px solid;">
  				<td><?php echo $data1["tanggal"]; ?></td>
  				<td><?php echo $sum; ?></td>
  				<td>Rp.<?php echo $pendapatan_trx; ?></td>
  			</tr>
			<?php
			$no++;
				}
			?>
		</table>
		 	</div>
 		</div>
 	</div>
 	<div class="col-md-offset-5 col-md-2" style="margin-top:5%;">
 	<a href="fdprintstrukpembayaran.php?id=<?php echo $data2['id_trx']?>"><button class="btn btn-primary">Print</button></a>
 	<a href="fdtransaksi.php"><<button class="btn btn-danger">Batal</button></a>
 	</div>
 </body>