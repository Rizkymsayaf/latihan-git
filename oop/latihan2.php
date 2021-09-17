<?php 
{
    class segitiga {
        public $alas ;
        public $tinggi;
        public $a,$b,$c;

        public function luassegitiga(){
            return ($this->alas * $this->tinggi)/2;

        }
        public function kelilingSegitiga(){
            return ($this->a + $this->b+$this->c);
        }

    }

    $segitiga1 = new segitiga();
    $segitiga1->alas=10;
    $segitiga1->tinggi=15;
    $segitiga1->a=10;
    $segitiga1->b=15;
    $segitiga1->c=15;


    echo "alas segitiga :". $segitiga1->alas."<br>";
    echo "tinggi segitiga :".$segitiga1->tinggi."<br>";
    echo "sisi1 :". $segitiga1->a."<br>";
    echo "sisi2 :". $segitiga1->b."<br>";
    echo "sisi2 :". $segitiga1->c."<br>";
    echo "Luas segitiga :".$segitiga1->luassegitiga()."<br>";
    echo "kelilng segitiga :".$segitiga1->kelilingSegitiga();
}
?>