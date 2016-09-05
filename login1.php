<?php 
	session_start();
	
	$user = "root";
	$host = "localhost";
	$pass = "";
	
	if (mysql_connect($host,$user,$pass))
	{
		//echo "Koneksi berhasil!";
	}
	else
	{
		//echo "Koneksi gagal".mysql_error();
	}
	mysql_select_db("db_alumnisman");
	
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	$query=mysql_query("select * from user where username = '".$username."' and password = '".$password."'");
	
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