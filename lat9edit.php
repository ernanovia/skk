<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form method="post">
    judul : <input type="text" name="judul"><br>
    Pengarang : <input type="text" name="pengarang"><br>
    Tahun : <input type="text" name="tahun"><br>
    <input type="submit" value="simpan"><br>
    <a href="lat9.php">Kembali</a>    
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
        # code...
        die("connection failed" . mysqli_connect_error());
    }

    $sql = "INSERT INTO buku (judul,pengarang,tahun)
    values (
    '".$judul."',
    '".$pengarang."',
    ".$tahun."
    )";
    
    if(mysqli_query($koneksi, $sql)) {
        echo "berhasil masuk";
    }else {
        echo "error".$sql."<br>".mysqli_error($conn);
    }
    ?>
</body>
</html>