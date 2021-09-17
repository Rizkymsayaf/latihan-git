<?php 
// ini adalah array 2 dimensi
$matrik = [
              //kolom
              // 0 1 2
 /*baris 0 */  [2,3,4],      
/*baris  1 */  [7,5,0],
/*baris  2 */  [4,3,8],
];


//indek pertama adalah "baris" indek kedua adalah "kolom"
// cara mengakses isinya 
// echo $matrik[1][0]; // output 7


foreach($matrik as $key => $val)
{
    echo "baris $key : $val[0], $val[1], $val[2]<br>";
}

//baris 1 => 2,3,4
//baris 2 => 7,5,0
//baris 3 => 4,3,8 
?>