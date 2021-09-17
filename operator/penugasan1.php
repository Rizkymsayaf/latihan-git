<?php 
$nilaiakademik = 85;
$atletik = 80;


echo "Nilai Akademik : <b> $nilaiakademik</b><br>";
echo "Nilai Atletik : <b> $atletik</b><br>";

$kelulusan = ($nilaiakademik >= 85 && $atletik >=80) ? "Lulus" :
 "Tidak Lulus";
echo "dinyatakan : <b>$kelulusan</b>";

 
?>