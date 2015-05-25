<?php
include "../../koneksi.php";

$last = mysql_fetch_array(mysql_query("SELECT IdBuku FROM tbuku ORDER BY KdBuku DESC LIMIT 1"));
$lastKd = $last[IdBuku] + 1;

echo "<h2>Tambah Buku</h2>
	<form method=POST action='aksi_tambahbuku.php' enctype='multipart/form-data'>
	<table border=0 style='font-size: 13px';>
	<tr>
		<th colspan=3 align=left>Informasi Buku</th>
	</tr>
	<tr>
		<td>Kode Buku</td>
		<td> : </td>
		<td><input type=text name='kd_buku' maxlength='10' value='$lastKd' disabled>
			<input type=hidden name='kd_buku' maxlength='10' value='$lastKd'></td>
	</tr>
	<tr>
		<td>Kategori</td>     
		<td> : </td>
		<td><select name=kategori><option value='+'>[Pilih Kategori]</option>";
				$sql = mysql_query("SELECT * FROM tkategori ORDER BY NamaKategori ASC");
				while($data = mysql_fetch_array($sql)){
				echo "<option value='$data[IdKategori]'>$data[NamaKategori]</option>";
				}
				
echo "	</td>
	</tr>
	<tr>
		<td>Judul</td>     
		<td> : </td>
		<td><input type=text name='judul' maxlength=100 size=50></td>
	</tr>
	<tr>
		<td>Penulis</td>     
		<td> : </td>
		<td><input type=text name='penulis' maxlength=100 size=50></td>
	</tr>
	<tr>
		<td>Penerbit</td>     <td> : </td>
		<td><input type=text name='penerbit' maxlength=100 size=50></td>
	</tr>
	<tr>
		<td>Asal Buku (Negara)</td>     
		<td> : </td>
		<td><input type=text name='asal_negara' maxlength=100 size=50></td>
	</tr>
	<tr>
		<td>ISBN</td>     
		<td> : </td>
		<td><input type=text name='isbn' maxlength=15 size=50></td>
	</tr>
	<tr>
		<td>Tahun Terbit</td>     
		<td> : </td>
		<td><input type=text name='tahun_terbit' maxlength=4></td>
	</tr>
	<tr><td>Stok</td>     
		<td> : </td>
		<td><input type=text name='stok' maxlength=5></td>
	</tr>
	<tr>
		<td>Letak Rak</td>     
		<td> : </td>
		<td><input type=text name='rak'></td>
	</tr>
	<tr>
		<td>Harga Pergatian Buku</td>     
		<td> : </td>
		<td><input type=text name='harga' maxlength=10></td>
	</tr>
	<tr valign=top>
		<td>Sinopsis</td>     
		<td> : </td>
		<td><textarea name=sinopsis cols=40 rows=7></textarea></td>
	</tr>
	<tr>
		<td>Gambar</td>     
		<td> : </td>
		<td><input type=file name='fupload'></td>
	</tr>				
	<tr>
		<td colspan=2>	<input type=submit value=Simpan>
						<input type=button value=Batal onclick=self.history.back()></td>
	</tr>
	</table></form>";
?>
