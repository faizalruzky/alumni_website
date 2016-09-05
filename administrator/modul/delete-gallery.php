<?php
error_reporting(E_ALL & ~E_NOTICE);
//file delete-gallery.php
//koneksi ke database
include ('../../res/koneksi.php');
if($_GET['id']){
	$id = (int) $_GET['id'];
	$sql = "select * from foto where id='$id'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) > 0 ){
		$data = mysql_fetch_array($result);
		//delete file
		@unlink('upload/'.$data['nama_file']);
		//delete data di database
		mysql_query("delete from foto where id='$id'");
	}
} 
header("Location: web.php?page=galeri");
