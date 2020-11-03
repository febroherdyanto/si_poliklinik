<?php session_start(); 
include '../config/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

if(!ctype_alnum($username) OR !ctype_alnum($password)){
    echo "<script>alert('Maaf, Login tidak bisa di injeksi..');
    document.location.href='../login.php';
    </script>";
}else{
$query = mysql_query("select * from user where username='$username' and
    password='$password'");
$result = mysql_fetch_array($query);

    if($result != NULL){

        //===============================================================
        if($_POST['captcha'] == $_SESSION['captcha']){
            session_start();
            $_SESSION['klinik'] = array('username'=>$result['username'], 'NIP'=>$result['NIP'], 'level_user'=>$result['level_user']);
            echo "<script>document.location.href='../index.php?halaman=Utama'</script>";
        }else{
            echo "<script>alert('Karakter yang Anda Masukkan Tidak Cocok');
        document.location.href='../login.php';
        </script>";
        }
        //==============================================================

        
    }else{
    echo "<script>alert('Maaf, Login Gagal... Username atau Password Tidak Cocok');
        document.location.href='../login.php';
        </script>";
    }
}?>