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
    public function __construct()
    {
        echo "constructor dari class laptop<br>";
    }
    public function __destruct()
    {
        echo "destructor dari class laptop<br>";
    }

}
class chromebook extends laptop
{
    public function __construct()
    {
        echo "constructor dari class chromebook<br>";
    }
    public function __destruct()
    {
        echo "destructor dari class chromebook<br>";
    }
}
$gadget_baru = new chromebook();
echo "echo belajar OOP PHP<br>";
