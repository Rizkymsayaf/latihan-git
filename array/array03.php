<?php 
$arrwarna = array ("Blue", "Black", "Red", "Yellow", "Green" );


echo "menampilkan isi Array dengan for : <br>";
for ($i=0; $i<count($arrwarna); $i++) {
    echo "DO YOU LIKE <font color=$arrwarna[$i]>". $arrwarna[$i].
    "</font> ?<br>";
}

echo "<br> Menampilkan isi array dengan forrech : <br>";
foreach($arrwarna as $warna){
    echo "DO YOU LIKE <font color=$warna>". $warna.
    "</font> ?<br>";

}
?>