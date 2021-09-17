<?php 
if (isset($_POST["submit"])){
    $pilih = $_POST["luas"];    
        if($pilih == 1) {
            header("location:segitigalat2.php");
        } else if ($pilih == 2) {
            header("location:lingkaranlat2.php");
        }else if ($pilih == 3 ) {
            header("location:persegilat2.php");
        }else if ($pilih == 4 ) {
            header("location:persegipanjanglat2.php");
        }
    }

?>