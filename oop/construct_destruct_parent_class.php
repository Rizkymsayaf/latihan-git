<?php
class komputer
{

    public function __construct()
    {
        echo "constructor dari class komputer<br>";
    }
    public function __destruct()
    {
        echo "destructor dari class komputer<br>";
    }
}

class laptop extends komputer
{
}
class chromebook extends laptop
{
}
$gadget_baru = new chromebook();
echo "echo belajar OOP PHP<br>";
