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
<h1><center>Menghitung Luas dan Keliling Jajar Genjang</center></h1>
    <form action="jajarGenjang.php" method="get">
        <fieldset style="background-color:#FAF0AC; color:#7A6D18">
            <legend>Masukan Alas, Sisi Miring dan Tinggi Jajar Genjang</legend>
            <p>
                <label>Alas : </label>
                <input type="text" name="a" placeholder="alas">
            </p>
            <p>
                <label>Sisi Miring : </label>
                <input type="text" name="b" placeholder="sisi miring">
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
        $h = $_GET['h'];
        $hasil_luas = $a * $h;
        $hasil_kel = 2* ($a + $b);
        echo "Jajar Genjang dengan alas : $a , sisi miring : $b dan tinggi : $h";
        echo '<br>';
        echo "Luas adalah ". $hasil_luas;
        echo '<br>';
        echo "Keliling adalah ". $hasil_kel;
    }
    ?>
</body>
</html>