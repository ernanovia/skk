<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		judul : <input type="text" name="judul"><br>	
		pengarang : <input type="text" name="pengarang"><br>	
		tahun : <input type="text" name="tahun"><br>	
		<input type="submit" value="simpan"><br>
		<a href="lat9.php">kembali</a>
	</form>

	<?php
		$server = "localhost";
		$user = "root";
		$password = "";
		$database = "latihan";

		$judul = $_POST["judul"];
		$pengarang = $_POST["pengarang"];
		$tahun = $_POST["tahun"];

		$koneksi = mysqli_connect($server,$user,$password,$database);
		if (!$koneksi) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO buku (judul,pengarang,tahun)
				VALUES (
				'". $judul ."',
				'". $pengarang ."',
				". $tahun ."
				)";

		if (mysqli_query($koneksi, $sql)) {
		    echo "berhasil masuk 1 row";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}


	?>
</body>
</html>