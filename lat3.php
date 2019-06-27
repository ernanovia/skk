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
    <h2>
    <?php 
        echo "Pelatihan dan Sertifikasi Berbasis SKKNI <br>";
        $bil1 = 3;
        $bil2 = "4";
        echo "isi \$bil1 adalah $bil1<br>";
        echo 'isi $bil1 adalah '. $bil1;
        echo '<br>';
        echo "string gabung string ".$bil2.$bil1;
        echo '<br>';
        echo "string plus string " +$bil2+$bil1;
        echo '<br>';
        echo "string minus string " +$bil2-$bil1;
        echo '<br>';
        $a = 5 ;
        $b = 6 ;
        $c = 2 ;

        $hasil = $b/$c;
        echo "Hasil $b / $c adalah ". $hasil;

    ?>
    </h2>
</body>
</html>