<?php
	include '../koneksi.php';

	$tanggal = $_POST['tanggal'];
	$jam = $_POST['jam'];
	$site = $_POST['site'];
	$u = $_POST['u'];
	$t = $_POST['t'];
	$c = $_POST['c'];
	$c2 = $_POST['c2'];
	$hh1 = $_POST['hh1'];
	$hh2 = $_POST['hh2'];
	$hh3 = $_POST['hh3'];
	$hhc = $_POST['hhc'];

	$date = date_create($tanggal);
	$kode = $site.'-'.date_format($date, 'dmy').'-';
	$sql = "SELECT kode FROM produksi WHERE kode LIKE '".$kode."%'";
	$result = $conn->query($sql);
	$count = ($result->num_rows)+1;
	$query = "INSERT INTO produksi(tanggal, kode, jam, u, t, c, c2, hh1, hh2, hh3, hhc) VALUES ('".$tanggal."', '".$kode.$count."', '".$jam."', '".$u."', '".$t."', '".$c."', '".$c2."', '".$hh1."', '".$hh2."', '".$hh3."', '".$hhc."')";
	$conn->query($query);
	// header("location:/dailyreport");
?>