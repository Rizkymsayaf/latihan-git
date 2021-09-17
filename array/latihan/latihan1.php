<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
</head>
<body>
  <fieldset>
  <legend>program masukn sekolah</legend>
  <form action="" method="post">
   <table>
   <tr>
   <th>masukkkan jumlah data</th>
   <td>: <input type="number" name="jumlah"></td>
   </tr>
   <tr>
    <th>
    </th>
    <td>
    <button type="submit" name="simpan">simpan</button>
    <button type="reser">Reset</button>
    </td>
    </tr>
   </table>
   </form>
  </fieldset>

   <?php 
    if (isset($_POST["simpan"])){ 
        $row = $_POST["jumlah"];
        ?>

        <fieldset>
        <legend>input data siswa</legend>
        <table>
        <form action="latihan1pro.php" method="post">
        <?php 
        for ($i=1; $i <= $row; $i++ ){
        ?>
       <tr><tr>
       <th colspan=2> data ke <?php echo $i ?></th>
       <td>Nama</td>
       <td><input type="text" name="nama[]"></td>
       </tr>
       <tr>
       <th colspan=2></th>
       <td>Asal Sekolah</td>
       <td><input type="text" name="asal[]"></td>
       </tr>
       <tr>
       <th colspan=2></th>
       <td>nilai bahasa indonesia</td>
       <td><input type="number" name="indo[]"></td>
       </tr>
       <tr>
       <th colspan=2></th>
       <td>nilai matematika</td>
       <td><input type="number" name="mtk[]"></td>
       </tr>
       <tr>
       <th colspan=2></th>
       <td>nilai bahasa inggris</td>
       <td><input type="number" name="inggris[]"></td>
       </tr>
       <tr>
       <th colspan=2></th>
       <td>nilai Ipa</td>
       <td><input type="number" name="ipa[]"></td>
       </tr>
       </tr>
        <?php
        }
        ?>
        <tr>
        <th>
        </th>
        <td><input type="submit" name="save"></td>
        </tr>
        
        
        </form>
        </table>
        </fieldset>
        <?php
    }
    ?>
    
</body>
</html>