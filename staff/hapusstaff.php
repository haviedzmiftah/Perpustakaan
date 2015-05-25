<?php
include "../../koneksi.php";

mysql_query("DELETE FROM tkaryawan WHERE IdKaryawan = '$_GET[id]'");
mysql_query("DELETE FROM tuser WHERE IdUser = '$_GET[idu]'");

header('location:tampilstaff.php');
?>
