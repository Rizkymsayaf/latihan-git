<?php 
//membuat fungsi
function hitungUmur($tahun_lahir,$tahun_sekarang){
    $umur = $tahun_sekarang - $tahun_lahir;
    return $umur;
}

function perkenalan ($nama, $salam="Assalamualaikum"){
    echo $salam. ",";
    echo "perkenalkan, nama saya ". $nama. "<br>";
    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2003,2021). " tahun<br>";
    echo "senang berkenalan dengan anda<br>";
}

perkenalan("Rizky");
?>