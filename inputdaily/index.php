<?php
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="daily.css">
	<title>Production Report</title>
</head>
<body>
	<h3>Production Report</h1>
	<form action="input.php" method="POST">
		<table>
			<tr>
				<td>
					<label for="tanggal">Tanggal</label>
				</td>
				<td>
					: <input id="tanggal" type="date" name="tanggal" required="true">
				</td>
			</tr>
			<tr>
				<td>
					<label for="jam">Jam</label>
				</td>
				<td>
					: <input id="jam" type="time" name="jam" required="true" value="11:00">
				</td>
			</tr>
			<tr>
				<td>
					<label for="site">Site</label>
				</td>
				<td>
					: <select id="site" name="site">
						<option value="BDK1">BDK1 - Rowosari</option>
						<option value="BDK2">BDK2 - Meteseh</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<thead>U-DITCH</thead>
						<tr>
							<td>
								<label for="u">&nbsp;&nbsp;&nbsp;1. U</label>
							</td>
							<td>
								: <input id="u" type="number" name="u" required="true" value="0">
							</td>
						</tr>
						<tr>
							<td>
								<label for="t">&nbsp;&nbsp;&nbsp;2. T</label>
							</td>
							<td>
								: <input id="t" type="number" name="t" required="true" value="0">
							</td>
						</tr>
						<tr>
							<td>
								<label for="c">&nbsp;&nbsp;&nbsp;3. C</label>
							</td>
							<td>
								: <input id="c" type="number" name="c" required="true" value="0">
							</td>
						</tr>
						<tr>
							<td>
								<label for="c2">&nbsp;&nbsp;&nbsp;4. Type 2</label>
							</td>
							<td>
								: <input id="c2" type="number" name="c2" required="true" value="0">
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<thead>HANDHOLE</thead>
						<tr>
							<td>
								<label for="hh1">&nbsp;&nbsp;&nbsp;1. HH Tipe 1</label>
							</td>
							<td>
								: <input id="hh1" type="number" name="hh1" required="true" value="0">
							</td>
						</tr>
						<tr>
							<td>
								<label for="hh2">&nbsp;&nbsp;&nbsp;2. HH Tipe 2</label>
							</td>
							<td>
								: <input id="hh2" type="number" name="hh2" required="true" value="0">
							</td>
						</tr>
						<tr>
							<td>
								<label for="hh3">&nbsp;&nbsp;&nbsp;1. HH Tipe 3</label>
							</td>
							<td>
								: <input id="hh3" type="number" name="hh3" required="true" value="0">
							</td>
						</tr>
						<tr>
							<td>
								<label for="hhc">&nbsp;&nbsp;&nbsp;1. HH Cover</label>
							</td>
							<td>
								: <input id="hhc" type="number" name="hhc" required="true" value="0">
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<button type="submit">Kirim</button>
	</form>
</body>
</html>