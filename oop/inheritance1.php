<?php
// buat class komputer
class komputer
{
    public function beli_komputer()
    {
        return "beli komputer baru";
    }
}
//turunkan class komputer ke laptop
class laptop extends komputer
{

    protected function beli_laptop()
    {
        return "beli laptop baru";
    }
}

//turunkan class laptop ke  chromebook
class chromebook extends laptop
{
    protected function beli_chromebook()
    {
        return "beli chromebook baru";
    }

    public function beli_semua()
    {
        $a = $this->beli_komputer();
        $b = $this->beli_laptop();
        $c = $this->beli_chromebook();
        return "$a <br> $b <br> $c";
    }
}

//buat objek dari class laptop
$gadget_baru = new chromebook();

//panggil method objek
echo $gadget_baru->beli_semua();

echo $gadget_baru->beli_komputer();

// echo $gadget_baru->beli_laptop();
//fatal error: call to protected method komputer::beli_komputer()
