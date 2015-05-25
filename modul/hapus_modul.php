<?php
include "../../koneksi.php";
mysql_query("DELETE FROM tmodul WHERE IdModule='$_GET[id]'");
header('location:tampilmodul.php');
?>
