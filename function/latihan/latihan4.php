<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>
    <form action="" method="post">
    <fieldset>
        <legend>formulir inputan</legend>
        <table>
            <tr>
                <td>masukkan bilangan</td>
                <td>:</td>
                <td><input type="number" name="bilangan"></td>
            </tr>
            <tr>
                <td>masukkan pangkat</td>
                <td>:</td>
                <td><input type="number" name="pangkat"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="masukkan"></td>
            </tr>

        </table>



        <?php
        if (isset($_POST["submit"])){
            $bil=$_POST["bilangan"];
            $pangkat= $_POST["pangkat"];
            
            function pangkat($bil, $pangkat){
                if ($pangkat > 1){
                    return $bil * pangkat($bil, $pangkat - 1);
                }else {
                    return $bil;
                }
            }
            function pangkatnya($bil, $pangkat){
                for ($i = 1; $i <= $pangkat; $i++){
                    echo $bil;
                    if ($i < $pangkat){
                        echo "x";
                    }
                }
            }

            echo "Hasil dari perkalian<br>";
            echo pangkatnya($bil,$pangkat);
            $hasil = pangkat($bil,$pangkat);
            echo "=". $hasil;
        }
        
        
        ?>

        </fieldset>


    </form>
    
</body>
</html>

<!-- 
function inputan($a,$b){
             

             $data = "<br>bilangan : $a <br>";
             $data .= "pangkat : $b <br>";
             $data .= $x pow($a,$b);
       
             return $data;

             }
       
            echo inputan($a,$b); -->