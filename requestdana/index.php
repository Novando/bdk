<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../public/js/jquery-3.6.0.min.js"></script>
	<title>Request Dana</title>
</head>
<body>
	<form method="POST" action="proses.php">
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
		<table id="isi" border="1px">
			<thead>
				<th>No</th>
				<th>Uraian</th>
				<th>Jumlah</th>
				<th>Satuan</th>
				<th>Harga</th>
				<th>Subtotal</th>
				<th></th>
			</thead>
			<tr>
				<td>1</td>
				<td><input type="input" id="transaksi1" name="transaksi[]"></td>
				<td><input type="number" id="jumlah1" value="0" name="jumlah[]"></td>
				<td>
					<select id="satuan1" name="satuan[]">
						<option value="pcs">Pieces (buah)</option>
						<option value="set">Set (pasang)</option>
						<option value="bund">Bundle (ikat)</option>
						<option value="rit">Trip (rit)</option>
						<option value="trsc">Transaction (transaksi)</option>
						<option value="hari">Day (hari)</option>
						<option value="ltr">Litre (liter)</option>
					</select>
				</td>
				<td>Rp<input type="number" id="harga1" value="0" name="harga[]" onkeyup="calculate()"></td>
				<td>Rp<input type="text" id="subtotal1" name="subtotal[]" readonly></td>
				<td><a onclick="addRow()" id="add">tambah</a></td>
			</tr>
		</table>
		<p id="total"></p>
		<button type="submit">Proses</button>
	</form>

	<script type="text/javascript" src="../public/js/requestdana.js"></script>
</body>
</html>