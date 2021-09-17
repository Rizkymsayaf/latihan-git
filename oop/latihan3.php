<?php 
{
    class persegi {
        public $panjang = 8;
        public $lebar = 2;

        function luaspersegi(){
            return ($this->panjang * $this->lebar );
        }
        function kelilingpersegi(){
            return ($this->panjang + $this->lebar)*2;
        }
    }

    $persegi1 = new persegi();
    echo "panjang :".$persegi1->panjang."<br>";
    echo "lebar :".$persegi1->lebar."<br>";
    echo "luas persegi :".$persegi1->luaspersegi()."<br>";
    echo "keliling persegi :". $persegi1->kelilingpersegi();
}

?>