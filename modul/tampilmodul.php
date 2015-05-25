<?php
include "../../koneksi.php";
echo "<h2>Modul</h2>
		<input type=button value='Tambah Modul' onclick=\"window.location.href='tambahmodul.php';\">
		<table border=1 style='font-size: 13px';>
		<tr>
			<th>no</th>
			<th>nama modul</th>
			<th>link</th>
			<th>aktif</th>
			<th>publish</th>
			<th>status</th>
			<th>aksi</th>
		</tr>";
		
$tampil=mysql_query("SELECT * FROM tmodul ORDER BY urutan");

while ($r=mysql_fetch_array($tampil)){
	echo "<tr>
			<td>$r[urutan]</td>
			<td>$r[ModuleName]</td>
            <td><a href=$r[link]>$r[link]</a></td>
            <td align=center>$r[aktif]</td>
			<td align=center>$r[publish]</td>
			<td align=center>$r[status]</td>
            <td><a href=editmodul.php?id=$r[IdModule]>Edit</a> | ";
?>				<a href="hapus_modul.php?id=<?php echo $r[IdModule];?>" onclick="return confirm('Anda yakin ingin menghapus modul <?php echo $r[ModuleName];?>?');">Hapus</a>
<?php echo "</td></tr>";
    }
    echo "</table>";
?>
