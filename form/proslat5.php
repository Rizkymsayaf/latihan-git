<?php
if (isset($_POST["save"])){
    $pembayaran=$_POST["pembayaran"];
    $total=$_POST["total"];
    
    if ($pembayaran >= $total){
        $ket= "terimakasih";
    }else{
    $ket= "anda kami blacklist"; 
    }
    $kembalian= $total - $pembayaran;
    echo "kembalian $kembalian";
}

?>