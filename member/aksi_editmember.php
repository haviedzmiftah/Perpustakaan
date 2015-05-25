<?php
include "../../koneksi.php";

$modifiedDate = date('Y-m-d H:i:s');
$tgl_lahir = $_POST[thn_lahir]."-".$_POST[bln_lahir]."-".$_POST[tgl_lahir];
mysql_query("UPDATE tmember SET 	IdIdentitas = '$_POST[no_identitas]',
									Jenis	= '$_POST[jenis]',
									NamaMember = '$_POST[nama_member]',
									Alamat	 = '$_POST[alamat]',
									TmpLahir = '$_POST[tmp_lahir]',
									TglLahir = '$tgl_lahir',
									Email	 = '$_POST[email]',
									Telepon	 = '$_POST[telepon]',
									CellPhone= '$_POST[hp]',
									Status	 = '$_POST[status]',
									Note	 = '$_POST[note]',
									ModifiedDate = '$modifiedDate',
									ModifiedUser = '$_SESSION[IdUser]'
									WHERE IdMember = '$_POST[id]'");

header('location:tampilmember.php');
	
?>
