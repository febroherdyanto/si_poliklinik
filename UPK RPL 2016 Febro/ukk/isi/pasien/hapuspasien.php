<?php
include '../../config/koneksi.php';
$getno = $_GET['no'];

$query = mysql_query("delete from pasien where no_pasien='$getno'");
if($query == 1){
	echo "<script>document.location.href='../../index.php?halaman=Pasien';</script>";
}else{
	echo "GAGAL Delete, ".mysql_error();
}
?>