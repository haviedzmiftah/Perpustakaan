<?php
include "../../koneksi.php";

mysql_query ("DELETE FROM tbuku WHERE IdBuku='$_GET[id]'");
/*
$data = mysql_fetch_array(mysql_query("SELECT Gambar FROM tbuku WHERE IdBuku = '$_GET[id]'"));
$namaFile = $data[Gambar];

	if ($data[Gambar] == ''){
		mysql_query("DELETE FROM tbuku WHERE IdBuku='$_GET[id]'");
	}
	else{
		$hapusFile = unlink("gambar/$namaFile");
		if ($hapusFile){
			mysql_query("DELETE FROM tbuku WHERE IdBuku='$_GET[id]'");
		}
	}
	*/
	
header('location:tampilbuku.php');
?>
