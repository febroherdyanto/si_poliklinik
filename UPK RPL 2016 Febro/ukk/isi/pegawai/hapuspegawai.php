<?php
include '../../config/koneksi.php';
$getnip = $_GET['nip'];

$query = mysql_query("delete from pegawai where NIP='$getnip'");
if($query == 1){
	echo "<script>document.location.href='../../index.php?halaman=Pegawai';</script>";
}else{
	echo "GAGAL Delete, ".mysql_error();
}
?>