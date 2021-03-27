<!DOCTYPE html>
<html>
<head>
	<title>Request Dana</title>
</head>
<body>
	<form method="POST" action="">
		<table>
			<tr>
				<td>
					<label for="pemohon">Pemohon :</label><br>
					<input type="text" name="pemohon">
				</td>
				<td>
					<label for="namarek">Nama Pemilik Rekening :</label><br>
					<input type="text" name="namarek">
				</td>
				<td>
					<label for="bank">Nama Bank :</label><br>
					<input type="text" name="bank">
				</td>
				<td>
					<label for="norek">Nomor Rekening :</label><br>
					<input type="text" name="norek">
				</td>
			</tr>
		</table>
		<br>
		<table>
			<tr>
				<td>
					<label for="transaksi">Uraian :</label><br>
					<input type="input" id="transaksi" name="transaksi">
				</td>
				<td>
					<label for="harga">Harga Satuan :</label><br>
					<input type="number" id="harga" name="harga">
				</td>
				<td>
					<label for="jumlah">Jumlah Transaksi / Pekerjaan :</label><br>
					<input type="number" id="jumlah" name="jumlah">
				</td>
				<td>
					<label for="satuan">Satuan :</label><br>
					<select id="satuan" name="satuan">
						<option value="pcs">Pieces (buah)</option>
						<option value="set">Set (pasang)</option>
						<option value="bund">Bundle (ikat)</option>
						<option value="rit">Trip (rit)</option>
						<option value="trsc">Transaction (transaksi)</option>
					</select>
				</td>
			</tr>
		</table>
		<a>+</a>
	</form>

	<script type="text/javascript" src="../public/js/requestdana.js"></script>
</body>
</html>