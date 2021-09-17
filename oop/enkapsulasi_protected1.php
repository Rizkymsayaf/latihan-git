<?php
class laptop
{
    public $procie = "core i7";
    protected $vga = "GTX 1050";

    public function gaming()
    {
        return "wush wush ";
    }
}

class ROG extends laptop
{
    public $procie = "core i9 ";
}

$asus = new ROG();
echo $asus->procie;
if (property_exists($asus, "vga")) {
    echo "<br>Laptop ini mempunyai Vga<br>";
}
echo $asus->gaming();
