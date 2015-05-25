<?php
include "../../koneksi.php";

$lokasiFile    = $_FILES['fupload']['tmp_name'];
	$tipeFile      = $_FILES['fupload']['type'];
	$namaFile      = $_FILES['fupload']['name'];
	$acak			= date('dmY.his');
	$penulis		= $_POST['penulis'];
	$namaGambar		= $acak.'-'.$penulis.'-'.$namaFile; 
	$modifiedDate	= date('Y-m-d H:i:s');
	$kodeBuku1		= date('Y');
	$kodeBuku2		= $kodeBuku1.'.'.$_POST[kategori].'.'.$_POST[kd_buku];
	
	// Apabila gambar tidak diganti
	if (empty($lokasiFile)){
		mysql_query("UPDATE tbuku SET 	KdBuku 		= '$kodeBuku2',
										IdKategori	= '$_POST[kategori]',
										JudulBuku	= '$_POST[judul]',
										Penulis		= '$_POST[penulis]',
										Penerbit	= '$_POST[penerbit]',
										AsalNegara	= '$_POST[asal_negara]',
										ISBN		= '$_POST[isbn]',
										Harga		= '$_POST[harga]',
										TahunTerbit	= '$_POST[tahun_terbit]',
										Rak			= '$_POST[rak]',
										Stok		= '$_POST[stok]',
										Sinopsis	= '$_POST[sinopsis]',
										CreatedDate	= '$modifiedDate',
										CreatedUser	= '$_SESSION[IdUser]'
										WHERE IdBuku = '$_POST[id]'");
	}
	else{
		$data = mysql_fetch_array(mysql_query("SELECT Gambar FROM tbuku WHERE IdBuku = '$_POST[id]'"));
		if ($data[Gambar] == ''){
			move_uploaded_file($lokasiFile, "gambar/$namaGambar");
			mysql_query("UPDATE tbuku SET 	KdBuku 		= '$kodeBuku2',
											IdKategori	= '$_POST[kategori]',
											JudulBuku	= '$_POST[judul]',
											Penulis		= '$_POST[penulis]',
											Penerbit	= '$_POST[penerbit]',
											AsalNegara	= '$_POST[asal_negara]',
											ISBN		= '$_POST[isbn]',
											Harga		= '$_POST[harga]',
											TahunTerbit	= '$_POST[tahun_terbit]',
											Rak			= '$_POST[rak]',
											Stok		= '$_POST[stok]',
											Sinopsis	= '$_POST[sinopsis]',
											Gambar		= '$namaGambar',
											CreatedDate	= '$modifiedDate',
											CreatedUser	= '$_SESSION[IdUser]'
											WHERE IdBuku = '$_POST[id]'");
		}
		else{
			$gambar = $data[Gambar];
			$hapusGambar = unlink("gambar/$gambar");
			if ($hapusGambar){
				move_uploaded_file($lokasiFile, "gambar/$namaGambar");
				mysql_query("UPDATE tbuku SET 	KdBuku 		= '$kodeBuku2',
											IdKategori	= '$_POST[kategori]',
											JudulBuku	= '$_POST[judul]',
											Penulis		= '$_POST[penulis]',
											Penerbit	= '$_POST[penerbit]',
											AsalNegara	= '$_POST[asal_negara]',
											ISBN		= '$_POST[isbn]',
											Harga		= '$_POST[harga]',
											TahunTerbit	= '$_POST[tahun_terbit]',
											Rak			= '$_POST[rak]',
											Stok		= '$_POST[stok]',
											Sinopsis	= '$_POST[sinopsis]',
											Gambar		= '$namaGambar',
											CreatedDate	= '$modifiedDate',
											CreatedUser	= '$_SESSION[IdUser]'
											WHERE IdBuku = '$_POST[id]'");
			}
		}
	}
	header('location:tampilbuku.php');	
?>
