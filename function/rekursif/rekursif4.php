<?php 
function tampilkanAngka(int $Jumlah, int $indek=1){
    echo "<strong style='color : green'>
    sebelum memanggil diri sendiri [$indek]
    </strong><br>";
   

    #panggil diri sendiri selama $indek <= $jumlah
    if ($indek < $Jumlah) {
        tampilkanAngka($Jumlah, $indek + 1);
    }else {
        echo "<strong style='color : red'>
        proses terakhir </strong><br>";
    }
    echo "<strong style= 'color:blue' >
    sebelum memanggil diri sendiri [$indek]</strong><br>";
    
}
tampilkanAngka(5);
?>