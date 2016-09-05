<?php
	//fungsi header dengan mengirimkan raw data excel
	header("Content-type: application/vnd.ms-excel");
	
	//mendefinisikan nama file ekspor "data.xls"
	header("Content-Disposition: attachment; filename=Data-Alumni-SMAN-1-Cikarang-Utara.xls");
	$tahun = $_GET['no'];
	//tambahkan table
	include('laporan2.php');
?>