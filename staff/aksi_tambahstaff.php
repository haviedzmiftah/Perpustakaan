<?php
include "../../koneksi.php";
$createdDate = date('Y-m-d H:i:s');
$tgl_lahir = $_POST[thn_lahir]."-".$_POST[bln_lahir]."-".$_POST[tgl_lahir];
	mysql_query("INSERT INTO tkaryawan(	NIP,
										NamaKaryawan,
										Alamat,
										TmpLahir,
										TglLahir,
										Email,
										NPWP,
										Telepon,
										CellPhone,
										Aktif,
										Note,
										CreatedDate,
										CreatedUser)
								VALUES(	'$_POST[nip]',
										'$_POST[nama_karyawan]',
										'$_POST[alamat]',
										'$_POST[tmp_lahir]',
										'$tgl_lahir',
										'$_POST[email]',
										'$_POST[npwp]',
										'$_POST[telepon]',
										'$_POST[hp]',
										'$_POST[aktif]',
										'$_POST[note]',
										'$createdDate',
										'$_SESSION[IdUser]')");
										
	mysql_query("INSERT INTO tuser(	Username,
									Password,
									NIP,
									Level,
									Blokir,
									CreatedDate,
									CreatedUser)
							VALUES(	'$_POST[username]',
									'$pass',
									'$_POST[nip]',
									'$_POST[level]',
									'$_POST[blokir]',
									'$createdDate',
									'$_SESSION[IdUser]')");
	header('location:tampilstaff.php');
?>
