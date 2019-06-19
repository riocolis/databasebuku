<?php
$dhost="127.0.0.1";
$duser="root";
$ddatabase="a111609993";
$dpass="";

$koneksi=mysql_connect($dhost,$duser,$dpass);
if($koneksi)
{
	echo "<h2>Database Buku</h2>";
}
$sdatabase=mysql_select_db($ddatabase,$koneksi);
if($sdatabase)
{
	echo "<h3>Database Masuk</h3>";
}
?>
