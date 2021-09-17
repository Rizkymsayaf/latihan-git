<?php
class komputer
{
    private $jenisprocessor = "intel core I7";

    public function tampilkanJenisProcessor()
    {
        return $this->jenisprocessor;
    }
}

class laptop extends komputer
{
    public function getprocessor()
    {
        return $this->jenisprocessor;
    }
}
$komputer = new komputer();
$laptop = new laptop();

echo $komputer->tampilkanJenisProcessor();
echo $laptop->getprocessor();
