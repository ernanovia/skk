<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1><center>Menghitung Luas dan Keliling Lingkaran</center></h1>
    <form action="lingkaran.php" method="get">
        <fieldset style="background-color:#FAF0AC; color:#7A6D18">
            <legend>Masukan Jari-jari lingkaran</legend>
            <p>
                <label>Jari-jari : </label>
                <input type="text" name="r" placeholder="jari-jari">
            </p>

            <p>
                <input type="submit" name="submit" value="hitung">
            </p>
        </fieldset>
    </form>
    <?php 
    if(isset($_GET['submit'])){
        $r = $_GET['r'];
        $hasil_luas = 22/7 * $r * $r;
        $hasil_kel = 2*22/7 * $r;
        echo "Lingkaran dengan jari-jari : $r";
        echo '<br>';
        echo "Luas adalah ". $hasil_luas;
        echo '<br>';
        echo "Keliling adalah ". $hasil_kel;
    }
    ?>
</body>
</html>