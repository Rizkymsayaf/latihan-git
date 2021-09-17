<?php 
// optimal parameter / default parameter

function pertambahan($bil, $bi2=2)
{
    return $bil + $bi2;
}

echo pertambahan(10,10). "<br>"; //20
echo pertambahan(10). "<br>"; //12
echo pertambahan(8). "<br>"; //10
?>