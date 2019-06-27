<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "latihan";

// Create connection
$koneksi=mysqli_connect($server, $user, $pass,$database);


// if (!$koneksi) {
//     # code...
//     die("connection failed" . mysqli_connect_error());
// }

// $sql = "select * from buku";
// $result = mysqli_query($koneksi, $sql);

// if (mysqli_num_rows($result) > 0){
//     while ($row = mysqli_fetch_assoc($result)) {
//         # code...
//         echo "id: " . $row["id"]."<br>";
//         echo "judul: " . $row["judul"]."<br>"; 
//         echo "pengarang: " . $row["pengarang"]."<br>";
//         echo "tahun: " . $row["tahun"]."<br><br>";
//     }
// } else {
//     echo "Nihil";
// }



//sCheck connection
if (!$koneksi) {
    # code...
    die("connection failed" . mysqli_connect_error());
}
$sql = "SELECT * from buku";


$result = mysqli_query($koneksi, $sql);
echo "<h2><a href='lat9.php'>Tambah data</a></h2>";
if (mysqli_num_rows($result) > 0) {
    echo "<table border = '1'>";
    echo "<tr>";
    echo "<td>id</td>";
    echo "<td>judul</td>";
    echo "<td>pengarang</td>";
    echo "<td>tahun</td>";
    echo "<td>aksi</td>";
    echo "</tr>";
    //output data of each row
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>". $row["id"]."</td>";
        echo "<td>". $row["judul"]."</td>";
        echo "<td>". $row["pengarang"]."</td>";
        echo "<td>". $row["tahun"]."</td>";
        echo "<td><a href='lat9edit.php?id='. $row[id].>edit</a></td>";
        echo "</tr>";

    }
}
else{
    echo "Nihil";
}
