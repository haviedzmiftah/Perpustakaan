<?php
include "../../koneksi.php";
$createdDate = date('Y-m-d H:i:s');
	mysql_query("INSERT INTO tkategori(	NamaKategori,
										CreatedDate,
										CreatedUser)
								VALUES(	'$_POST[nama_kategori]',
										'$createdDate',
										'$_SESSION[IdUser]')");
										
	header('location:tampilkategori.php');
?>
