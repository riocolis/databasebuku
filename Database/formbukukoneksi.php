<?php
include "Koneksi_databasebuku.php";

$zkode=$_GET['kode'];

$cari="select * from databasebuku where kode = '$zkode'";
$hasil=mysql_query($cari,$koneksi);
/*$kor=mysql_fetch_array($hasil);*/
while($kor=mysql_fetch_array($hasil))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT FORM BUKU</title>
</head>
<style>
table{	background-color:#FF0000;
		font-family:"Georgia", Times New Roman, Times, serif;
		font-size:12px;
		color:#FFFFFF;
		border-radius:0px;
		margin-top:90px;}
td{padding:10px}
h2{letter-spacing:5px;
	background-color:#0000FF;}
.gambar{margin-top:100px;
		margin-left:770px;
		position:absolute;}
.tombol{font-size:24px;}	
</style>
<body bgcolor="#009966">
<form action="savedatabase.php" method="post" name="">
<table width="600" align="center">
<tr>
	<td colspan="3" align="center"><h2>ENTRY PENDAPATAN BUKU </h2></td>
</tr>
<tr>
	<td colspan="3" align="center"><h3>A11.2016.09993</h3></td>
</tr>
<tr> 
	<td>KODE </td><td>:</td>
    <td>
		<input type="text" name="kode" size="20" value="<?php echo $kor[0];?>"/>    
    </td>
    </td>
</tr>
<tr>
	<td>Nama/Judul</td><td>:</td>
    <td>
    	<input type="text" name="judulnama" size="20" value="<?php echo $kor[1];?>"/>
    </td>

</tr>
<tr>
	<td>Penulis</td><td>:</td>
    <td>
    	<input type="text" name="penulis" size="20" value="<?php echo $kor[2];?>"/>    
    </td>
</tr>
<tr>
	<td>Tahun Terbit</td><td>:</td>
    <td>
    	<input type="text" name="tahun" size="20" value="<?php echo $kor[3];?>"/>
    </td>
</tr>
<tr>
	<td>Penerbit</td><td>:</td>
    <td>
    	<input type="text" name="penerbit" size="20" value="<?php echo $kor[4];?>"/>    
    </td>
</tr>
	<td colspan="3" align="center" class="tombol">
    <input type="submit" value="Simpan"/>
    <input type="reset" value="cancel"/></td>
<tr>
</table>
</form>
</body>
</html>
<?php
}
?>
