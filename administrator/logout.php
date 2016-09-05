<?php session_start();
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
//menghilangkan cookies yang telah didaftar

unset($_SESSION['username']);
echo "Anda telah logout";
session_destroy();
setcookie("username", "", time()-3600);
setcookie("password", "", time()-3600);
header('location:../administrator/index.php');
//echo "Anda berhasil logout. silahkan menuju <a href='form_admin.php'>Halaman Utama</a>"
?>