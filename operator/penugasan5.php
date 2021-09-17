<?php 
$totalbelanja = 275000;
$member ="ya";
$disc = 0;
$totalharga = 0;


if ($member == "ya") {
    if ($totalbelanja >= 250000) {
        $disc = 0.1 * $totalbelanja;
    } elseif ($totalbelanja >= 100000) {
        $disc = 0.05 * $totalbelanja;
    }
} else {
    if ($totalbelanja >= 100000) {
        $disc = 0.025 * $totalbelanja;
    }
}
$totalharga = $totalbelanja - $disc;
echo "kartu member = $member  <br>";
echo "Total Belanja = $totalbelanja <br>";
echo "Diskon = $disc <br>";
echo "Total Yang Harus dibayar = $totalharga";
?>