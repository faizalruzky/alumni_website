<?php session_start();
session_destroy();
header('location:../?t=home.php');
//echo "Anda berhasil logout. silahkan menuju <a href='form_admin.php'>Halaman Utama</a>"
?>