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
        // for($i=0; $i<=5 ; $i++){
        //     echo $i." ";
        //  }
        //  echo '<br>';
        //  for($i=30; $i>=0 ; $i--){
        //     echo $i." ";
        //  }
        //  echo '<br>';
        //  for($i=100; $i>=50 ; $i=$i-2){
        //     echo $i." ";
        //  }

        //  echo '<br>';
        //  $i=0;
        //  while($i<=5){
        //     echo $i." ";
        //     $i++;
        //  }

        //  echo '<br>';
        //  $i=100;
        //  while($i>=50){
        //     echo $i." ";
        //     $i=$i-2;
        //  }
         
        //  for($i=5; $i>0 ; $i--){
        //      for($j=$i; $j>0 ; $j--)
        //     echo "*";
        //     echo '<br>';
        //  }

        //  echo '<br>';
        //  for($i=5; $i>=0 ; $i--){
        //     for($j=5; $j>$i ; $j--)
        //    echo "*";
        //    echo '<br>';
        // }

            //2,3,5,8,13,21
        //  echo '<br>';
        //  for($i=2; $i<=13 ; $i++){
        //     echo $i.", ";
        //  }

        echo '<br>';
        $a= 2;
        $b= 3;
        echo "$a, $b,";
        for($i=0; $i<=3 ; $i++){
        $hasil = $a+$b;
           echo $hasil.", ";
           $a = $b;
           $b = $hasil;
        }
        echo '<br>';

        // echo '<br>';
        // $a= 2;
        // $b= 3;
        // //echo "$a, $b,";
        // for($i=2; $i<=21 ; $i++){
        //     for($j=3; $j<$i ; $j++)
        //     $hasil = $i+$j;
        //    echo $hasil.", ";
           
        // }
        // echo '<br>';
// siapkan 2 angka awal
// $angka_sebelumnya=0;
// $angka_sekarang=1;
  
// //tampilkan 2 angka awal
// echo "$angka_sebelumnya $angka_sekarang";
 
// for ($i=0; $i<10; $i++)
// {
//   // hitung angka yang akan ditampilkan
//   $output = $angka_sekarang + $angka_sebelumnya;
//   echo " $output";
  
//   //siapkan angka untuk perhitungan berikutnya
//   $angka_sebelumnya = $angka_sekarang;
//   $angka_sekarang = $output;
// }
 
// hasil: 
// 0 1 1 2 3 5 8 13 21 34 55 89


         

    ?>
</body>
</html>