<?php
include "Koneksi_databasebuku.php";

$zkode=$_POST['kode'];
$znama=$_POST['judulnama'];
$zpenulis=$_POST['penulis'];
$ztahun=$_POST['tahun'];
$zpenerbit=$_POST['penerbit'];

$kuery="insert into databasebuku (kode,judulnama,penulis,tahun,penerbit) values ('$zkode','$znama','$zpenulis','$ztahun','$zpenerbit')";

mysql_query($kuery,$koneksi);
$hasil=mysql_query($kuery);
header("location:sqldatabasebuku.php");
?>