<?php
class laptop
{
    public $pemilik;

    public function hidupkanlaptop()
    {
        return "hidupkan Laptop";
    }
}

$laptopAnto = new laptop();
$laptopAnto->pemilik = "Anto ";

echo $laptopAnto->pemilik;
echo $laptopAnto->hidupkanlaptop();
