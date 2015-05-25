<?php
include "../../koneksi.php";
include "../fungsi/class_paging.php";

$p      = new pagingKategori;
$batas  = 10;
$posisi = $p->cariPosisi($batas);
$tampil = mysql_query("SELECT * FROM tkategori ORDER BY IdKategori ASC LIMIT $posisi,$batas");

echo "<h2>Kategori</h2>
<input type=button value='Tambah Kategori' onclick=\"window.location.href='tambahkategori.php';\">";
		
echo "<table border=1 style='font-size: 13px';>
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Aksi</th>
		</tr>"; 
		$no = $posisi+1;
		while ($r = mysql_fetch_array($tampil)){
echo 	"<tr>
			<td>$no</td>
			<td>$r[NamaKategori]</td>
			<td><a href=editkategori.php?id=$r[IdKategori]>Edit</a> ";?>
			<a href="hapuskategori.php?id=<?php echo $r[IdKategori];?>" 
			onclick="return confirm(
				'Anda yakin ingin menghapus status <?php echo $r[NamaKategori];?>?'
			);"
			> Hapus</a>
<?php
echo	"</tr>";
			$no++;
    }
echo "</table>";
	
	$jmldata = mysql_num_rows(mysql_query("SELECT * FROM tkategori"));
	$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
	$link_halaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div id='paging'>Hal: $link_halaman </div>";
?>
