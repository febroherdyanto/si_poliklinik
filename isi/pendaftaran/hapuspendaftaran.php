<?php
include '../../config/koneksi.php';
$getno = $_GET['no'];

$query = mysql_query("delete from pendaftaran where no_pendaftaran='$getno'");
if($query == 1){
	echo "<script>document.location.href='../../index.php?halaman=Pendaftaran';</script>";
}else{
	echo "GAGAL Delete, ".mysql_error();
}
?>