<?php
include "../../koneksi.php";
$edit = mysql_query("SELECT * FROM tstatus WHERE IdStatus='$_GET[id]'");
$r	= mysql_fetch_array($edit);

		echo "<h2>Edit Status</h2>
				<form method=POST action=aksi_editstatus.php>
				<input type=hidden name=id value='$r[IdStatus]'>
				<table border=1 style='font-size: 13px';>
				<tr><td>Status Member</td>     <td> : </td><td><input type=text name='nama_status' maxlength=50 value='$r[NamaStatus]'></td></tr>
				<tr><td colspan=2>	<input type=submit value=Simpan>
									<input type=button value=Batal onclick=self.history.back()></td></tr>
				</table></form>";     
?>
