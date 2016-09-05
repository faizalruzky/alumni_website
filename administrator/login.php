<?php 
include '../res/koneksi.php';
session_start();
//include 'res/koneksi.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$query=mysql_query("select * from admin where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
if($cek){
$_SESSION['username']=$username;
if (isset($_POST['setcookie']))
		{
 setcookie("username", $username, time()+3600);
  setcookie("password", $passsword, time()+3600);
}
//pergi ke halaman
  header('location:web.php?page=home'); 

}else{
?>Anda gagal login. silahkan <a href="../administrator/index.php">Login kembali</a><?php
echo mysql_error();
}
?>