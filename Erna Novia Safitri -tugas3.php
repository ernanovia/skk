<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
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
   

    ?>
</body>
</html>