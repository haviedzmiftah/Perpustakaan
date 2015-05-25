<?php
include "../../koneksi.php";

$modifiedDate = date('Y-m-d H:i:s');
mysql_query("UPDATE tkategori SET 	NamaKategori = '$_POST[nama_kategori]',
									ModifiedDate = '$modifiedDate',
									ModifiedUser = '$_SESSION[IdUser]'
									WHERE IdKategori = '$_POST[id]'");

	header('location:tampilkategori.php');

?>
