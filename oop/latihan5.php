<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <legend>kucing</legend>
        <table>
            <tr>
                <td>
                    nama
                </td>
                <td>:</td>
                <td><input type="name" name="nama"></td>
            </tr>
            <tr>
                 <tr>
                <td>warna</td>
                <td>:</td>
                <td><input type="name" name="warna"></td>
            </tr>
                <td>jumlah kaki</td>
                <td>:</td>
                <td><input type="number" name="kaki"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="masukkan">
                </td>
            </tr>
             </table>

            <?php
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $kaki = $_POST["kaki"];
    $warna = $_POST["warna"];

    class kucing
    {
        public $nama;
        public $warna;
        public $kaki;

        public function __construct($a, $b, $c)
        {
            $this->nama = $a;
            $this->warna = $b;
            $this->kaki = $c;

        }

        public function kaki($kaki)
        {
            if ($kaki == 4) {
                return "kucing normal";
            } elseif ($kaki < 4) {
                return "kucing cingket";
            } elseif ($kaki > 4) {
                return "kucing siluman";
            }
        }
    }
    $kucing1 = new kucing($nama, $warna, $kaki);
    echo "nama:" . $kucing1->nama . "<br>";
    echo "warna:" . $kucing1->warna . "<br>";
    echo "kaki:" . $kucing1->kaki($kaki) . "<br>";

}
?>

        </fieldset>

    </form>

</body>
</html>


    <!-- class kucing
    {
        public $nama;
        public $warna;
        public $kaki;
        public function kaki($kaki)
        {
            if ($kaki == 4) {
                return "kucing normal";
            } elseif ($kaki < 4) {
                return "kucing cingket";
            } elseif ($kaki > 4) {
                return "kucing siluman";
            }
        }
    }
    $kucing1 = new kucing($nama, $warna, $kaki);
    echo "nama:" . $kucing1->nama = $nama . "<br>";
    echo "warna:" . $kucing1->warna = $warna . "<br>";
    echo "kaki : " . $kucing1->kaki($kaki) . "<br>";

} -->
