<?php
class komputer
{
    public $merk = "acer";

    public function lihat_spec()
    {
        return "spec komputer:Acer,
        processor Intel core i7, Ram 4GB";
    }
}

//turunkan class komputer ke laptop
class laptop extends komputer
{
    public $merk = "asus";

    public function lihat_spec()
    {
        return "spec laptop: asus,
        processor intel core i5, ram 2gb";
    }
    public function lihat_spec_komputer()
    {
        return parent::lihat_spec();
    }
    public function lihat_merk_komputer()
    {
        return parent::$merk;
    }
}

$gadget_baru = new laptop();
echo $gadget_baru->lihat_spec();
echo "<br>";

echo $gadget_baru->lihat_spec_komputer();
echo $gadget_baru->lihat_merk_komputer();
