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
    <?php 
        $kalimat = "saya suka php";
        // menghitung jumlah karakter
        $jumlah = strlen($kalimat);
        echo $jumlah;
        echo '<br>';
        //membalik kata
        $kalimat2 = "owoj kera";
        $balik = strrev($kalimat2);
        echo $balik;
        echo '<br>';
         //mencari
         $kalimat3 = "mencari cinta";
         $cari = strpos($kalimat3,'i');
         echo $cari;
         echo '<br>';


         // array 
         $deret = array("satu", "dua","tiga",4,5,6);
        //  print_r($deret);
        //  echo '<br>';
        //  echo "index 0  berisi $deret[0]";
        //  echo '<br>';
        //  $deret[1] = 5000;
        //  print_r($deret);
         echo '<br>';
         
         for ($i=0; $i < count($deret);$i++){
             echo "$deret[$i] <br>";
         }

         $favorit = array('cici' => 'merah', 'caca' => 'biru', 'cucu' => 'kuning');
         print_r($favorit);
         echo '<br>';
         //echo "caca suka ".$favorit['caca'];
         echo '<br>';
         echo '<br>';
         foreach ($favorit as $nama => $warna){
             echo " $nama suka $warna ";
             echo '<br>';
         }
        //  sort($favorit);
        //  print_r($favorit);
        //  echo '<br>';
         ksort($favorit);
         print_r($favorit);
         echo '<br>';
    ?>

    <h1><center>TEXT</center></h1>
    <form action="lat7.php" method="get">
        <fieldset style="background-color:#FAF0AC; color:#7A6D18">
            <legend></legend>
            <p>
                <label>kata : </label>
                <input type="text" name="kata" placeholder="kata">
            </p>
            <p>
                <input type="submit" name="submit" value="hitung">
            </p>
        </fieldset>
    </form>
    <?php 
    if(isset($_GET['submit'])){
        $kata = $_GET['kata'];
        echo "Jajar Genjang dengan alas : $a , sisi miring : $b dan tinggi : $h";
        echo '<br>';
        echo "Luas adalah ". $hasil_luas;
        echo '<br>';
        echo "Keliling adalah ". $hasil_kel;
    }
    ?>
    <br>
    <?php
function hitung_vocal($kata){
  $arr = str_split($kata);
  $vocal = ['a', 'i', 'u', 'e', 'o'];
  $found = array_intersect($vocal, $arr);
  $count = array_count_values($arr);
  $result = [];
  foreach ($found as $item) {
    $result[$item] = $count[$item];
  }
  return $result;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hitung Huruf Vocal</title>
</head>
<body>
  <h1>Hitung Huruf Vocal</h1>

  <form method="POST" action="<?php $PHP_SELF ?>">
    <p>
      Kata: <br>
      <input type="text" name="kata">
    </p>
    <p>
      <button type="submit">Hitung</button>
    </p>
  </form>

  <?php if ($_POST && isset($_POST['kata'])): ?>
    <hr>

    <table border="1">
      <?php foreach (hitung_vocal($_POST['kata']) as $huruf => $jumlah): ?>
        <tr>
          <td style="width:100px"><?php echo $huruf ?></td>
          <td style="width:100px"><?php echo $jumlah ?></td>
        </tr>
      <?php endforeach ?>
    </table>
  <?php endif ?>
</body>
</html>
</body>
</html>