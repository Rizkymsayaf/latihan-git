<?php
{
    class komputer {
        public $pemilik ="rizky";
        public $merk ="apple";
        public $ukuran = 24;

        public function nyalakan(){
            return "hidup";
        }
        public function matikan(){
            return "matikan";
        }
    }
    $komputer1 = new komputer();
    echo "pemilik :".$komputer1->pemilik."<br>";
    echo "merk :". $komputer1->merk."<br>";
    echo "ukuran layar :". $komputer1-> ukuran."<br>";
    echo $komputer1-> nyalakan()."<hr>";

    $komputer2 = new komputer();
    echo "pemillik :". $komputer2->pemilik="rico<br>";
    echo "merk :". $komputer2->merk="samsung<br>";
    echo "ukuran layar :".$komputer2->ukuran=32;
    echo "<br>";
    echo $komputer2->matikan()."<hr>";

    $komputer3 = new komputer();
    echo "pemillik :". $komputer3->pemilik="nurahman<br>";
    echo "merk :". $komputer3->merk="acer<br>";
    echo "ukuran layar :".$komputer3->ukuran=26;
    echo "<br>";
    echo $komputer3->matikan()."<hr>";

    $komputer4 = new komputer();
    echo "pemillik :". $komputer4->pemilik="tarno<br>";
    echo "merk :". $komputer4->merk="hp<br>";
    echo "ukuran layar :".$komputer4->ukuran=34;
    echo "<br>";
    echo $komputer4->nyalakan()."<hr>";

    $komputer5 = new komputer();
    echo "pemillik :". $komputer5->pemilik="sasha<br>";
    echo "merk :". $komputer5->merk="samsung<br>";
    echo "ukuran layar :".$komputer4->ukuran=42;
    echo "<br>";
    echo $komputer5->nyalakan()."<hr>";
}

?>