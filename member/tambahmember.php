<?php 
include "../../koneksi.php";
include "../fungsi/fungsi_combobox.php";
include "../fungsi/library.php";

echo "<h2>Tambah Member</h2>
<form method=POST action='aksi_tambahmember.php'>
<table border=1 style='font-size: 13px';>
	<tr>
		<th colspan=3 align=left>Informasi Member</th>
	</tr>
	<tr>
		<td>No Identitas</td>     
		<td> : </td>
		<td><input type=text name='no_identitas' maxlength='30'></td>
	</tr>
	<tr>
		<td>Jenis</td>     
		<td> : </td><td>	
		<input type=radio name='jenis' value='KP'>Kartu Pelajar
		<input type=radio name='jenis' value='KTP'>KTP
		<input type=radio name='jenis' value='SIM'>SIM
		<input type=radio name='jenis' value='Passport'>Passport</td></tr>
	<tr>
		<td>Nama Member</td>
		<td> : </td>
		<td><input type=text name='nama_member'></td>
	</tr>
	<tr valign=top>
		<td>Alamat</td>
		<td> : </td>
		<td><textarea name=alamat cols=40 rows=7></textarea></td>
	</tr>
	<tr>
		<td>Email</td>
		<td> : </td>
		<td><input type=text name='email'></td>
	</tr>
	<tr>
		<td>Tmp Lahir</td>
		<td> : </td>
		<td><input type=text name='tmp_lahir'></td>
	</tr>
	<tr>
		<td>Tgl Lahir</td>
		<td> : </td>
		<td>";
				combotgl(1,31,'tgl_lahir',$tgl_skrg);
				combonamabln(1,12,'bln_lahir',$bln_sekarang);
				combothn($thn_sekarang-65,$thn_sekarang,'thn_lahir',$thn_sekarang);
		echo "
		</td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td> : </td>
		<td><input type=text name='telepon' size=20></td>
	</tr>
	<tr>
		<td>HP</td>
		<td> : </td>
		<td><input type=text name='hp' size=20></td>
	</tr>
	<tr>
		<td>Status</td>
		<td> : </td>
		<td><select name=status><option value='+'>---</option>";
				
		$sql = mysql_query("SELECT * FROM tstatus ORDER BY IdStatus ASC");
		while($data = mysql_fetch_object($sql)){
		echo "<option value='$data->IdStatus'>$data->NamaStatus</option>";
		}
		echo " </td>
	</tr>
	<tr>
		<td>Note</td>
		<td> : </td>
		<td><textarea name=note cols=40 rows=7></textarea></td>
	</tr>
	<tr>
		<td colspan=2>	<input type=submit value=Simpan>
						<input type=button value=Batal onclick=self.history.back()></td></tr>
</table></form>";
?>
