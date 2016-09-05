<?php session_start();
session_destroy();
header('location:../?t=home.php');
//echo "Anda berhasil logout. silahkan menuju <a href='index.php'>Halaman Utama</a>"
?>