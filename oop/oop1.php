<?php
{
class kucing {
    //membuat property atau fields/ atribut
    public $warna = "coklat";
    public $jumlahKaki = 4;
    public $jenisBulu = "panjang";
    public $makananfavorit = "ikan Pindang";

    //membuat method  (behavior/perilaku)
    public function bersuara() {
        return "meong.... meong .....meong....";
    }
    public function berburu(){
        return "berburu ikan";

     } 
  }
  //membuat object insiasi object
  $kucing1 = new kucing ();
  echo $kucing1-> warna;
  echo "<br>";
  echo $kucing1-> bersuara()."<hr>";

  $kucing2 = new kucing ();
  //set warna kucing
  echo "warna kucing :". $kucing2-> warna="oren";
  echo "<br>";
  echo "sifat kucing :".$kucing2-> bersuara()."<hr>";

  $kucing3 = new kucing ();
  $kucing3-> warna="coklat";
  //set warna kucing
  echo "warna kucing :". $kucing3-> warna;
  echo "<br>";
  echo "sifat kucing :".$kucing3-> bersuara();
}

?>