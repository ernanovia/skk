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

		if (isset($_POST["id"])) {
			$id = $_POST["id"];
			$nopol = $_POST["nopol"];
            $merek = $_POST["merek"];
            $tahun = $_POST["tahun"];
			$pemilik = $_POST["pemilik"];

			$koneksi = mysqli_connect($server,$user,$password,$database);
			if (!$koneksi) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "UPDATE mobil
					SET 
					nopol='". $nopol ."',
					merek='". $merek ."',
					tahun=". $tahun ."
					WHERE id=$id";

			if (mysqli_query($koneksi, $sql)) {
			    echo "berhasil update 1 row";
			    echo "<br><a href='mobil.php'>kembali</a>";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
			    echo "<br><a href='mobil.php'>kembali</a>";
			}
		}

		if (isset($_GET["id"])) {
			$id = $_GET["id"];

			$koneksi = mysqli_connect($server,$user,$password,$database);
			if (!$koneksi) {
			    die("Connection failed: " . mysqli_connect_error());
			    echo "<br><a href='mobil.php'>kembali</a>";
			}

			$sql = "SELECT * FROM mobil WHERE id=$id";
			$result = mysqli_query($koneksi, $sql);
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				$nopol = $row["nopol"];
				$merek = $row["merek"];
                $tahun = $row["tahun"];
                $pemilik = $row["pemilik"];
			} else {
				echo "tidak ada id tersebut";
			}
		}
	?>
	<form method="post">
		id : <input type="text" name="id"
			value="<?php echo $id; ?>" readonly><br>	
		nopol : <input type="text" name="nopol"
			value="<?php echo $nopol; ?>"><br>	
		merek : <input type="text" name="merek"
			value="<?php echo $merek; ?>"><br>	
		tahun : <input type="text" name="tahun"
			value="<?php echo $tahun; ?>"><br>
            pemilik : <input type="text" name="pemilik"
			value="<?php echo $pemilik; ?>"><br>	
		<input type="submit" value="simpan"><br>
		<a href="mobil.php">kembali</a>
	</form>





</body>
</html>