<?php
include "../../koneksi.php";

$tampil = mysql_query("SELECT * FROM tkaryawan, tuser WHERE tkaryawan.NIP=tuser.NIP ORDER BY tkaryawan.NIP");
		echo "<h2>Staff</h2><input type=button value='Tambah Staff' onclick=\"window.location.href='tambahstaff.php';\">";
		
		echo "<table border=1 style='font-size: 13px';>
				<tr><th>No</th><th>Username</th><th>Level</th><th>NIP</th><th>Nama Karyawan</th><th>Email</th><th>HP</th><th>Aksi</th></tr>"; 
		$no=1;
		while ($r = mysql_fetch_array($tampil)){
			echo "<tr>	<td>$no</td>
						<td>$r[Username]</td>
						<td>$r[Level]</td>
						<td>$r[NIP]</td>
						<td>$r[NamaKaryawan]</td>
						<td><a href=mailto:$r[Email]>$r[Email]</a></td>
						<td>$r[CellPhone]</td>
						<td><a href=editstaff.php?id=$r[IdKaryawan]>Edit</a> ";
						?>
						<a href="hapusstaff.php?id=<?php echo $r[IdKaryawan];?>&idu=<?php echo $r[IdUser];?>" 
						onclick="return confirm(
							'Anda yakin ingin menghapus staff <?php echo $r[NamaKaryawan];?>?'
							);"
						>Hapus</a>
							
						<?php
			echo "</tr>";
      $no++;
    }
    echo "</table>";
?>
