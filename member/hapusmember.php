<?php
include "../../koneksi.php";

mysql_query ("DELETE FROM tmember WHERE IdMember ='$_GET[id]'");
header ('location: tampilmember.php');

?>
