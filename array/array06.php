<?php
$arrnilai= array ("Ani" => 80, "Otim" => 90, "Ana" => 75,
"Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

sort ($arrnilai);
reset ($arrnilai);
echo "<b> arraysetelah pengurutan sort ()</b>";
echo "<pre>";
print_r ($arrnilai);
echo "</pre>";

rsort($arrnilai);
reset ($arrnilai);
echo "<b> arraysetelah pengurutan rsort ()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre";

?>