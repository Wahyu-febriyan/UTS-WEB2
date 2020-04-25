
<?php
$nama_wilayah=$_POST['nama_wilayah'];
$jumlah_positif=$_POST['jumlah_positif'];
$jumlah_dirawat=$_POST['jumlah_dirawat'];
$jumlah_sembuh=$_POST['jumlah_sembuh'];
$jumlah_meninggal=$_POST['jumlah_meninggal'];
$nama_operator=$_POST['nama_operator'];
$nim_mahasiswa=$_POST['nim_mahasiswa'];
 echo "
 <table width=500 border=1 align=center>
<tr>
<tr>
    <p align=center> Data Pemantaun Covid19 wilayah DKI Jakarta </p>
    <p align=center>".$nama_operator."/".$nim_mahasiswa."</p>
</tr>

</tr>
 <tr>
    <th>nama_wilayah</th>
    <th>jumlah_positif</th>  
    <th>jumlah_dirawat</th>
    <th>jumlah_sembuh</th>  
    <th>jumlah_meninggal</th> 
  </tr>

  <tr>
    <td>".$nama_wilayah."</td>
    <td>".$jumlah_positif."</td>
    <td>".$jumlah_dirawat."</td>
    <td>".$jumlah_sembuh."</td>  
    <td>".$jumlah_meninggal."</td>
</table>";
?>
