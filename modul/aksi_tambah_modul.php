<?php
include "../../koneksi.php";
$u = mysql_query("SELECT urutan FROM tmodul ORDER by urutan DESC");
	$d = mysql_fetch_array($u);
	$urutan = $d[urutan]+1;
	
	// Input data modul
	mysql_query("INSERT INTO tmodul(ModuleName,
									link,
									publish,
									status,
									aktif,
									urutan) 
	                       VALUES(	'$_POST[ModuleName]',
									'$_POST[link]',
									'$_POST[publish]',
									'$_POST[status]',
									'$_POST[aktif]',
									'$urutan')");
	header('location:tampilmodul.php');
?>
