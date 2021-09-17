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
}

$gadget_baru = new laptop();
echo $gadget_baru->liat_spec();
