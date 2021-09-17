<?php 
$grade = 'A';

switch ($grade) {
    case 'A': $ket = "pertahankan";break;
    case 'B': $ket = "Harus Lebih Baik Lagi";break;
    case 'C': $ket = "pertahankan";break;
    case 'D': $ket = "pertahankan";break;
    case 'E': $ket = "pertahankan";break;
  
    default: "Tidak ada keterangan";break;
}
echo  "keterangan : $ket";

?>