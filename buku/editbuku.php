<?php
include "../../koneksi.php";

$edit = mysql_query("SELECT * FROM tbuku WHERE IdBuku='$_GET[id]'");
$r	= mysql_fetch_array($edit);

if ($r[Gambar] == ''){
			$gambar = "<img src='gambar/no.jpg' height=130>";
		}
		else{
			$gambar = "<img src='gambar/$r[Gambar]' height=130>";
		}
		
		echo "<h2>Edit Buku</h2>
				<form method=POST action=aksi_editbuku.php enctype='multipart/form-data'>
				<input type=hidden name=id value='$r[IdBuku]'>
				<table border=1 style='font-size: 13px';>
				<tr><th colspan=3 align=left>Informasi Buku</th></tr>
				<tr><td>Kode Buku</td>     <td> : </td><td><input type=text name='kd_buku' maxlength='10' value='$r[KdBuku]' disabled><input type=hidden name='kd_buku' maxlength='10' value='$r[IdBuku]'></td></tr>
				<tr><td>Kategori</td>     <td> : </td><td><select name=kategori><option value='+'>[Pilih Kategori]</option>";
				$sql = mysql_query("SELECT * FROM tkategori ORDER BY NamaKategori ASC");
				while($data = mysql_fetch_array($sql)){
					if($data[IdKategori] == $r[IdKategori]){
						echo "<option value='$data[IdKategori]' SELECTED>$data[NamaKategori]</option>";
					}
					else{
						echo "<option value='$data[IdKategori]'>$data[NamaKategori]</option>";
					}
				}
				
		echo "	</td></tr>
				<tr><td>Judul</td>     <td> : </td><td><input type=text name='judul' maxlength=100 size=50 value='$r[JudulBuku]'></td></tr>
				<tr><td>Penulis</td>     <td> : </td><td><input type=text name='penulis' maxlength=100 size=50 value='$r[Penulis]'></td></tr>
				<tr><td>Penerbit</td>     <td> : </td><td><input type=text name='penerbit' maxlength=100 size=50 value='$r[Penerbit]'></td></tr>
				<tr><td>Asal Buku (Negara)</td>     <td> : </td><td><input type=text name='asal_negara' maxlength=100 size=50 value='$r[AsalNegara]'></td></tr>
				<tr><td>ISBN</td>     <td> : </td><td><input type=text name='isbn' maxlength=15 size=50 value='$r[ISBN]'></td></tr>
				<tr><td>Tahun Terbit</td>     <td> : </td><td><input type=text name='tahun_terbit' maxlength=4 value='$r[TahunTerbit]'></td></tr>
				<tr><td>Stok</td>     <td> : </td><td><input type=text name='stok' maxlength=5 value='$r[Stok]'></td></tr>
				<tr><td>Harga Pergantian Buku</td>     <td> : </td><td><input type=text name='harga' maxlength=10 value='$r[Harga]'></td></tr>
				<tr valign=top><td>Sinopsis</td>     <td> : </td><td><textarea name=sinopsis cols=40 rows=7>$r[Sinopsis]</textarea></td></tr>
				<tr><td>Gambar Awal</td>     <td> : </td><td>$gambar</td></tr>
				<tr><td>Gambar</td>     <td> : </td><td><input type=file name='fupload'></td></tr>				
				<tr><td colspan=2>	<input type=submit value=Simpan>
									<input type=button value=Batal onclick=self.history.back()></td></tr>
				</table></form>";     
?>
