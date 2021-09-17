<?php
//membuat class laptop
class laptop
{

    private $pemilik = "andi";
    private $merk = "Lenovo";

    public function __construct()
    {
        echo "ini berasal dari constructor Laptop";
    }
    public function hidupkan_laptop()
    {
        return "hidupkan laptop $this->merk punya  $this->pemilik";
    }
    public function __destruct()
    {
        echo "ini berasal dari destructor Laptop";
    }
}

//buat objek dari kelas laptop (instansiasi)
$laptop_andi = new laptop();

echo "<br>";
echo $laptop_andi->hidupkan_laptop();
echo "<br />";

//hapus objek $laptop_andi
unset($laptop_andi);

echo "<br>";
echo "Objek telah dihancurkan";
