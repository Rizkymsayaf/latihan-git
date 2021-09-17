<?php 
$uang = 100000;
$minum = 15000;
$makan = 25000;

echo "uang ucup : <b>$uang</b>";
echo "<hr>";

$uang -=$minum;
echo "Jajan Minum = <b>$minum</b>  <br>";
echo "Sisa uang ucup jajan minum = <b>$uang</b>";
echo "<hr>";

$uang -=$makan;
echo "Jajan sosis bakar = <b>$makan</b> <br>";
echo "Sisa Uang Ucup Jajan sosis bakar + minum = <b>$uang</b>";
echo "<hr>";

$sedekah = $uang *0.1;
echo "Sedekah ke musafir 10% dari <b>$uang</b> yaitu sebesar <b>$sedekah</b><br>";
$uang -= $sedekah;
echo "Sisa uang Ucup = <b>$uang</b> <br>";
echo "<hr>";

$nemuUang = $uang * 0.5;
echo "nemu uang dijalan sebesar 50$ dari sis uang ucup <b>$uang</b> yaitu sebesar <b>$nemuUang</b> <br>";
echo "sisa uang ucup sekarang  sekarang = <b>$nemuUang + $uang</b>";
echo "<hr>";

$uang += $nemuUang;
echo "total uang Ucup adalah <b>Rp $uang</b>";

?>