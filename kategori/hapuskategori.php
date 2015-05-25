<?php 
include "../../koneksi.php";

mysql_query("DELETE FROM tkategori WHERE IdKategori = '$_GET[id]'");
header('location:tampilkategori.php');
?>
