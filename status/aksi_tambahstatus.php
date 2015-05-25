<?php
include "../../koneksi.php";
$createdDate = date('Y-m-d H:i:s');
	mysql_query("INSERT INTO tstatus(	NamaStatus,
										CreatedDate,
										CreatedUser)
								VALUES(	'$_POST[nama_status]',
										'$createdDate',
										'$_SESSION[IdUser]')");
										
	header('location:tampilstatus.php');
?>
