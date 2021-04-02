<?php
	include '../koneksi.php';

	$query = 'SELECT * FROM listpermohonandana WHERE MONTH(dibuat) = '.date("m");
	switch (date('m')) {
		case '1':
			$bulan = 'I';
			break;
		
		case '2':
			$bulan = 'II';
			break;
		
		case '3':
			$bulan = 'III';
			break;
		
		case '4':
			$bulan = 'IV';
			break;
		
		case '5':
			$bulan = 'V';
			break;
		
		case '6':
			$bulan = 'VI';
			break;
		
		case '7':
			$bulan = 'VII';
			break;
		
		case '8':
			$bulan = 'VIII';
			break;
		
		case '9':
			$bulan = 'IX';
			break;
		
		case '10':
			$bulan = 'X';
			break;
		
		case '11':
			$bulan = 'XI';
			break;
		
		case '12':
			$bulan = 'XII';
			break;
		
		default:
			$bulan = 'O';
			break;
	}
	$nomor = $conn->query($query)->num_rows;
	$id = ($nomor+1).'/REQ/BDK/'.$bulan.'/'.date('Y');
	$pemohon = $_POST['pemohon'];
	$namarek = $_POST['namarek'];
	$norek = $_POST['norek'];
	$bank = $_POST['bank'];
	$transaksi = $_POST['transaksi'];
	$jumlah = $_POST['jumlah'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];
	$subtotal = $_POST['subtotal'];
	$total = 0;
	
	foreach ($transaksi as $key => $value) {
		$query = "INSERT INTO permohonandana(id, uraian, jumlah, satuan, harga, subtotal) VALUES('".$id."', '".$transaksi[$key]."', '".$jumlah[$key]."', '".$satuan[$key]."', '".$harga[$key]."', '".$subtotal[$key]."')";
		$conn->query($query);
		$total = $total + $subtotal[$key];
	}

	$query = "INSERT INTO listpermohonandana(id, pemohon, norek, bank, namarek, nilai) VALUES('".$id."', '".$pemohon."', '".$norek."', '".$bank."', '".$namarek."', '".$total."')";
	$conn->query($query);
?>