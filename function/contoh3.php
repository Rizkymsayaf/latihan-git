<?php
function sapapengunjung($nama, $jumlahkunjungan){
    echo "<h1>Halo {$nama}, Selamat Datang</h1>";
    echo "<p>Terima Kasih telah berkunjung  ke situs kami.</p>";

    if ($jumlahkunjungan > 10){
        echo "<p>Kami memiliki hadiah ebook gratis untuk anda</p>";
    }

}
sapapengunjung("Nurul Huda",20);
?>