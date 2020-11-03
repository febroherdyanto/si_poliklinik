<?php
include '../../config/koneksi.php';

$qcek = mysql_query("select * from jadwal_praktek where kode_jadwal='$_POST[kode_jadwal]'");
if(mysql_num_rows($qcek) > 0){
	echo "<script>alert('Kode Jadwal Praktek Sudah Ada');
	document.location.href='../../index.php?halaman=Jadwal-Praktek';</script>";
}else{

$kode_jadwal = addslashes(trim($_POST['kode_jadwal']));
$kode_dokter = addslashes(trim($_POST['kode_dokter']));
$hari = addslashes(trim($_POST['hari']));
$jam_mulai = addslashes(trim($_POST['jam_mulai']));
$jam_selesai = addslashes(trim($_POST['jam_selesai']));

$query = mysql_query("insert into jadwal_praktek values('$kode_jadwal','$kode_dokter',
	'$hari','$jam_mulai','$jam_selesai')");
if($query == 1){
	echo "<script>document.location.href='../../index.php?halaman=Jadwal-Praktek'</script>";
}else{
	echo "ERROR, ".mysql_error();
}

}
?>