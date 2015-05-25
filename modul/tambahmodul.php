<?php
echo "<h2>Tambah Modul</h2>
          <form method=POST action='aksi_tambah_modul.php'>
          <table border=1 style='font-size: 13px';>
          <tr><td>Nama Modul</td> <td> : <input type=text name='ModuleName'></td></tr>
          <tr><td>Link</td>       <td> : <input type=text name='link' size=30></td></tr>
		  <tr><td>Publish</td>      <td> : <input type=radio name='publish' value='Y' checked>Y 
                                         <input type=radio name='publish' value='N'>N  </td></tr>
          <tr><td>Aktif</td>      <td> : <input type=radio name='aktif' value='Y' checked>Y 
                                         <input type=radio name='aktif' value='N'>N  </td></tr>
		  <tr><td>Status</td>      <td> : <input type=radio name='status' value='admin' checked>Admin 
                                         <input type=radio name='status' value='staff'>Staff  </td></tr>
          <tr><td colspan=2><input type=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
?>
