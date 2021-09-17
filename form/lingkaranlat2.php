<html>
<head><title>lingkaran</title></head>
<body>
    <form action="" method="post">
    lingkaran <br>
    jari - jari <input type="number" name="jari"><br>
    <input type="submit" name="submit"  value="masukkan">
    
    </form>
</body>
</html>

<?php 
if (isset($_POST["submit"])){
    $jari = $_POST["jari"];
    $luas = 3.14 * $jari * $jari;
    $kel = 2 * 3.14 * $jari;
    echo "Luasnya Adalah $luas <br>";
    echo "Kelilingnya Adalah $kel";
}
?>

