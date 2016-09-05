<?php
//koneksi ke database
include ('config/koneksi.php');
//upload file
if(!empty($_FILES) && $_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){
	$fileName = $_FILES['file']['name'];
	$move = move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$fileName);
	if($move){
		//simpan deskripsi dan nama file ke database
		$sql = "insert into foto (nama_file, deskripsi) values
				('$fileName', '".$_POST['deskripsi']."')";
		mysql_query($sql);
		header("Location: web.php?page=galeri");
		exit;
	}
}
