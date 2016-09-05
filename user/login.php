<?php 
include '../res/koneksi.php';
	session_start();	
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	$query=mysql_query("select * from data_siswa where username = '".$username."' and password = '".$password."'");
	
	$cek=mysql_num_rows($query);
	if($cek)
	{
		$_SESSION['username']=$username;
		//pergi ke halaman
		  header('location:web.php?page=home'); 
	}
	else
	{
		?>Anda gagal login. silahkan <a href="../index.php">Login kembali</a>
<?php
		echo mysql_error();
	}
?>