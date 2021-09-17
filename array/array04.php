<?php 
$arrnilai= array("Ani" => 80,"Otim" => 90, "Ana" => 75,
"Budi" => 85);


echo "menampilkan isi array dengan forech : <br>";
foreach ($arrnilai as $nama => $nilai) {
    echo "Nilai $nama= $nilai<br>";
}

// reset($arrnilai);
echo "<br> menampilkan isi array dengan while dan list : <br>";
while (list($nama,$nilai) = each($arrnilai)){
    echo "Nilai $nama= $nilai <br>";
}
?>