<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan6</title>
    <fieldset>
        <legend>gopud</legend>
        <table>
            <tr>
                <td>nama barang</td>
                <td>:</td>
                <td><input type="name" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td>jumlah pesanan</td>
                <td>:</td>
                <td><input type="number" name="pesanan"></td>
            </tr>
            <tr>
                <td>sistem pembayaran</td>
                <td>:</td>
                <td>
                <select name="pembayaran">
                    <option value="cash">cash</option>
                    <option value="m-banking">m-banking</option>
                    <option value="gopay">gopay</option>
                    <option value="pickup">pickup</option>
                </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="masukkann"></td>
            </tr>
        </table>


        <?php
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $pesanan = $_POST["pesanan"];
    $pembayaran = $_POST["pembayaran"];
    class gopud
    {
        public $nama;
        public $harga;
        public $pesanan;
        public $pembayaran;

        public function proses($harga, $pesanan)
        {
            $jumlah = $harga * $pesanan;
            return $jumlah;
        }
        public function pembayaran($pembayaran)
        {
            if ($pembayaran == "cash") {
                return $jumlah;
            } elseif ($pembayaran == "m-banking") {
                $total = ($jumlah * 2.5) / 100;
            } elseif ($pembayaran == "gopay") {
                $total = ($jumlah * 10) / 100;

            }
        }

    }
}

?>
    </fieldset>
</head>
<body>

</body>
</html>
