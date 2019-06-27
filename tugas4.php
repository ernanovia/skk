<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


    <!-- <h1><center>TEXT</center></h1> -->
    
    <!-- <?php 
    // if(isset($_GET['submit'])){
    //     $kata = $_GET['kata'];
    //     $arr = str_split($kata);
    //     echo "Jumlah kata $kata = ". strlen($kata);
    //     echo '<br>';
    //     foreach ($arr as $kt => $jml){
    //     echo "$jml jumlahnya $kt";
    //     echo '<br>';
    //     }
        
    // }
    ?> -->
    <?php 
    function hitung_huruf($kata){
        $arr = str_split($kata);
        $huruf = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $found = array_intersect($huruf,$arr);
        $count = array_count_values($arr);
        $result = [];
        foreach ($found as $item){
            $result[$item] = $count[$item];
        }
        return $result;
    }
    ?>
    <form action="tugas4.php" method="post">
        <fieldset style="background-color:#FAF0AC; color:#7A6D18">
            <legend>TEST HITUNG HURUF</legend>
            <p>
                <label>kata : </label>
                <input type="text" name="kata" placeholder="kata">
            </p>
            <p>
                <input type="submit" name="submit" value="hitung">
            </p>
        </fieldset>
    </form>
    
  <?php if ($_POST && isset($_POST['kata'])): 
    $kata = $_POST['kata'];
    echo "kalimat : ".$kata;
    ?>
    <hr>
    
    <table border="1">
      <?php foreach (hitung_huruf($_POST['kata']) as $huruf => $jumlah): ?>
        <tr>
          <td style="width:100px"><?php echo $huruf ?></td>
          <td style="width:100px"><?php echo $jumlah ?></td>
        </tr>
      <?php endforeach ?>
    </table>
  <?php endif ?>

</body>
</html>