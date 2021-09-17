<html>
<head><title>persegi</title></head>
<body>
    <form action="" method="post">
    panjang<input type="number" name="panjang"> <br>
    lebar<input type="number" name="lebar"> <br>
    <button type="submit" name="save"  value="masukkan"></button>
    </form>
</body>
</html>

<?php 
if (isset($_POST["save"])) {
    $panjang =$_POST["panjang"];
    $lebar =  $_POST["lebar"];
    $luas = $panjang *  $lebar;
    $keliling = 2 * ($panjang * $lebar);
    echo "Luasnya Adalah $luas <br>";
    echo "kelilingnya adalah $keliling";
}
?>