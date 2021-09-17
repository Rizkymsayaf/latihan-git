<?php

class komputer
{
    public function liat_spec()
    {
        return "spec komputer:Acer,
        processor intel core i7, Ram 4gb";
    }
}

class laptop extends komputer
{

    public function liat_spec()
    {
        return "spec laptop: asus,
        processor intel core i5, ram 2gb";
    }
    public function lihat_spec_komputer()
    {
        return parent::liat_spec();
    }
}

$gadget_baru = new laptop();
echo $gadget_baru->liat_spec();
echo "<br>";
echo $gadget_baru->lihat_spec_komputer();
