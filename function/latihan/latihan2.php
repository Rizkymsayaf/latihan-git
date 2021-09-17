<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>maskkan prhitungan luas dan keliling</legend>
        <form action="" method="post">
        <tr>
            <th>masukkan jari</th>
            <td><input type="number" name="jari"></td>
        </tr>
        <tr>
            <th></th>
            <td><Input type="submit"name="simpan" value="simpan"></td><br>
        </tr>
    


    <?php
    if (isset($_POST["simpan"])){
        $a = $_POST["jari"];

        function luasLingkaran($jari,$phi=3.14){
            $luas=$phi * $jari * $jari;
            return $luas;
        }

        function kelilingLingkaran($jari,$phi=3.14){
            $keliling=2* ($phi*$jari);
            return $keliling;
        }?>

        jari-jari = <?php echo $a; ?><br>
        luasLingkaran = <?php echo luasLingkaran($a); ?><br>
        kelilingLingkaran= <?php echo kelilingLingkaran($a); ?>
   
   
   <?php } 
    ?>
</fieldset>
</form>    
</body>
</html>





