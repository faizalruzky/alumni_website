<?php
include 'res/koneksi.php';
//Fungsi untuk setting lokasi folder gambar counter
function base_url()
{
	$host = 'http://localhost/alumnisman1cikarang/counter/';
	return $host;
}

//Fungsi untuk konversi text nomor menjadi image
function num_toimage($tot,$jumlah){
	$pattern='';
	for($j=0;$j<$jumlah;$j++){
		$pattern .= '0';
	}
	$len     = strlen($tot);
	$length  = strlen($pattern)-$len;
	$start   = substr($pattern,0,$length).substr($tot,0,$len-1);
	$last    = substr($tot,$len-1,1);
	$last_rpc= '<img src="_BASE_URL_/counter/animasi/'.$last.'.gif" align="absmiddle" />'; 
	$inc     = str_replace($last,$last_rpc,$last);
	for($i=0;$i<=9;$i++){
		$rpc ='<img src="_BASE_URL_/counter/'.$i.'.gif" align="absmiddle"/>';
		$start=str_replace($i,$rpc,$start);
	}
	$num = $start.$inc;
	$num = str_replace('_BASE_URL_',base_url(),$num);
	return $num;
}
/*
koneksi ke database dapat anda hapus jika script ini hendak diinclude
pada script lain yang sudah terkoneksi ke database
*/
//==========================================================//
/*$dbconn = mysql_connect('localhost','root','');	//
$dbsell	= mysql_select_db('db_alumnisman',$dbconn);		
*/		//
//==========================================================//

$ip = $_SERVER['REMOTE_ADDR']."{}";
if(!isset($_SESSION['MemberOnline'])){
$cek = mysql_query("SELECT Tanggal,ipAddress FROM sys_traffic WHERE Tanggal='".date("Y-m-d")."'");
	if(mysql_num_rows($cek)==0){
		$up = mysql_query("INSERT  INTO sys_traffic (Tanggal,ipAddress,Jumlah) VALUES ('".date("Y-m-d")."','".$ip."','1')");
		$_SESSION['MemberOnline']=date('Y-m-d H:i:s');
	}
	else{
		$res 	= mysql_fetch_array($cek);
		$ipaddr = $res['ipAddress'].$ip;
		$up = mysql_query("UPDATE sys_traffic SET Jumlah=Jumlah + 1,ipAddress='".$ip."' WHERE Tanggal='".date("Y-m-d")."'");
		$_SESSION['MemberOnline']=date('Y-m-d H:i:s');
	}
}

$yesterday 	= date("Y-m-d",mktime(0,0,0,date('m'),date('d')-1,date('Y')));
$today 		= mysql_fetch_array(mysql_query('SELECT Jumlah AS Visitor FROM sys_traffic WHERE Tanggal="'.date("Y-m-d").'" LIMIT 1'));
$yesterday	= mysql_fetch_array(mysql_query('SELECT Jumlah AS Visitor FROM sys_traffic WHERE Tanggal="'.$yesterday.'" LIMIT 1'));
$total 		= mysql_fetch_array(mysql_query('SELECT SUM(Jumlah) as Total FROM sys_traffic'));
?>