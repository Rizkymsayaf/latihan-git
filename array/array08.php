<?php 
$arrnilai= array ("Ani" => 80, "Otim" => 90, "Ana" => 75,
"Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

ksort ($arrnilai);
reset ($arrnilai);
echo "<b> arraysetelah pengurutan ksort ()</b>";
echo "<pre>";
print_r ($arrnilai);
echo "</pre>";

krsort ($arrnilai);
reset ($arrnilai);
echo "<b> arraysetelah pengurutan krsort ()</b>";
echo "<pre>";
print_r ($arrnilai);
echo "</pre>";
?>