<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan7</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>lamaran pekerjaaan</legend>
            <table>

                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="name" name="nama"></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td><input type="number" name="umur"></td>
                </tr>
                 <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type="name" name="hobi"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="name" name="alamat"></td>
                </tr>
                <tr>
               <tr>
                   <td>gaji </td>
                   <td>:</td>
                   <td><input type="number" name="gaji"></td>
               </tr>
               <tr>
                   <td><input type="submit" name="submit" value="masukkan"></td>
               </tr>
            </table>


        <?php
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $hobi = $_POST["hobi"];
    $alamat = $_POST["alamat"];
    $gaji = $_POST["gaji"];

    class daftar1
    {
        public $nama;
        public $umur;
        public $hobi;
        public $alamat;

    }
    class daftar2 extends daftar1
    {
        public $kemampuan;
        public $gaji;

        public function gaji($gaji)
        {
            if ($gaji > 10000000) {
                return "Anda Kami Terima";
            } elseif ($gaji > 20000000) {
                return "anda kami tolak";
            } elseif ($gaji < 4000000) {
                return "terlalu sedikit";
            }

        }

    }

    $hasil = new daftar2($nama, $umur, $hobi, $alamat, $gaji);
    echo "nama:" . $hasil->nama = $nama . "<br>";
    echo "umur:" . $hasil->umur = $umur . "<br>";
    echo "hobi:" . $hasil->hobi = $hobi . "<br>";
    echo "alamat:" . $hasil->alamat = $alamat . "<br>";
    echo "keterangan :" . $hasil->gaji($gaji);

}
?>
        </fieldset>
    </form>

</body>
</html>
