<?php 
function tampilkanAngka(int $Jumlah, int $indek=1){
    echo "perulangan ke $indek <br>";

    #panggil diri sendiri selama $indek <= $jumlah
    if ($indek < $Jumlah) {
        tampilkanAngka($Jumlah, $indek + 1);
    }
}
tampilkanAngka(20);
?>