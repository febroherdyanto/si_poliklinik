
<?php
include '../../config/koneksi.php';
if(isset($_POST['simpan'])){
$cek_nip = mysql_query("select * from pegawai where NIP='$_POST[nip]'");
$cek_user = mysql_query("select * from user where username='$_POST[username]'");
if((mysql_num_rows($cek_nip) > 0) OR (mysql_num_rows($cek_user) > 0)){
	echo "<script>alert('NIP atau Username Anda Sudah Terdaftar');
	document.location.href='../../index.php?halaman=Pegawai';
	</script>";
}else{
$nip = addslashes(trim($_POST['nip']));
$nama = addslashes(trim($_POST['nama']));
$alamat = addslashes(trim($_POST['jl']))."=".addslashes(trim($_POST['ds']))."=".addslashes(trim($_POST['kec']))."=".addslashes(trim($_POST['kabkot']))."=".addslashes(trim($_POST['kpos']))."=".addslashes(trim($_POST['prov']));

$telp = addslashes(trim($_POST['telp']));
$tgl_lahir = addslashes(trim($_POST['tgl_lahir']));
$jenkel = addslashes(trim($_POST['jenkel']));

$username = addslashes(trim($_POST['username']));
$password = addslashes(trim(md5($_POST['password'])));
$level = 'pegawai';

$qpeg = mysql_query("insert into pegawai values('$nip','$nama','$alamat','$telp',
	'$tgl_lahir','$jenkel')") or die("GAGAL SIMPAN DATA PEGAWAI, ".mysql_error());

if(ctype_alnum($username) OR ctype_alnum($password)){
$qus = mysql_query("insert into user values('$username','$password','$nip','$level')")
	or die("GAGAL INSERT USER PEGAWAI ".mysql_error());
}else{
	echo "<script>alert('Username atau Password Anda Bukan Huruf atau Angka..!!')</script>";
}

if(($qpeg) AND ($qus)){
	echo "<script>document.location.href='../../index.php?halaman=Pegawai'</script>";
}else{
	echo "GAGAL".mysql_error();
}
}
}
?>