<?php
include '../../config/koneksi.php';
$no_daftar = '';
$nip = addslashes(trim($_POST['nip']));
$no_pas = addslashes(trim($_POST['no_pasien']));
$tgl_pendaftaran = addslashes(trim($_POST['tgl_pendaftaran']));
$no_urut = addslashes(trim($_POST['no_urut']));

$query = mysql_query("insert into pendaftaran values('$no_daftar','$nip','$no_pas',
	'$tgl_pendaftaran','$no_urut')");
if($query == 1){
	echo "<script>document.location.href='../../index.php?halaman=Pendaftaran'</script>";
}else{
	echo "ERROR, ".mysql_error();
}
?>