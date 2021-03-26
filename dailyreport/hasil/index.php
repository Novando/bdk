<?php
	include '../../koneksi.php';
	$po_u1 = 9886;
	$po_u2 = 241;
	$po_hh1 = 63;
	$po_hh2 = 5;
	$po_hh3 = 57;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=“UTF-8”>
	<title>Laporan</title>
</head>
<body>
	<p>Date : <?= $_GET['tanggal'] ?></p>
	<p>&#x23F0 Time : 20.30 WIB</p>
	<br>
	<p>&#x1F477 PIC MTI : BP. SULTONI</p>
	<p>&#x1F477 PIC MTI : </p>
	<p>&#x1F477 PIC BDK : BP. JOKO</p>
	<p>&#x1F477 PIC BDK : BP. YANA</p>
	<br>
	<p>==================</p>
	<p>&#x1F3ED U DITCH</p>
	<br>
	<p>&#x1F6A7 MATERIAL  : </p>
	<p>1. PO I :</p>
	<p>- U Ditch type 1 : 9.886 set</p>
	<p>- U Ditch type 2 : 241 set</p>
	<p>HH</p>
	<p>- HH Type 1 : 63 Set</p>
	<br>
	<p>- HH Type 2 : 5 Set</p>
	<br>
	<p>- HH Type 3 : 57 Set</p>
	<p>==================
	<br>
	<p>&#x1F4A1 UPDATE PROGRESS PRODUKSI :</p>
	<br>
	<?php
		include 'sistem.php';

		$result1 = $conn->query($bdk1);
		if ($result1->num_rows > 0) {
			$counter = 0;
			$date = date_create($_GET['tanggal']);
			while ($row = $result1->fetch_assoc()) {
				$counter = $counter + 1;
	?>
		<p>&#x1F307 Batch <?= $counter; ?> : <?= $row['kode']; ?></p>
		<p>&#x23F0 Waktu Produksi : <?= $row['jam'] ?> WIB</p>
		<br>
		<p>- U Ditch type 1 :</p>
		<p>&nbsp;U : <?= $po_u1; ?> | <?= $row['u']; ?> | <?php $total_u = $total_u + $row['u']; echo $total_u; ?> | <?= $po_u1 - $total_u; ?></p>
		<p>&nbsp;T : <?= $po_u1; ?> | <?= $row['t']; ?> | <?php $total_t = $total_t + $row['t']; echo $total_t; ?> | <?= $po_u1 - $total_t; ?></p>
		<p>&nbsp;C : <?= $po_u1; ?> | <?= $row['c']; ?> | <?php $total_c = $total_c + $row['c']; echo $total_c; ?> | <?= $po_u1 - $total_c; ?></p>
		<br>
		<p>- U Ditch type  2 : <?= $po_u2; ?> | <?= $row['c2']; ?> | <?php $total_c2 = $total_c2 + $row['c2']; echo $total_c2; ?> | <?= $po_u2 - $total_c2; ?></p>
		<br>
		<p>HHx-<?= date_format($date, 'dmy')?>-BDK</p>
		<br>
		<p>Waktu Produksi : <?= $row['jam'] ?>  WIB</p>
		<br>
		<p>- HH Type 1 : <?= $po_hh1 ; ?> | <?= $row['hh1']; ?> | <?php $total_hh1 = $total_hh1 + $row['hh1']; echo $total_hh1; ?> | <?= $po_hh1 - $total_hh1; ?></p>
		<br>
		<p>- HH Type 2 : <?= $po_hh2 ; ?> | <?= $row['hh2']; ?> | <?php $total_hh2 = $total_hh2 + $row['hh2']; echo $total_hh2; ?> | <?= $po_hh2 - $total_hh2; ?></p>
		<br>
		<p>- HH Type 3 : <?= $po_hh3 ; ?> | <?= $row['hh3']; ?> | <?php $total_hh3 = $total_hh3 + $row['hh3']; echo $total_hh3; ?> | <?= $po_hh3 - $total_hh3; ?></p>
		<br>
	<?php
			}
		}

		$result2 = $conn->query($bdk2);
		if ($result2->num_rows > 0) {
			$counter = 0;
			while ($row = $result2->fetch_assoc()) {
				$counter = $counter + 1;
	?>
	
		<p>&#x1F307 Batch <?= $counter; ?> : <?= $row['kode']; ?></p>
		<p>&#x23F0 Waktu Produksi : <?= $row['jam'] ?> WIB</p>
		<br>
		<p>- U Ditch type 1 :</p>
		<p>&nbsp;U : <?= $po_u1; ?> | <?= $row['u']; ?> | <?php $total_u = $total_u + $row['u']; echo $total_u; ?> | <?= $po_u1 - $total_u; ?></p>
		<p>&nbsp;T : <?= $po_u1; ?> | <?= $row['t']; ?> | <?php $total_t = $total_t + $row['t']; echo $total_t; ?> | <?= $po_u1 - $total_t; ?></p>
		<p>&nbsp;C : <?= $po_u1; ?> | <?= $row['c']; ?> | <?php $total_c = $total_c + $row['c']; echo $total_c; ?> | <?= $po_u1 - $total_c; ?></p>
		<br>
	<?php
			}
		}
		if ($result1->num_rows < 1 && $result2->num_rows < 1){
			echo "TIDAK ADA PRODUKSI<br><br>";
		}
	?>
	<p>==================</p>
	<br>
	<p>&#x1F4DD NEXT PLAN :</p>
	<p>&nbsp;U ditch : Repair Moulding</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembesian</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengecoran uditch.</p>
	<p>&nbsp;HH : Bongkar begesting</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembesian </p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengecoran </p>
	<br>
	<p>&#x1F4E2 INFO:</p>
	<br>
	<br>
	<p>&#x1F198 ISSUE:- Repair Moulding</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- penambahan waktu produksi</p>
</body>
</html>
