<?php
include "../../koneksi.php";

$tampil = mysql_query("SELECT * FROM tmember ORDER BY IdMember DESC LIMIT 10");
		
echo "<h2>Member</h2>
<p>
	<form method=POST action=?module=member>Id Member: 
		<input type=text name=keyword maxlength=30> 
		<input type=submit value=Go name=Go>
	</form>
</p>";
		
if ($_POST[Go]){
		$numrows = mysql_num_rows(mysql_query("SELECT * FROM tmember WHERE NoMember = '$_POST[keyword]'"));
			if ($numrows == 1){
				echo "<p>Hasil Pencarian: <b>Ditemukan</b></p>";
				$i = 1;
				$data = mysql_fetch_array(mysql_query("SELECT * FROM tmember WHERE NoMember = '$_POST[keyword]'"));
				echo "<table border=1 style='font-size: 13px';>
						<tr><th>No</th><th>Id Member</th><th>Nama Member</th><th>Email</th><th>HP</th><th>Aksi</th></tr>";
				echo "	<tr><td>$i</td>
							<td>$data[NoMember]</td>
							<td>$data[NamaMember]</td>
							<td><a href='mailto:$data[Email]'>$data[Email]</a></td>
							<td>$data[CellPhone]</td>
							<td><a href=editmember.php?id=$data[IdMember]>Edit</a> ";
							?>
							<?php
				echo "</tr></table><p><hr></p>";
			}
			else{
				echo "<p>Hasil Pencarian: <b>Tidak Ditemukan</b></p><p><hr></p>";
			}
		}
		
echo "<input type=button value='Registrasi Member' onclick=\"window.location.href='tambahmember.php';\">";
		
echo "<table border=1 style='font-size: 13px';>
		<tr>
			<th>No</th>
			<th>Id Member</th>
			<th>Nama Member</th>
			<th>Email</th>
			<th>HP</th>
			<th>Aksi</th>
		</tr>";
		$no=1;
		while ($r = mysql_fetch_array($tampil)){
			echo "<tr>
					<td>$no</td>
					<td>$r[NoMember]</td>
					<td>$r[NamaMember]</td>
					<td><a href='mailto:$r[Email]'>$r[Email]</a></td>
					<td>$r[CellPhone]</td>
					<td><a href=editmember.php?id=$r[IdMember]>Edit</a> ";?>
						<a href="hapusmember.php?id=<?php echo $r[IdMember];?>" 
						onclick="return confirm(
						'Anda yakin ingin menghapus member <?php echo $r[NamaMember];?>?');"
						>Hapus</a>
							
						<?php
						echo "</tr>";
						$no++;
		}
echo "</table>";
?>
