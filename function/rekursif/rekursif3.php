<?php 
function tampilkanAngka(int $Jumlah, int $indek=1){
   

    #panggil diri sendiri selama $indek <= $jumlah
    if ($indek < $Jumlah) {
        tampilkanAngka($Jumlah, $indek + 1);
    }
    echo "perulangan ke $indek <br>";
    
}
tampilkanAngka(20);
?>