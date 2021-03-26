<?php
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daily Report</title>
</head>
<body>
	<form method="GET" action="hasil/index.php">
		<?php
			$query = "SELECT tanggal FROM produksi GROUP BY tanggal ORDER BY tanggal DESC";
			$result = $conn->query($query);
			while ($row = $result->fetch_assoc()){
		?>
			<button type="submit" value="<?php echo $row['tanggal'];?>" name="tanggal"><?php echo $row['tanggal'];?></button><br>
		<?php
			}
		?>
	</form>
</body>
</html>