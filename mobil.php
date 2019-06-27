<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<a href="mobil-insert.php"> tambah data </a> <nbr>
	<form method="get">
		<input type="text" placeholder="cari" name="nopol">
		<input type="submit" value="cari">
	
	</form>

	<?php
		$server = "localhost";
		$user = "root";
		$password = "";
		$database = "latihan";
		$page = 1;
		$limit = 3;
		$offset = 0;

		//$page = $_GET['page'];
		//$offset = $page * $limit - $limit;

		//limit 3
		//total row (tr) 
		//total page (tp)
		//tp = ceil(tr/limit)

		$koneksi = mysqli_connect($server,$user,$password,$database);
		if (!$koneksi) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		if(isset($_GET["page"])) {
			$page = $_GET["page"];
			$offset = $page * $limit - $limit;
		}
		$sql2 = "SELECT count(*) FROM mobil";
		$result2 = mysqli_query($koneksi, $sql2);
		$row2 = mysqli_fetch_array($result2);
		$tr = $row2[0];
		$tp = ceil($tr/$limit);
		
		echo "<br>";
		for ($i= 1; $i<= $tp; $i++) {
			echo "<a href = 'mobil.php?page=$i'>$i</a>";
		}

		$sql = "SELECT * FROM mobil LIMIT $limit OFFSET $offset";
		if(isset($_GET["nopol"])) {
			$nopol = $_GET["nopol"];
			$sql = "SELECT * FROM mobil
			WHERE nopol LIKE '%$nopol%'
			LIMIT $limit
			OFFSET $offset";
		}
		


		$result = mysqli_query($koneksi, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    echo "<table border=1>";
		    echo "<tr>";
		    
		    echo "<td>nopol</td>";
		    echo "<td>merek</td>";
            echo "<td>tahun</td>";
            echo "<td>pemilik</td>";
		    echo "<td>action</td>";
		    echo "</tr>";
		    while($row = mysqli_fetch_assoc($result)) {
		    	echo "<tr>";
				echo "<td>". $row["nopol"]."</td>";
				echo "<td>". $row["merek"]."</td>";
                echo "<td>". $row["tahun"]."</td>";
                echo "<td>". $row["pemilik"]."</td>";
		        echo "<td>
		        		<a href='mobil-edit.php?id=" . $row["id"] . "'> 
		        		edit </a>
		        		<a href='mobil-del.php?id=" . $row["id"] . "'> 
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