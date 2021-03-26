<?php
	include "../../koneksi.php";
	$total = "SELECT SUM(u), SUM(t), SUM(c), SUM(c2), SUM(hh1), SUM(hh2), SUM(hh3) FROM produksi WHERE tanggal < '".$_GET['tanggal']."'";
	$bdk1 = "SELECT * FROM produksi WHERE tanggal = '".$_GET['tanggal']."' AND kode LIKE 'BDK1%'";
	$bdk2 = "SELECT * FROM produksi WHERE tanggal = '".$_GET['tanggal']."' AND kode LIKE 'BDK2%'";
	$result = $conn->query($total);
	$record = $result->fetch_array();
	$total_u = $record[0];
	$total_t = $record[1];
	$total_c = $record[2];
	$total_c2 = $record[3];
	$total_hh1 = $record[4];
	$total_hh2 = $record[5];
	$total_hh3 = $record[6];
?>