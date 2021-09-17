<?php 
//json object
$datajson= '{
    "nama" : "Ujang",
    "domisili": "bandung",
    "usia" :23,
    "wni":true,
    "hobi":[
         "futsal","main game", "mainkelereng"
    ]
 }';


 $data= json_decode($datajson);
 echo "Nama :" , $data->nama , "<br>";
 echo "Usia: {$data->usia} <br>";
 echo "WNI :", ($data->wni ==1 ? "indo" : "bukan"). "<br>";
 echo "Domisili: {$data->domisili} <br>";
 echo "Hobi:" . implode(",", $data->hobi);
?>