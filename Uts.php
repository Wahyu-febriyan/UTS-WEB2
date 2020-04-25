<html>
<head>
 <title>FORM UPDATE DATA COVID19</title>
</head>

<body>
<form action="db.php" method="post" name="form1">
  <table align="center" style="width: 50%">
<tr>
      <td colspan="4"><div align="center">
<strong>FORM UPDATE DATA COVID19</strong></div>
</td>
    </tr>
 <tr>
        <td>Nama Wilayah</td>
        <td>:</td>
        <td>
        <select name="nama wilayah">
            <option value="DKI Jakarta">DKI Jakarta</option>
            <option value="Jawa barat">Jawa barat</option>
            <option value="Bante">Bante</option>
            <option value="Jawa tengah">Jawa tengah</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>jumlah positif</td>
        <td>:</td>
        <td><input type="text"  name="jumlah_positif" size=30></td>
    </tr>
    <tr>
        <td>jumlah dirawat</td>
        <td>:</td>
        <td><input type="text"  name="jumlah_dirawat" size=30></td>
    </tr>
    <tr>
        <td>jumlah sembuh</td>
        <td>:</td>
        <td><input type="text"  name="jumlah_sembuh" size=30></td>
    </tr>
    <tr>
        <td>jumlah meninggal</td>
        <td>:</td>
        <td><input type="text"  name="jumlah_meninggal" size=30></td>
    </tr>
    <tr>
        <td>nama operator</td>
        <td>:</td>
        <td><input type="text"  name="nama_operator" size=30></td>
    </tr>
    <tr>
        <td>Nim mahasiswa</td>
        <td>:</td>
        <td><input type="text"  name="nim_mahasiswa" size=30></td>
    </tr>
     <tr>
        <td><input type="submit" value="kirim"/></td>
    </tr>
</table>
</form>
</body>
</html>
