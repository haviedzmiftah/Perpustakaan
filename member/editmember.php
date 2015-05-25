<?php
include "../../koneksi.php";
include "../fungsi/fungsi_combobox.php";
include "../fungsi/library.php";

$edit = mysql_query("SELECT * FROM tmember WHERE IdMember='$_GET[id]'");
$r	= mysql_fetch_array($edit);

if ($r[Jenis] == 'KP'){
			$a = checked;
		}
		elseif ($r[Jenis] == 'KTP'){
			$b = checked;
		}
		elseif ($r[Jenis] == 'SIM'){
			$c = checked;
		}
		elseif ($r[Jenis] == 'Passport'){
			$d = checked;
		}
		else{
			$a = '';
			$b = '';
			$c = '';
			$d = '';
		}
		
echo "<h2>Edit Member</h2>
		<form method=POST action=aksi_editmember.php>
		<input type=hidden name=id value='$r[IdMember]'>
		<table border=1 style='font-size: 13px';>
		<tr>
			<th colspan=3 align=left>Informasi Member</th>
		</tr>
		<tr>
			<td>No Identitas</td>     
			<td> : </td>
			<td><input type=text name='no_identitas' maxlength='30' value='$r[IdIdentitas]'></td>
		</tr>
		<tr>
			<td>Jenis</td>     
			<td> : </td>
			<td><input type=radio name='jenis' value='KP' $a>Kartu Pelajar
				<input type=radio name='jenis' value='KTP' $b>KTP
				<input type=radio name='jenis' value='SIM' $c>SIM
				<input type=radio name='jenis' value='Passport' $d>Passport</td>
			</tr>
		<tr>
			<td>Nama Member</td>     
			<td> : </td>
			<td><input type=text name='nama_member' value='$r[NamaMember]'></td>
		</tr>
		<tr valign=top>
			<td>Alamat</td>     
			<td> : </td>
			<td><textarea name=alamat cols=40 rows=7>$r[Alamat]</textarea></td>
		</tr>
		<tr>
			<td>Email</td>     
			<td> : </td>
			<td><input type=text name='email' value='$r[Email]'></td>
		</tr>
		<tr>
			<td>Tmp Lahir</td>     
			<td> : </td>
			<td><input type=text name='tmp_lahir' value='$r[TmpLahir]'></td>
		</tr>
		<tr>
			<td>Tgl Lahir</td>     
			<td> : </td>
			<td>";
				$get_tgl2=substr("$r[TglLahir]",8,2);
				combotgl(1,31,'tgl_lahir',$get_tgl2);
				$get_bln2=substr("$r[TglLahir]",5,2);
				combonamabln(1,12,'bln_lahir',$get_bln2);
				$get_thn2=substr("$r[TglLahir]",0,4);
				combothn($thn_sekarang-65,$thn_sekarang,'thn_lahir',$get_thn2);
		
echo "	</td></tr>
		<tr>
			<td>Telepon</td>
			<td> : </td><td><input type=text name='telepon' size=20 value='$r[Telepon]'></td>
		</tr>
		<tr>
			<td>HP</td>     
			<td> : </td>
			<td><input type=text name='hp' size=20 value='$r[CellPhone]'></td>
		</tr>
		<tr>
			<td>Status</td>     
			<td> : </td>
			<td><select name=status><option value='+'>---</option>";
				
			$sql = mysql_query("SELECT * FROM tstatus ORDER BY IdStatus ASC");
			while($data = mysql_fetch_object($sql)){
					if($r[Status] == $data->IdStatus){
						echo "<option value='$data->IdStatus' SELECTED>$data->NamaStatus</option>";
					}
					else{
						echo "<option value='$data->IdStatus'>$data->NamaStatus</option>";
					}
				}
				
echo "	</td></tr>
		<tr>
			<td>Note</td>     
			<td> : </td>
			<td><textarea name=note cols=40 rows=7>$r[Note]</textarea></td>
		</tr>
		<tr>
			<td colspan=2><input type=submit value=Update><input type=button value=Batal onclick=self.history.back()></td>
		</tr>
</table>
</form>";     

?>
