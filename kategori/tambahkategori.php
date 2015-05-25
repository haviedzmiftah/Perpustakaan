<?php
include "../../koneksi.php";
echo "
	<h2>Tambah Kategori</h2>
	<form method=POST action='aksi_tambahkategori.php'>
	<table border=1 style='font-size: 13px';>
		<tr>
			<td>Kategori</td>
			<td> : </td>
			<td><input type=text name='nama_kategori' maxlength=100></td>
		</tr>
		<tr>
			<td colspan=2>	<input type=submit value=Simpan>
							<input type=button value=Batal onclick=self.history.back()></td>
		</tr>
	</table>
	</form>";
?>
