<?php 
$nilai = 40;


if ($nilai >= 90) {
    echo "Grade A";
} else if ($nilai >= 80) {
    echo "Grade B";
}else if ($nilai >= 70) {
    echo "Grade C";
}else if ($nilai >= 60) {
    echo "Grade B dan Harus Remedial";
}else {
    echo "Grade E dan Harus remedial, ikut tambahan";
}



?>