<?php
include "../../koneksi.php";
$edit = mysql_query("SELECT * FROM tmodul WHERE IdModule='$_GET[id]'");
$r    = mysql_fetch_array($edit);

echo "<h2>Edit Modul</h2>
          <form method=POST action=aksi_editmodul.php>
          <input type=hidden name=id value='$r[IdModule]'>
          <table border=1 style='font-size: 13px';>
          <tr><td>Nama Modul</td>     <td> : <input type=text name='ModuleName' value='$r[ModuleName]'></td></tr>
          <tr><td>Link</td>     <td> : <input type=text name='link' size=30 value='$r[link]'></td></tr>";
		  if ($r[publish]=='Y'){
			echo "<tr><td>Publish</td> <td> : <input type=radio name='publish' value='Y' checked>Y  
											<input type=radio name='publish' value='N'> N</td></tr>";
		  }
		  else{
			echo "<tr><td>Publish</td> <td> : <input type=radio name='publish' value='Y'>Y  
											<input type=radio name='publish' value='N' checked>N</td></tr>";
		  }
		  if ($r[aktif]=='Y'){
			echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y' checked>Y  
											<input type=radio name='aktif' value='N'> N</td></tr>";
		  }
		  else{
			echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y'>Y  
											<input type=radio name='aktif' value='N' checked>N</td></tr>";
		  }
		  if ($r[status]=='admin'){
			echo "<tr><td>Status</td> <td> : <input type=radio name='status' value='admin' checked>Admin  
											<input type=radio name='status' value='staff'> Staff</td></tr>";
		  }
		  else{
			echo "<tr><td>Status</td> <td> : <input type=radio name='status' value='admin'>Admin  
											<input type=radio name='status' value='staff' checked>Staff</td></tr>";
		  }
		  echo "<tr><td>Urutan</td>       <td> : <input type=text name='urutan' size=1 value='$r[urutan]' disabled></td></tr>
				<tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";  
?>
