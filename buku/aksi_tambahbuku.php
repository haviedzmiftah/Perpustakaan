<?php
include "../../koneksi.php";

$lokasiFile		= $_FILES['fupload']['tmp_name'];
$tipeFile		= $_FILES['fupload']['type'];
$namaFile		= $_FILES['fupload']['name'];
$acak			= date('dmY.his');
$penulis		= $_POST['penulis'];
$namaGambar		= $acak.'-'.$penulis.'-'.$namaFile; 
$createdDate	= date('Y-m-d H:i:s');
$kodeBuku1		= date('Y');
$kodeBuku2		= $kodeBuku1.'.'.$_POST[kategori].'.'.$_POST[kd_buku];


if (!empty($lokasiFile)){
	move_uploaded_file($lokasiFile, "gambar/$namaGambar");
	mysql_query("INSERT INTO tbuku(	KdBuku,
										IdKategori,
										JudulBuku,
										Penulis,
										Penerbit,
										AsalNegara,
										ISBN,
										Harga,
										TahunTerbit,
										Stok,
										Rak,
										Sinopsis,
										Gambar,
										CreatedDate,
										CreatedUser)
								VALUES ('$kodeBuku2',
										'$_POST[kategori]',
										'$_POST[judul]',
										'$_POST[penulis]',
										'$_POST[penerbit]',
										'$_POST[asal_negara]',
										'$_POST[isbn]',
										'$_POST[harga]',
										'$_POST[tahun_terbit]',
										'$_POST[stok]',
										'$_POST[rak]',
										'$_POST[sinopsis]',
										'$namaGambar',
										'$createdDate',
										'$_SESSION[IdUser]')");
	}
else{
		mysql_query("INSERT INTO tbuku(	KdBuku,
										IdKategori,
										JudulBuku,
										Penulis,
										Penerbit,
										AsalNegara,
										ISBN,
										Harga,
										TahunTerbit,
										Stok,
										Rak,
										Sinopsis,
										CreatedDate,
										CreatedUser)
								VALUES ('$kodeBuku2',
										'$_POST[kategori]',
										'$_POST[judul]',
										'$_POST[penulis]',
										'$_POST[penerbit]',
										'$_POST[asal_negara]',
										'$_POST[isbn]',
										'$_POST[harga]',
										'$_POST[tahun_terbit]',
										'$_POST[stok]',
										'$_POST[rak]',
										'$_POST[sinopsis]',
										'$createdDate',
										'$_SESSION[IdUser]')");
	}

header('location:tampilbuku.php');
?>
