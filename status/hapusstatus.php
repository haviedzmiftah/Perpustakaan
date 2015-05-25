<?php
include "../../koneksi.php";
mysql_query("DELETE FROM tstatus WHERE IdStatus = '$_GET[id]'");
	header('location:tampilstatus.php');
?>
