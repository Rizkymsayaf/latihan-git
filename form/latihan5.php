<html>
<head><title>Latihan 5</title></head>
<body>
    <form action="proseslatihan5.php" method="post">
    <h2>Peminjaman Mobil</h2><br>

    <table>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama"></td>
    </tr>

    <tr>
    <td>nik</td>
    <td>:</td>
    <td><input type="number" name="nik"></td>
    </tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="jk" Value="Laki-Laki">Laki-Laki
    <input type="radio" name="jk" value="perempuan">Perempuan</td>
    </tr>

    <tr>
    <td>Agama</td>
    <td>:</td>
    <td><select name="agama">
    <option value="islam">islam</option>
    <option value="kristen">kristen</option>
    <option value="buddha">buddha</option>
    <option value="konghuchu">konghuchu</option>
    <option value="tidak ada">tidak ada</option>
    </select></td>
    </tr>

    <tr>
    <td>Nama Mobil</td>
    <td>:</td>
    <td><input type="text" name="namamobil"></td>
    </tr>

    <tr>
    <td>Jenis Mobil</td>
    <td>:</td>
    <td><select name="jenismobil" >
    <option value="SUV">suv</option>
    <option value="Sedan">sedan</option>
    <option value="Sport">sport</option>
    <option value="Coupe">Coupe</option>
    </select></td>
    </tr>

    <tr>
    <td>Merk</td>
    <td>:</td>
    <td><select name="merek" >
    <option value="Toyota">toyota</option>
    <option value="Daihatsu">Daihatsu</option>
    <option value="Honda">honda</option>
    <option value="Suzuki">suzuki</option>
    </select></td>
    </tr>

    <tr>
    <td>No plat Mobil</td>
    <td>:</td>
    <td><input type="number" name="plat"></td>
    </tr>

    <tr>
    <td>Tanggal Peminjaman</td>
    <td>:</td>
    <td><input type=date name="tp"></td>
    </tr>

    <tr>
    <td>Tanggal Kembali</td>
    <td>:</td>
    <td><input type=date name="tk"></td>
    </tr>

    <tr>
    <td>Penjamin</td>
    <td>:</td>
    <td><select name="penjamin" >
    <option value="ktp">Fotocopy ktp</option>
    <option value="sim">Fotocopy sim</option>
    <option value="kk">Fotocopy kk</option>
    </select></td>
    </tr>

    <tr>
    <td>Supir</td>
    <td>:</td>
    <td><select name="supir" >
    <option value="ya">ya</option>
    <option value="tidak">tidak</option>
    </select></td>
    </tr>

    <tr>
    <td><input type="reset" name="reser" value="reset">
    <input type="submit" name="submit" value="masukkan"></td></tr>


    
    </table>


    </form>
</body>
</html>