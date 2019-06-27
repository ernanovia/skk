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
<h1><center>Menghitung Luas dan Keliling Segitiga</center></h1>
    <form action="segitiga.php" method="get">
        <fieldset style="background-color:#FAF0AC; color:#7A6D18">
            <legend>Menghitung Luas Segitiga</legend>
            <p>
                <label>Alas : </label>
                <input type="text" name="a" placeholder="alas">
            </p>
            <p>
                <label>Sisi ke 2 : </label>
                <input type="text" name="b" placeholder="Sisi ke 2">
            </p>
            <p>
                <label>Sisi ke 3 : </label>
                <input type="text" name="c" placeholder="Sisi ke 3">
            </p>

            <p>
                <label>Tinggi : </label>
                <input type="text" name="h" placeholder="tinggi">
            </p>
            <p>
                <input type="submit" name="submit" value="hitung">
            </p>
        </fieldset>
    </form>
    <?php 
    if(isset($_GET['submit'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $h = $_GET['h'];
        $hasil_luas = 1/2 * $a * $h;
        $hasil_kel = ($a + $b + $c);
        echo "Luas Segitiga dengan alas : $a , sisi ke dua  : $b , sisi ke tiga  : $c dan tinggi : $h ";
        echo '<br>';
        echo "Luasnya adalah ". $hasil_luas;
        echo '<br>';
        echo "Keliling adalah ". $hasil_kel;
    }
    ?>
</body>
</html>