<?php
include '../../config/koneksi.php';
$getid = $_GET['id'];

$query = mysql_query("delete from jenis_biaya where ID_jenis_biaya='$getid'");
if($query == 1){
	echo "<script>document.location.href='../../index.php?halaman=Jenis-Biaya';</script>";
}else{
	echo "GAGAL Delete, ".mysql_error();
}
?>