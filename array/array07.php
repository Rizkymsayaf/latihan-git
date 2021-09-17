<?php 
$arrnilai= array ("Ani" => 80, "Otim" => 90, "Ana" => 75,
"Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

asort ($arrnilai);
reset ($arrnilai);
echo "<b> arraysetelah pengurutan asort ()</b>";
echo "<pre>";
print_r ($arrnilai);
echo "</pre>";

arsort ($arrnilai);
reset ($arrnilai);
echo "<b> arraysetelah pengurutan arsort ()</b>";
echo "<pre>";
print_r ($arrnilai);
echo "</pre>";
?>