<?php
include '../../config/koneksi.php';
$getno = $_GET['no'];

$query = mysql_query("delete from resep where no_resep='$getno'");
if($query == 1){
	echo "<script>document.location.href='../../index.php?halaman=Resep';</script>";
}else{
	echo "GAGAL Delete, ".mysql_error();
}
?>