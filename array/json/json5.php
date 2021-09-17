<?php
// LOOPONG PHP JSON


$dataMhs = [
    ["nama"=> "mahmud", "domisili"=>"Bandung"],
    ["nama"=> "Udin", "domisili"=>"Tasik"],
    ["nama"=> "Encep", "domisili"=>"majalaya"],
    ["nama"=> "Entis", "domisili"=>"Ciamis"]
    ];

    $data= json_encode($dataMhs);
        echo $data
        ;
    

?>