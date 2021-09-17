<?php 
$day = date ("D");
switch ($day) {
    case 'sun': $hari = "minggu";
        break;
    case 'Mon' : $hari = "senin"; break;
    case 'Tue' : $hari = "selasa"; break;
    case 'Wed' : $hari = "Rabu"; break;
    case 'Thu' : $hari = "Kamis"; break;
    case 'Fri' : $hari = "jumat"; break;
    case 'Sat' : $hari = "sabtu"; break;
    default    : $hari = "Kiamat"; break;
    
}
echo " hari ini hari <b> $hari</b>";
?>