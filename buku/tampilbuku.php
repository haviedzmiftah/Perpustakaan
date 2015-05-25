<?php
include "../../koneksi.php";

$tampil = mysql_query("SELECT * FROM tbuku ORDER BY IdBuku DESC LIMIT 10");
	
echo "<h2>Buku</h2>";
echo "<input type=button value='tambah buku' onclick=\"window.location.href='tambahbuku.php';\"> ";
echo " 
	<table border=1 style='font-size:13px';>
	<tr>
		<th>No</th>
		<th>Kd Buku</th>
		<th>Judul</th>
		<th>Penulis</th>
		<th>Penerbit</th>
		<th>ISBN</th>
		<th>Aksi</th>
	</tr>";
	
	$no=1;
	while ($r = mysql_fetch_array($tampil)){
		echo "<tr><td>$no</td>
				<td>$r[KdBuku]</td>
				<td>$r[JudulBuku]</td>
				<td>$r[Penulis]</td>
				<td>$r[Penerbit]</td>
				<td>$r[ISBN]</td>
				<td><a href=editbuku.php?id=$r[IdBuku]>Edit</a> |"; 
?>					<a href="hapusbuku.php?=Id<?php echo $r[IdBuku];?>" 
					onclick="return confirm (
						'apakah anda yakin ingin menghapus buku <?php echo $r[JudulBuku];?> ?'
					);" >Hapus</a> 
	<?php echo "</td>";?>
	<?php
		echo "</tr>";
		$no++;
		}
	echo "</table>";
				
?>
