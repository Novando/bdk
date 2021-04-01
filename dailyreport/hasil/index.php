<?php
	include '../../koneksi.php';
	setlocale(LC_TIME, 'id_ID');
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
	<p>Date : <?= strftime('%A, %d %B %Y', strtotime($_GET['tanggal'])) ?><br>
	&#x23F0 Time : 20.30 WIB</p>

	<p>&#x1F477 PIC MTI : BP. SULTHONY<br>
	&#x1F477 PIC MTI : <br>
	&#x1F477 PIC BDK : BP. JOKO<br>
	&#x1F477 PIC BDK : BP. YANA</p>

	<p>==================</p>

	<p>&#x1F3ED U DITCH</p>

	<p>&#x1F6A7 MATERIAL  : </p>
	<p>1. PO I :<br>
	- U Ditch type 1 : 9.886 set<br>
	- U Ditch type 2 : 241 set<br>
	HH<br>
	- HH Type 1 : 63 Set<br>
	- HH Type 2 : 5 Set<br>
	- HH Type 3 : 57 Set</p>

	<p>==================</p>

	<p>&#x1F4A1 UPDATE PROGRESS PRODUKSI :</p>

	<?php
		include 'sistem.php';

		$result1 = $conn->query($bdk1);
		if ($result1->num_rows > 0) {
			$counter = 0;
			$date = date_create($_GET['tanggal']);
			while ($row = $result1->fetch_assoc()) {
				$counter = $counter + 1;
				$total_u = $total_u + $row['u'];
				$total_t = $total_t + $row['t'];
				$total_c = $total_c + $row['c'];
				$total_c2 = $total_c2 + $row['c2'];
	?>
		<p>&#x1F307 Batch <?= $counter; ?> : <?= $row['kode']; ?><br>
		&#x23F0 Waktu Produksi : <?= $row['jam'] ?> WIB</p>

		<p>- U Ditch type 1 :<br>
		&nbsp;U : <?= $po_u1; ?> | <?= $row['u']; ?> | <?= $total_u; ?> | <?= $po_u1 - $total_u; ?><br>
		&nbsp;T : <?= $po_u1; ?> | <?= $row['t']; ?> | <?= $total_t; ?> | <?= $po_u1 - $total_t; ?><br>
		&nbsp;C : <?= $po_u1; ?> | <?= $row['c']; ?> | <?= $total_c; ?> | <?= $po_u1 - $total_c; ?></p>

		<p>- U Ditch type  2 : <?= $po_u2; ?> | <?= $row['c2']; ?> | <?php echo $total_c2; ?> | <?= $po_u2 - $total_c2; ?></p>	
	<?php
			}
		}

		$result2 = $conn->query($bdk2);
		if ($result2->num_rows > 0) {
			$counter = 0;
			while ($row = $result2->fetch_assoc()) {
				$counter = $counter + 1;
	?>
	
		<p>&#x1F307 Batch <?= $counter; ?> : <?= $row['kode']; ?><br>
		&#x23F0 Waktu Produksi : <?= $row['jam'] ?> WIB</p>

		<p>- U Ditch type 1 :<br>
		&nbsp;U : <?= $po_u1; ?> | <?= $row['u']; ?> | <?php $total_u = $total_u + $row['u']; echo $total_u; ?> | <?= $po_u1 - $total_u; ?><br>
		&nbsp;T : <?= $po_u1; ?> | <?= $row['t']; ?> | <?php $total_t = $total_t + $row['t']; echo $total_t; ?> | <?= $po_u1 - $total_t; ?><br>
		&nbsp;C : <?= $po_u1; ?> | <?= $row['c']; ?> | <?php $total_c = $total_c + $row['c']; echo $total_c; ?> | <?= $po_u1 - $total_c; ?></p>
	<?php
			}
		}

		$result3 = $conn->query($hh);
		if ($result3->num_rows > 0) {
			while ($row = $result3->fetch_array()){
	?>

		<p>HHx-<?= date_format($date, 'dmy')?>-BDK<br>
		Waktu Produksi : 11:00:00  WIB</p>
		
		<p>- HH Type 1 : <?= $po_hh1 ; ?> | <?= $row[0]; ?> | <?php $total_hh1 = $total_hh1 + $row[0]; echo $total_hh1; ?> | <?= $po_hh1 - $total_hh1; ?><br>
		- HH Type 2 : <?= $po_hh2 ; ?> | <?= $row[1]; ?> | <?php $total_hh2 = $total_hh2 + $row[1]; echo $total_hh2; ?> | <?= $po_hh2 - $total_hh2; ?><br>
		- HH Type 3 : <?= $po_hh3 ; ?> | <?= $row[2]; ?> | <?php $total_hh3 = $total_hh3 + $row[2]; echo $total_hh3; ?> | <?= $po_hh3 - $total_hh3; ?></p>
		<br>
	<?php
			}
		}
		if ($result1->num_rows < 1 && $result2->num_rows < 1 && $result3->num_rows < 1){
			echo "TIDAK ADA PRODUKSI<br><br>";
		}
	?>
	<p>==================</p>
	
	<p>&#x1F4DD NEXT PLAN :</p>
	&nbsp;U ditch : Repair Moulding<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembesian<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengecoran uditch.<br>
	&nbsp;HH : Bongkar begesting<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembesian<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengecoran</p>
	
	<p>&#x1F4E2 INFO:</p>
	
	<br>
	<p>&#x1F198 ISSUE:- Repair Moulding<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- penambahan waktu produksi</p>
</body>
</html>
