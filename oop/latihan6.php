<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan6</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>kampus</legend>
            <table>
                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td><input type="name" name="nama"></td>
                </tr>
                <tr>
                    <td>nim</td>
                    <td>:</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td>:</td>
                    <td><input type="number" name="nilai" min="0" max="100"></td>
                </tr>
                <tr>
                    <td>dosen</td>
                    <td>:</td>
                    <td><input type="name" name="dosen"></td>
                </tr>

                    <td>matakuliah</td>
                    <td>:</td>
                    <td><select name="matakuliah">
                        <option value="Mtk">mtk</option>
                        <option value="sains">sains</option>
                        <option value="inggris">inggris</option>
                    </select></td>
                <tr>
                <td><input type="submit" name="submit"></td>
                </tr>
            </table>



            <?php
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $nilai = $_POST["nilai"];
    $dosen = $_POST["dosen"];
    $matakuliah = $_POST["matakuliah"];

    class mahasiswa
    {
        public $nama;
        public $nim;
        public $nilai;
    }

    class matakuliah extends mahasiswa
    {
        public $dosen;
        public $matakuliah;
        public $nilai;

        public function nilai($nilai)
        {

            if ($nilai > 85) {
                return "Grade a(LULUS)";
            } elseif ($nilai > 75) {
                return "Grade b(LULUS)";
            } elseif ($nilai > 65) {
                return "Grade c(PERBAIKAN)";
            } elseif ($nilai < 65) {
                return "Grade d(TIDAK LULUS)";
            }

        }
    }

    $hasil = new matakuliah($nama, $nim, $nilai, $dosen, $matakuliah, $nilai);
    echo "nama:" . $hasil->nama = $nama . "<br>";
    echo "nim:" . $hasil->nim = $nim . "<br>";
    echo "nilai:" . $hasil->nilai = $nilai . "<br>";
    echo "dosen:" . $hasil->dosen = $dosen . "<br>";
    echo "mata kuliah:" . $hasil->matakuliah = $matakuliah . "<br>";
    echo "Status:" . $hasil->nilai($nilai) . "<br>";

}
?>
        </fieldset>
    </form>

</body>
</html>
