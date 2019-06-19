<?php
include "Koneksi_databasebuku.php";

$zkode=$_GET['kode'];

$kuery="DELETE from Databasebuku where kode='$zkode'";
mysql_query($kuery,$koneksi);
header("location:sqldatabasebuku.php");
?>