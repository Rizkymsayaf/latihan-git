<?php
$username = "rizky";
$email = "rizky@gmail.com";
$pass = "123";


echo "username/email : <b>$username</b><br>";
echo "password : <b>$pass</b> <br>";
echo "Cek Login :".
(($username == "rizky" || $email == "rizky@gmail.com") && $pass == "123");
?>