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
        parent::__construct();
        echo "constructor dari class laptop<br>";
    }
    public function __destruct()
    {
        echo "destructor dari class laptop<br>";
        parent::__destruct();
    }

}
class chromebook extends laptop
{
    public function __construct()
    {
        parent::__construct();
        echo "constructor dari class chromebook<br>";
    }
    public function __destruct()
    {
        echo "destructor dari class chromebook<br>";
        parent::__destruct();
    }
}
$gadget_baru = new chromebook();
echo "belajar OOP PHP<br>";
