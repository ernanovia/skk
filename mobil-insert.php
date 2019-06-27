<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
    
        Nomor Polisi : <input type="text" name="nopol"><br>
		merek : <input type="text" name="merek"><br>	
		tahun : <input type="text" name="tahun"><br>	
		pemilik : <input type="text" name="pemilik"><br>	
		<input type="submit" value="simpan"><br>
		<a href="mobil.php">kembali</a>
	</form>

	<?php
		$server = "localhost";
		$user = "root";
		$password = "";
		$database = "latihan";

		if (isset($_POST["nopol"])) {
            $nopol = $_POST["nopol"];
            $merek = $_POST["merek"];
			$tahun = $_POST["tahun"];
			$pemilik = $_POST["pemilik"];

			$koneksi = mysqli_connect($server,$user,$password,$database);
			if (!$koneksi) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "INSERT INTO mobil (nopol,merek,tahun,pemilik)
					VALUES (
                    '". $nopol ."',
                    '". $merek ."',
					'". $tahun ."',
					'". $pemilik ."'
					)";

			if (mysqli_query($koneksi, $sql)) {
			    echo "berhasil masuk 1 row";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
			}

		}

	?>
</body>
</html>