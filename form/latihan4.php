<html>
<head><title>Latihan 4</title></head>
<body>
    <form action="" method="post">
    <h2>GAJI KARYAWAN</h2><br>
    <table>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama"><td>
    
    </tr>
    <tr>
    <td> Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="jenis" value="Laki-Laki">Laki-laki
    <input type="radio" name="jenis" value="perempuan">Perempuan</td>
    </tr>

    <tr>
    <td>Agama</td>
    <td>:</td>
    <td><select name="agama">
    <option value="Islam">islam</option>
    <option value="kristen">kristen</option>
    <option value="Buddha">Buddha</option>
    <option value="Hindu">Hindu</option>
    <option value="Tidak Ada">Tidak ada</option></td>
    </select>
    </tr>

    <tr>
    <td>Golongan</td>
    <td>:</td>
    <td><select name="golongan" >
    <option value="1">golongan1</option>
    <option value="2">golongan2</option>
    <option value="3">golongan3</option>
    <option value="4">golongan4</option>
    </select></td>
    </tr>

    <tr>
    <td>Jumlah Jam Kerja</td>
    <td>:</td>
    <td><input type="number" name="jumlah"></td>
    </tr>

    <tr>
    <td><input type="submit" name="submit" value="masukkan"></td>
    </tr>
    </table>

    </form>
</body>
</html>

<?php
if (isset($_POST["submit"])){
    $nama =$_POST["nama"];
    $jenis=$_POST["jenis"];
    $agama=$_POST["agama"];
    $golongan=$_POST["golongan"];
    $jam=$_POST["jumlah"];
    
    if ($golongan == 1){
        $gajipokok = 1500000;
        $tunjangan = 150000;
    } else if  ($golongan == 2) {
        $gajipokok = 2000000;
        $tunjangan = 200000;
    }else if ($golongan == 3) {
        $gajipokok = 2500000;
        $tunjangan = 250000;
    }elseif ($golongan == 4) {
        $gajipokok = 3000000;
        $tunjangan = 300000;
    }

    if ($jam > 173) {
        $jamsisa = $jam - 173;
        $lembur = 20000 * $jamsisa;
    } else {
        $lembur = 0;
    }

    echo "nama :$nama <br>";
    echo "Jenis Kelamin : $jenis <br> ";
    echo "Agama : $agama <br>";
    echo "jumlah jam kerja : $jam <br>";
    echo "Gaji pokok = $gajipokok<br>";
    echo "Gaji Lembur = $lembur<br>";
    $pajakpokok = ($gajipokok * 5) /100;
    echo "Pajak Gaji pokok = $pajakpokok<br>";
    $pajaklembur = ($lembur * 5)/ 100;
    echo "pajak Gaji Lembur = $pajaklembur<br>";
    $totalpajak =  $pajakpokok + $pajaklembur;
    echo "Total Pajak  :  $totalpajak <br>";
    echo "Tunjangan Pengabdian = $tunjangan<br>";
    $totalgaji = ($gajipokok + $tunjangan) + $lembur;
    $total = $totalgaji - $totalpajak;
    echo "gaji diterima = $total";
}
?>

