<?php 
if (isset($_POST["save"])){
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
    $tanggaltelat=$_POST["tanggaltelat"];


    echo"Nama =$nama <br>";
    echo"Nik = $nik<br>";
    echo"Jenis Kelamin = $jk<br>";
    echo"Agama= $agama<br>";
    echo"namamobil=$namamobil<br>";
    echo"jenis Mobil=$jenismobil<br>";
    echo"Merk = $merek<br>";
    echo"plat = $plat<br>";
    echo"tanggal peminjaman =$tanggalpeminjaman<br>";
    echo"tanggal kembali = $tanggalkembali<br>";
    echo"penjamin =$penjamin <br>";
    $hari=(strtotime($tanggalkembali) - strtotime($tanggalpeminjaman)) 
    /60/60/24;

    $denda = 240000;
    

    if ($supir == "ya"){
        $biaya=425000;
        
    }
    else{
        $biaya = 150000;
        
    }

    echo "Biaya Harian : $biaya<br>";
    $tgl1= new Datetime($tanggalkembali);
    $tgl2= new Datetime($tanggalpeminjaman);
    $telat = $tgl1->diff($tgl2);

    echo "telat mengembalikan : $telat->d  hari<br>";
    $totaldenda= $denda * $telat->d;
    echo "denda :$totaldenda<br>";


    $subtotal1=$hari * $biaya;
    echo "total biaya : $subtotal1<br>";
    $subtotal2=($telat->d) * $denda;
    echo "Total Denda : $subtotal2<br>";

    $total= $subtotal1 + $subtotal2;
    echo "total pembayaran $total<br>";



}
?>
<html>
<head></head>
<body>
    <form action="proslat5.php" method="post">
    <table>
    <tr>
    <td>pembayaran</td>
    <td>:</td>
    <td><input type="number" name="pembayaran"></td>
    </tr>
    <tr>
    <td>
    <input type="submit" name="save" value="masukkan">
    </td>
    </tr>

    </table>
    </form>
</body>
</html>