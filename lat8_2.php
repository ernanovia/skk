<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "latihan";

    $koneksi = mysqli_connect($server,$user,$password,$database);
    if (!$koneksi) {
        # code...
        die("connection failed" . mysqli_connect_error());
    }

    $sql = "select * from buku";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0){
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td>id</td>";
            echo "<td>judul</td>";
            echo "<td>pengarang</td>";
            echo "<td>tahun</td>";
            echo "</tr>";
           
        while ($row = mysqli_fetch_assoc($result)) {
            # code...
            
            echo "<tr>";
            echo "<td>" . $row["id"]."</td>";
            echo "<td> " . $row["judul"]."</td>"; 
            echo "<td> " . $row["pengarang"]."</td>";
            echo "<td>" . $row["tahun"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nihil";
    }
    ?>
</body>
</html>