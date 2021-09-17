<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>aritmatika</legend>

            <table>
                <tr>
                    <th>bil 1</th>
                    <td>:</td>
                    <td><input type="number" name="bil1"></td>
                </tr>
                <tr>
                    <th>bil 2</th>
                    <td>:</td>
                    <td><Input type="number" name="bil2"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>

                </table>
        </fieldset>
    </form>

</body>
</html>


<?php
if (isset($_POST["submit"])) {
    $bil1 = $_POST["bil1"];
    $bil2 = $_POST["bil2"];

    class aritmatika
    {
        public $bil1;
        public $bil2;

        public function __construct($a, $b)
        {
            $this->bil1 = $a;
            $this->bil2 = $b;

        }

        public function penjumlahan()
        {
            return ($this->bil1 + $this->bil2);
        }
        public function pengurangan()
        {
            return ($this->bil1 - $this->bil2);
        }
        public function perkalian()
        {
            return ($this->bil1 * $this->bil2);
        }
        public function pembagian()
        {
            return ($this->bil1 / $this->bil2);

        }
        public function modulus()
        {
            return ($this->bil1 % $this->bil2);

        }

    }
    $aritmatika1 = new aritmatika($bil1, $bil2);
    echo "$bil1 + $bil2 :" . $aritmatika1->penjumlahan() . "<br>";
    echo "$bil1 - $bil2 :" . $aritmatika1->pengurangan() . "<br>";
    echo "$bil1 * $bil2 :" . $aritmatika1->perkalian() . "<br>";
    echo "$bil1 / $bil2 :" . $aritmatika1->pembagian() . "<br>";
    echo "$bil1 % $bil2 :" . $aritmatika1->modulus();

}
?>
