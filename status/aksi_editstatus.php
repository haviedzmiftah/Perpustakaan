<?php
include "../../koneksi.php";
$modifiedDate = date('Y-m-d H:i:s');
	mysql_query("UPDATE tstatus SET 	NamaStatus = '$_POST[nama_status]',
										ModifiedDate = '$modifiedDate',
										ModifiedUser = '$_SESSION[IdUser]'
									WHERE IdStatus = '$_POST[id]'");

	header('location:tampilstatus.php');
?>
