<?php 
if (isset($_POST["pilih"])){
    echo "Band Favorit anda Adalah : <br>";
    if (isset($_POST["band01"]) ){
        echo "+ " . $_POST["band01"] . "<br>";
    }
    if (isset($_POST["band02"])){
        echo "+ " .  $_POST["band02"] . "<br>";
    }
    if (isset($_POST["band03"])){
        echo "+ " .  $_POST["band03"] . "<br>";
    }
    if (isset($_POST["band02"])){
        echo "+ " .  $_POST["band04"] . "<br>";
    }
}
?>