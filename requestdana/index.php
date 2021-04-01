<!DOCTYPE html>
<html>
<head>
	<title>Request Dana</title>
</head>
<body>
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
		<tr>
			<td colspan="4">
				<center><button id="tambah" onclick="addRow();">Tambah</button></center>
			</td>
		</tr>
	</table>
	<br>
	<form method="POST" action="">
		<table id="isi" border="1px">
			<thead>
				<th>No</th>
				<th>Deskripsi</th>
				<th>Jumlah</th>
				<th>Satuan</th>
				<th>Harga</th>
				<th>Subtotal</th>
			</thead>
			<tr>
				<td colspan="5" align="right">TOTAL</td>
				<td><input type="text" name="total" id="total" disabled></td>
			</tr>
		</table>
	</form>

	<script type="text/javascript" src="../public/js/requestdana.js"></script>
</body>
</html>