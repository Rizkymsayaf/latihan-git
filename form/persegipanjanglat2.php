<html>
<head><title>persegi panjang</title></head>
<body>
    <form action="" method="post">
    <h2>persegi panjang</h2><br>
    panjang : <input type="number" name="panjang"><br>
    lebar : <input type="number" name="lebar"><br>
    <input type="submit" name="submit" Value="masukka">
    
    </form>
</body>
</html>

<?php 
if (isset($_POST["submit"])){
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $luas = $panjang * $lebar;
    $kel = 2 * ($panjang * $lebar);
    echo " Luas = $panjang * $lebar : $luas <br>";
    echo "kelilingnya = 2 * ($panjang * $lebar): $kel <br>";   
}
?>