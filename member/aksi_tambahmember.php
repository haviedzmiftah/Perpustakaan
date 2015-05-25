<?php 
include "../../koneksi.php";

$createdDate = date('Y-m-d H:i:s');
$NoMember = date('Ymd-is');
$tgl_lahir = $_POST[thn_lahir]."-".$_POST[bln_lahir]."-".$_POST[tgl_lahir];

mysql_query("INSERT INTO tmember(	NoMember,
									IdIdentitas,
									Jenis,
									NamaMember,
									Alamat,
									TmpLahir,
									TglLahir,
									Email,
									Telepon,
									CellPhone,
									Status,
									Note,
									CreatedDate,
									CreatedUser)
							VALUES(	'$NoMember',
									'$_POST[no_identitas]',
									'$_POST[jenis]',
									'$_POST[nama_member]',
									'$_POST[alamat]',
									'$_POST[tmp_lahir]',
									'$tgl_lahir',
									'$_POST[email]',
									'$_POST[telepon]',
									'$_POST[hp]',
									'$_POST[status]',
									'$_POST[note]',
									'$createdDate',	
									'$_SESSION[IdUser]')");
										
header('location:tampilmember.php');
?>
