<?php
include "../../koneksi.php";
$tampil = mysql_query("SELECT * FROM tstatus ORDER BY IdStatus ASC");
		echo "<h2>Staff</h2><input type=button value='Tambah Status' onclick=\"window.location.href='tambahstatus.php';\">";
		
		echo "<table border=1 style='font-size: 13px';>
				<tr><th>No</th><th>Status Member</th><th>Aksi</th></tr>"; 
		$no=1;
		while ($r = mysql_fetch_array($tampil)){
			echo "<tr>	<td>$no</td>
						<td>$r[NamaStatus]</td>
						<td><a href=editstatus.php?id=$r[IdStatus]>Edit</a> ";
						?>
							<a href="hapusstatus.php?id=<?php echo $r[IdStatus];?>" onclick="return confirm('Anda yakin ingin menghapus status <?php echo $r[NamaStatus];?>?');"> Hapus</a>
						<?php
			echo "</tr>";
      $no++;
    }
    echo "</table>";
?>
