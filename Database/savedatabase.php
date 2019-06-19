<?php
	include"Koneksi_databasebuku.php";

	$zkode=$_POST['kode'];
	$znama=$_POST['judulnama'];
	$zpenulis=$_POST['penulis'];
	$ztahun=$_POST['tahun'];
	$zpenerbit=$_POST['penerbit'];

	$ubah=mysql_query("UPDATE databasebuku SET judulnama='$znama',penulis='$zpenulis',tahun='$ztahun',penerbit='$zpenerbit' where kode='$zkode'") or die(mysql_error());
	if($ubah)
	{
		echo 'data berhasil disimpan !';
	}
	else
	{
		echo 'gagal menyimpan data !';
	}
header("location:sqldatabasebuku.php");
?>