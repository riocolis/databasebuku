<?php
include ("Koneksi_databasebuku.php");

$kuery="select * from databasebuku";
$hasil=mysql_query($kuery,$koneksi);
echo "<h2>Laporan Update Buku</h2>";
?>
<table border="1" width="100%" align="center" cellpadding="0" cellspacing="0">
	<tr>
        <td>Kode</td>
        <td>Nama/Judul</td>
        <td>Penulis</td>
        <td>Tahun Penerbit</td>
        <td>Penerbit</td>
        <td>Aksi</td>
    </tr>
<?php
$nomer=0;
while($ganti=mysql_fetch_array($hasil))
{
$nomer++;
?>
<tr><td><?php echo $ganti[0];?></td>
	<td><?php echo $ganti[1];?></td>
	<td><?php echo $ganti[2];?></td>
	<td><?php echo $ganti[3];?></td>
	<td><?php echo $ganti[4];?></td>
    <td><?php echo "<a href=formbukukoneksi.php?kode=$ganti[0]>Edit</a>";
			  echo "<a href=deletedatabase.php?kode=$ganti[0]>--Delete</a>";?>
		</td></tr>
<?php
}
?>
</table>