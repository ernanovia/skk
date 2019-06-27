<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<a href="lat9insert.php"> tambah data </a> <nbr>

	<?php
		$server = "localhost";
		$user = "root";
		$password = "";
		$database = "latihan";

		$koneksi = mysqli_connect($server,$user,$password,$database);
		if (!$koneksi) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT * FROM buku";
		$result = mysqli_query($koneksi, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    echo "<table border=1>";
		    echo "<tr>";
		    echo "<td>id</td>";
		    echo "<td>judul</td>";
		    echo "<td>pengarang</td>";
		    echo "<td>tahun</td>";
		    echo "<td>action</td>";
		    echo "</tr>";
		    while($row = mysqli_fetch_assoc($result)) {
		    	echo "<tr>";
		        echo "<td>" . $row[id] . "</td>";
		        echo "<td>" . $row[judul] . "</td>";
		        echo "<td>" . $row[pengarang] . "</td>";
		        echo "<td>" . $row[tahun] . "</td>";
		        echo "<td>
		        		<a href='lat9edit.php?id=" . $row[id] . "'> 
		        		edit </a>
		        		<a href='lat9del.php?id=" . $row[id] . "'> 
		        		del </a>
		        	</td>";
		        echo "</tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}		
	?>

</body>
</html>