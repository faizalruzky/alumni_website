<?php
	session_start();
	include "res/koneksi.php";
	
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$password = md5($_POST['password']);
	//$foto_siswa = $_POST['foto_siswa'];
	
	$input=("insert into data_siswa (nama,username, password) values ('$nama','$username', '$password')");
		$sql=mysql_query("SELECT username FROM data_siswa 
               WHERE username='".$username."'");
		// Cek username di database
$cek_username=mysql_num_rows($sql);

// Kalau username sudah ada yang pakai
if ($cek_username > 0){
  echo "Username sudah ada yang pakai. Ulangi lagi";
}
else 
	{
		mysql_query($input)
	
	/*$input = mysql_query("insert into data_siswa values('','$nama','$username','$password')")*/
		or die(mysql_error());
		echo "<script>alert('Berhasil menyimpan data. Silahkan Login Kembali')
			location.replace('index.php?page=home')</script>";
	} 
	/*else 
	{
		echo "<script>alert('Gagal menyimpan data')
			location.replace('index.php?page=registrasi')</script>>";
	}*/

?>