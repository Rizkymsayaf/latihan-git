<?php

// mengidentifikasikan sebuah class
class kucing
{

    //membuat property atau attributes
    public $warna;

    //construck  adalah method khusus yang akan dipanggil pertana kali
    public function __construct($a)
    {
        $this->warna = $a;
    }

    // membuat method (behavior / perilaku)
    public function bersuara()
    {
        return "meong";
    }
    public function berburu()
    {
        return "berburu ikan";
    }
}

//membuat objek (inisiasi object)
$kucing1 = new kucing("hitam");
echo "warna kucing 1:" . $kucing1->warna . "<br>";

$kucing2 = new kucing("oren");
echo "warna kucing 2:" . $kucing2->warna . "<br>";
