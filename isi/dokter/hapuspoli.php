<?php
include '../../config/koneksi.php';
$getkode = $_GET['kode'];

$query = mysql_query("delete from dokter where kode_dokter='$getkode'");
if($query == 1){
	echo "<script>document.location.href='../../index.php?halaman=Dokter';</script>";
}else{
	echo "GAGAL Delete, ".mysql_error();
}
?>