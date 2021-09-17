<?php
class perpustakaan
{
    public $nama = "Rizky Muhammad Say Afif";
    protected $email = "Rizkymsayafif@gmail.com";
    private $pin = "223455";

    public function aksesmasuk()
    {
        // $a = $this->email;
        // $b = $this->pin;
        if ($this->email == "Rizkymsayafif@gmail.com" && $this->pin == "223455") {
            $c = "Login Berhasil";
        }
        return $c;
    }
    public function getinfo()
    {
        $a = $this->email;
        $b = $this->nama;
        $c = "alamat email : " . $a . "|| nama :" . $b;
        return $c;
    }
}
$perpus1 = new perpustakaan();
echo "Nama : $perpus1->nama<br>";
echo "info masuk :" . $perpus1->getinfo() . "<br>";
echo "akses masuk :" . $perpus1->aksesmasuk();
