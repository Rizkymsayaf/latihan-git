<?php
class komputer
{
    protected $jenisProcessor = "intel core i7";

    protected function tampilkanJenisProcessor()
    {
        return $this->jenisProcessor;
    }
}

class laptop extends komputer
{
    public function getprocessor()
    {
        return $this->tampilkanJenisProcessor();
    }
}

$laptop = new laptop();
echo $laptop->getprocessor();
