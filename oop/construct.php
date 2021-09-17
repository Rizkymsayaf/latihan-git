<?php
//membuat class laptop
class laptop
{

    private $pemilik;
    private $merk;

    public function __construct($pemilik, $merk)
    {
        $this->pemilik = $pemilik;
        $this->merk = $merk;
    }
    public function hidupkan_laptop()
    {
        return "hidupkan laptop $this->merk punya  $this->pemilik";
    }
}

//buat objek dari kelas laptop (instansiasi)
$laptop_andi = new laptop("andi", "lenovo");
echo $laptop_andi->hidupkan_laptop();
echo "<br />";

$laptop_anto = new laptop("anto", "acer");
echo $laptop_anto->hidupkan_laptop();
