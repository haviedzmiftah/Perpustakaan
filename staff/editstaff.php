<?php
include "../../koneksi.php";
include "../fungsi/fungsi_combobox.php";
include "../fungsi/library.php";

$edit = mysql_query("SELECT * FROM tkaryawan, tuser WHERE IdKaryawan='$_GET[id]' AND tkaryawan.NIP=tuser.NIP");
$r	= mysql_fetch_array($edit);

if($r[Level] == 'admin'){
			$a = checked;
		}
		elseif($r[Level] == 'staff'){
			$b = checked;
		}
		else{
			$a = '';
			$b = '';
		}
		
		if ($r[Blokir] == 'Y'){
			$c = checked;
		}
		elseif($r[Blokir] == 'N'){
			$d = checked;
		}
		else{
			$c = '';
			$d = '';
		}
		
		if ($r[Aktif] == 'Y'){
			$e = checked;
		}
		elseif($r[Aktif] == 'N'){
			$f = checked;
		}
		else{
			$e = '';
			$f = '';
		}
echo "<h2>Edit Staff</h2>
		<form method=POST action=aksi_editstaff.php>
		<input type=hidden name=id value='$r[IdKaryawan]'>
		<input type=hidden name=idu value='$r[IdUser]'>
		<table border=1 style='font-size: 13px';>
		<tr><th colspan=3 align=left>Informasi Staff</th></tr>
		<tr><td>NIP</td>     <td> : </td><td><input type=text name='nip' value='$r[NIP]' disabled></td></tr>
		<tr><td>Nama Karyawan</td>     <td> : </td><td><input type=text name='nama_karyawan' value='$r[NamaKaryawan]'></td></tr>
		<tr valign=top><td>Alamat</td>     <td> : </td><td><textarea name=alamat cols=40 rows=7>$r[Alamat]</textarea></td></tr>
		<tr><td>Tmp Lahir</td>     <td> : </td><td><input type=text name='tmp_lahir' value='$r[TmpLahir]'></td></tr>
		<tr><td>Tgl Lahir</td>     <td> : </td><td>";
		$get_tgl2=substr("$r[TglLahir]",7,2);
		combotgl(1,31,'tgl_lahir',$get_tgl2);
		$get_bln2=substr("$r[TglLahir]",5,2);
		combonamabln(1,12,'bln_lahir',$get_bln2);
		$get_thn2=substr("$r[TglLahir]",0,4);
		combothn($thn_sekarang-65,$thn_sekarang,'thn_lahir',$get_thn2);
echo "	</td></tr>
		<tr><td>Email</td>     <td> : </td><td><input type=text name='email' value='$r[Email]'></td></tr>
		<tr><td>NPWP</td>     <td> : </td><td><input type=text name='npwp' value='$r[NPWP]'></td></tr>
		<tr><td>Telepon</td>     <td> : </td><td><input type=text name='telepon' size=20 value='$r[Telepon]'></td></tr>
		<tr><td>HP</td>     <td> : </td><td><input type=text name='hp' size=20 value='$r[CellPhone]'></td></tr>
		<tr><td>Aktif</td>     <td> : </td><td><input type=radio name='aktif' value='Y' $e>Y
												<input type=radio name='aktif' value='N' $f>N</td></tr>
		<tr><td>Note</td>     <td> : </td><td><textarea name=note cols=40 rows=7>$r[Note]</textarea></td></tr>
		<tr><th colspan=3 align=left>Informasi Login</th></tr>
		<tr><td>Username</td>     <td> : </td><td><input type=text name='username' value='$r[Username]' disabled></td></tr>
		<tr><td>Password</td>     <td> : </td><td><input type=text name='password' value='$r[Password]' disabled></td></tr>
		<tr><td>Level</td>     <td> : </td><td><input type=radio name='level' value='admin' $a>Admin
														<input type=radio name='level' value='staff' $b>Staff</td></tr>
				<tr><td>Blokir</td>     <td> : </td><td><input type=radio name='blokir' value='Y' $c>Y
														<input type=radio name='blokir' value='N' $d>N</td></tr>
				<tr><td colspan=2>	<input type=submit value=Simpan>
									<input type=button value=Batal onclick=self.history.back()></td></tr>
				</table></form>";    
?>
