<?php 
if (isset($_POST["submit"])){
    $nama=$_POST["nama"];
    $nik=$_POST["nik"];
    $jk=$_POST["jk"];
    $agama=$_POST["agama"];
    $namamobil=$_POST["namamobil"];
    $jenismobil=$_POST["jenismobil"];
    $merek=$_POST["merek"];
    $plat=$_POST["plat"];
    $tanggalpeminjaman=$_POST["tp"];
    $tanggalkembali=$_POST["tk"];
    $penjamin=$_POST["penjamin"];
    $supir=$_POST["supir"];


}

?>

<!DOCTYPE html>
 <html>
<head><title>proses latihan5</title></head>

<body>
    <form action="proseslat5.php" method="post">
    <table>
    <tr>
    <td><input type="hidden" name="nama" value="<?php echo $nama; ?>"></td>
    <td><input type="hidden" name="nik" value="<?php echo $nik; ?>"></td>
    <td><input type="hidden" name="jk" value="<?php echo $jk; ?>"></td>
    <td><input type="hidden" name="agama" value="<?php echo $agama; ?>"></td>
    <td><input type="hidden" name="namamobil" value="<?php echo $namamobil; ?>"></td>
    <td><input type="hidden" name="jenismobil" value="<?php echo $jenismobil; ?>"></td>
    <td><input type="hidden" name="merek" value="<?php echo $merek; ?>"></td>
    <td><input type="hidden" name="plat" value="<?php echo $plat; ?>"></td>
    <td><input type="hidden" name="tp" value="<?php echo $tanggalpeminjaman; ?>"></td>
    <td><input type="hidden" name="tk" value="<?php echo $tanggalkembali; ?>"></td>
    <td><input type="hidden" name="penjamin" value="<?php echo $penjamin; ?>"></td>
    <td><input type="hidden" name="supir" value="<?php echo $supir; ?>"></td>    </tr>
    

    <tr>
    <td>Tanggal Telat</td>
    <td>:</td>
    <td><input type="date" name="tanggaltelat"></td>
    </tr>

    

    <tr>
    <td><input type="submit" name="save" value="save"></td>
    </tr>
    </table>
    </form>
</body>
</html> 


