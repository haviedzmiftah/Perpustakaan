<?php
include "../../koneksi.php";
mysql_query("UPDATE tmodul SET ModuleName 	= '$_POST[ModuleName]',
									link		= '$_POST[link]',
									publish		= '$_POST[publish]',
									status		= '$_POST[status]',
									aktif		= '$_POST[aktif]' 
									WHERE IdModule = '$_POST[id]'");
	header('location:tampilmodul.php');
?>
