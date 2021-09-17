<?php
if (isset($_POST["save"])){
  $nama=$_POST["nama"];
  $asal=$_POST["asal"];
  $indo=$_POST["indo"];
  $mtk=$_POST["mtk"];
  $inggris=$_POST["inggris"];
  $ipa=$_POST["ipa"];


?>

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
  <legend>data siswa</legend>
     <table border=1>
     <tr>
     <th>Nomor</th>
     <th>Nama</th>
     <th>Asal Sekolah</th>
     <th>Bahasa Indonesia</th>
     <th>Bahasa inggris</th>
     <th>Matematika</th>
     <th>ilmu pengetahuan alam</th>
     <th>jumlah nilai</th>
     <th>Rata-Rata</th>
     <th>keterangan</th>
     </tr>
     
     <?php 
     $no=1;
     for($i=0; $i <count($nama); $i++ ){ ?>
     <tr>
     <td><?php echo $no++ ?>></td>
     <td><?php echo $nama[$i] ?></td>
     <td><?php echo $asal[$i] ?></td>
     <td><?php echo $indo[$i] ?></td>
     <td><?php echo $mtk[$i] ?></td>
     <td><?php echo $inggris[$i] ?></td>
     <td><?php echo $ipa[$i] ?></td>
     



     <?php 
     $total = $indo[$i] + $mtk[$i] + $inggris[$i] + $ipa[$i];
     $rata= $total / 4;
     if ($total >= 340){
        $keterangan="diterima";
     }
     else{
        $keterangan="tidak diterima";  
     }
     ?>
     
     <td><?php echo  $total; ?></td>
     <td><?php echo $rata; ?></td>
     <td><?php echo  $keterangan;  ?></td>
     </tr>


     <?php }} ?>

</table>


</fieldset>

    
</body>
</html>