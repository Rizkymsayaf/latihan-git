<html>
<head><title>segitiga</title></head>
<body>
    <form action="" method="post">
    Alas :<input type="number" name="alas"><br>
    tinggi :<input type="number" name="tinggi"><br>
    <button type="submit" name="save" value="masukkan"></button>
    </form>
</body>
</html>

<?php 
if (isset($_POST["save"])){
    $alas = $_POST["alas"];
    $tinggi = $_POST["tinggi"];
    $luas = 1/2 * $alas *$tinggi;
    $kel = $alas * $alas * $alas;
    echo "Luasnya Adalah 0.5 * a * T : $luas<br>";
    echo "kelilingya adala a * a * a :  $kel<br>";
}
?>