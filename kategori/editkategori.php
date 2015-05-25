<?php 
include "../../koneksi.php";

$edit = mysql_query("SELECT * FROM tkategori WHERE IdKategori='$_GET[id]'");
$r	= mysql_fetch_array($edit);

echo "<h2>Edit Kategori</h2>
			<form method=POST action=aksi_editkategori.php>
			<input type=hidden name=id value='$r[IdKategori]'>
			<table border=1 style='font-size: 13px';>
			<tr><td>Kategori</td>     <td> : </td><td><input type=text name='nama_kategori' maxlength=100 value='$r[NamaKategori]'></td></tr>
			<tr><td colspan=2>	<input type=submit value=Update>
								<input type=button value=Batal onclick=self.history.back()></td></tr>
			</table></form>";     
?>
