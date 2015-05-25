<?php
include "../../koneksi.php";
include "../fungsi/fungsi_combobox.php";
include "../fungsi/library.php";
$data 	= mysql_fetch_array(mysql_query("SELECT NIP FROM tkaryawan ORDER BY NIP DESC"));
		if ($data[NIP] == ''){
			$date	= date('Ym');
			$nip	= $date."0001";
		}
		else{
			$nip	= $data[NIP]+1;
		}
		echo "<h2>Tambah Staff</h2>
				<form method=POST action='aksi_tambahstaff.php'>
				<table border=1 style='font-size: 13px';>
				<tr><th colspan=3 align=left>Informasi Staff</th></tr>
				<tr>
					<td>NIP</td>     
					<td>:</td>
					<td><input type=text name='nip' value='$nip'></td>
				</tr>
				<tr>
					<td>Nama Karyawan</td>     
					<td>:</td>
					<td><input type=text name='nama_karyawan'></td>
				</tr>
				<tr valign=top>
					<td>Alamat</td>     
					<td>:</td>
					<td><textarea name=alamat cols=40 rows=7></textarea></td>
				</tr>
				<tr>
					<td>Tmp Lahir</td>     
					<td>:</td>
					<td><input type=text name='tmp_lahir'></td>
				</tr>
				<tr>
					<td>Tgl Lahir</td>     
					<td>:</td>
					<td>";
						combotgl(1,31,'tgl_lahir',$tgl_skrg);
						combonamabln(1,12,'bln_lahir',$bln_sekarang);
						combothn($thn_sekarang-65,$thn_sekarang,'thn_lahir',$thn_sekarang);
		echo "		</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type=text name='email'></td>
				</tr>
				<tr>
					<td>NPWP</td>
					<td>:</td>
					<td><input type=text name='npwp'></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td>:</td>
					<td><input type=text name='telepon' size=20></td>
				</tr>
				<tr>
					<td>HP</td>
					<td>:</td>
					<td><input type=text name='hp' size=20></td>
				</tr>
				<tr>
					<td>Aktif</td>
					<td>:</td>
					<td><input type=radio name='aktif' value='Y' checked>Y
						<input type=radio name='aktif' value='N'>N</td>
				</tr>
				<tr>
					<td>Note</td>
					<td>:</td>
					<td><textarea name=note cols=40 rows=7></textarea></td>
				</tr>
				<tr>
					<th colspan=3 align=left>Informasi Login</th>
				</tr>
				<tr>
					<td>Username</td>
					<td> : </td>
					<td><input type=text name='username'></td>
				</tr>
				<tr>
					<td>Password</td>
					<td> : </td>
					<td><input type=text name='password'></td>
				</tr>
				<tr>
					<td>Level</td>
					<td> : </td>
					<td><input type=radio name='level' value='admin'>Admin
						<input type=radio name='level' value='staff' checked>Staff</td>
				</tr>
				<tr>
					<td>Blokir</td>
					<td> : </td>
					<td><input type=radio name='blokir' value='Y'>Y
						<input type=radio name='blokir' value='N' checked>N</td>
				</tr>
				<tr>
					<td colspan=2>	<input type=submit value=Simpan>
									<input type=button value=Batal onclick=self.history.back()></td>
				</tr>
				</table></form>";
?>
