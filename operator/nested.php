<?php 
$sim = "tidak";
$stnk = "ya";

//pengecekan kelengkapan surat kendaraan
if ($sim == "ya"){
    if ($stnk ==  "ya") {
        echo "selamat menjalankan aktifitas, hati - hati berkendara";
    } else {
        echo "maaf anda  kami tilang!";
    }
} else {
    echo "maaf anda kami TILANG!";
}
?>