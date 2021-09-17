<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <form action="" method="post">
<fieldset>
    <legend>latihan 3</legend>
    <table>

    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="name" name="nama"></td>
    </tr>
    <tr>
        <td>jenis kelamin</td>
        <td>:</td>
        <td><input type="radio" name="jeniskelamin" value = "Laki-Laki">laki-laki
             <input type="radio" name="jeniskelamin" value="perempuan">perempuan</td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="date" name="tanggallahir"></td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td><select name="agama" >
            <option value="islam">islam</option>
            <option value="kristen">kristen</option>
            <option value="konghuchu">Konghuchu</option>
        </select></td>
    </tr>

    <tr>
        <td>alamat</td>
        <td>:</td>
        <td><input type="textarea" name="alamat"></td>
    </tr>
    <tr>
        <td>hobi</td>
        <td>:</td>
        <td><input type="checkbox" name="hobi[]" value="berenang">berenang 
        <input type="checkbox" name="hobi[]" value="nyanyi">nyanyi 
        <input type="checkbox" name="hobi[]" value="menonton film">menonton film 
        <input type="checkbox" name="hobi[]" value="bermain game">bermmain game 
        <input type="checkbox" name="hobi[]" value="makan">makan 
        <input type="checkbox" name="hobi[]" value="berlari"> berlari </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td> <input type="reset" name="reset" value="reset">        
            <input type="submit" name="submit" value="masukkan"></td>
    </tr>
    </table>


    <?php
    if (isset($_POST["submit"])){
        $nama=$_POST["nama"];
        $jk=$_POST["jeniskelamin"];
        $tanggalLahir=$_POST["tanggallahir"];
        $agama=$_POST["agama"];
        $alamat=$_POST["alamat"];
        $hobi=$_POST["hobi"];
       

   function biodata($nama="",$jk="",$tanggalLahir="",$agama="",$alamat="", $hobi=""){
            $hasil = "nama :" . $nama . "<br>";
            $hasil .= "Jenis kelamin : $jk<br>";
            $hasil .= "Tanggal Lahir : $tanggalLahir<br>";
            $hasil .= "  Agama : $agama<br>";
            $hasil .= "hobi :". implode(",", $hobi);
            return $hasil;
    
   
   }
  echo biodata($nama,$jk,$tanggalLahir,$agama,$alamat,$hobi);

}?>
</fieldset>

</form>
</body>
</html>


<!-- if (isset($_POST["berenang"])){
             $_POST["berenang"] . "<br>";
        }
        if (isset($_POST["nyanyi"])){
             $_POST["nyanyi"] . "<br>";
        }
        if (isset($_POST["menontonfilm"])){
            $_POST["menontonfilm"] . "<br>";
        }
        if (isset($_POST["bermaingame"])){
             $_POST["bermaingame"] . "<br>";
        }
        if (isset($_POST["makan"])){
            $_POST["makan"] . "<br>";
       }
       if (isset($_POST["berlari"])){
        $_POST["berlari"] . "<br>";
   } -->