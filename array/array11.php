<?php
//membuat array
$hobi = [
    "membaca",
    "menulis",
    "ngeblog"
];

$hobi[1].= "coding";

unset($hobi[1]);
$hobi[]="olahraga";

//cetak array dengan perulangan
foreach($hobi as $hobiku ){
    echo $hobiku." <br>";
}