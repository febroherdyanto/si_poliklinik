<?php
include '../../config/koneksi.php';

$qcek = mysql_query("select kode_obat from obat where kode_obat='$_POST[kode]'");
if(mysql_num_rows($qcek)>0){
	echo "<script>alert('Kode Obat Sudah Tersedia');
	document.location.href='../../index.php?halaman=Obat'</script>";
}else{

$kode = addslashes(trim($_POST['kode']));
$nama = addslashes(trim($_POST['nama']));
$merk = addslashes(trim($_POST['merk']));
$satuan = addslashes(trim($_POST['satuan']));
$harga_jual = addslashes(trim($_POST['harga_jual']));

$query = mysql_query("insert into obat values('$kode','$nama','$merk','$satuan',
	'$harga_jual')");
if($query == 1){
	echo "<script>document.location.href='../../index.php?halaman=Obat'</script>";
}else{
	echo "ERROR, ".mysql_error();
}

}
?>