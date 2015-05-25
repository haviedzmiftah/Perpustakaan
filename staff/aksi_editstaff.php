<?php
include "../../koneksi.php";

$modifiedDate = date('Y-m-d H:i:s');
$tgl_lahir = $_POST[thn_lahir]."-".$_POST[bln_lahir]."-".$_POST[tgl_lahir];
mysql_query("UPDATE tkaryawan SET 	NamaKaryawan = '$_POST[nama_karyawan]',
									Alamat	= '$_POST[alamat]',
									TmpLahir = '$_POST[tmp_lahir]',
									TglLahir = '$tgl_lahir',
									Email	 = '$_POST[email]',
									NPWP	 = '$_POST[npwp]',
									Telepon	 = '$_POST[telepon]',
									CellPhone= '$_POST[hp]',
									Aktif	 = '$_POST[aktif]',
									Note	 = '$_POST[note]',
									ModifiedDate = '$modifiedDate',
									ModifiedUser = '$_SESSION[IdUser]'
									WHERE IdKaryawan = '$_POST[id]'");

mysql_query("UPDATE tuser SET	Level = '$_POST[level]',
								Blokir= '$_POST[blokir]',
								ModifiedDate = '$modifiedDate',
								ModifiedUser = '$_SESSION[IdUser]'
							WHERE	IdUser = '$_POST[idu]'");
header('location:tampilstaff.php');
?>
