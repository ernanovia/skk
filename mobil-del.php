<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php
		$server = "localhost";
		$user = "root";
		$password = "";
		$database = "latihan";

		if (isset($_GET["id"])) {
			$id = $_GET["id"];

			$koneksi = mysqli_connect($server,$user,$password,$database);
			if (!$koneksi) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "DELETE FROM mobil
					WHERE id = $id";

			if (mysqli_query($koneksi, $sql)) {
			    echo "berhasil delete 1 row";
			    echo "<br><a href='mobil.php'>kembali</a>";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
			}

		} else {
			echo "tidak ada id tersebut";
			echo "<br><a href='mobil.php'>kembali</a>";
			
		}

	?>
</body>
</html>