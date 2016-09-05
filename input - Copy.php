<?php
	session_start();
	include "res/koneksi.php";
	
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$password = md5($_POST['password']);
	$foto_siswa = $_POST['foto_siswa'];
	
	$input =  mysql_query("insert into data_siswa (nama,username, password,foto_siswa) values ('$nama','$username', '$password','$foto_siswa')")
	
	/*$input = mysql_query("insert into data_siswa values('','$nama','$username','$password')")*/
		or die(mysql_error());
	if($input)
	{
		echo "<script>alert('Berhasil menyimpan data. Silahkan Login Kembali')
			location.replace('index.php?page=home')</script>";
	} 
	else 
	{
		echo "<script>alert('Gagal menyimpan data')
			location.replace('index.php?page=registrasi')</script>>";
	}
?>