<?php
error_reporting(E_ALL & ~E_NOTICE);
$today=getDate();
$year=$today['year'];
$month=$today['mon'];
$mday=$today['mday'];
if($month < 10){
	$month ="0";
	$month .= $today['mon'];
}
$date = $year;
$date .= "-";
$date .= $month;
$date .= "-";
$date .=$mday;
 
 
switch($_GET['aksi']){
//form menampilkan seluruh berita
default:
echo "Berita Beasiswa <br>
<input type=button value='Tambah Beasiswa' onclick=\"window.location.href='?page=beasiswa&aksi=tambahbea';\">";
echo "<table>
	<td width='20'>NO</td><td width='500'>Nama</td><td width='70'>AKSI</td>";
	$no=1;
	$sql=mysql_query("SELECT * FROM beasiswa ORDER BY id_beasiswa desc");
	while ($r=mysql_fetch_array($sql)){
		echo "<tr><td>$no</td>
			<td>$r[nama_beasiswa]</td><td>
			<a href=?page=beasiswa&aksi=edit&id=$r[id_beasiswa]> Ubah</a>
			<a href=?page=beasiswa&aksi=hapus&id=$r[id_beasiswa] > Hapus</a></td></tr>";
		$no++;
	}
echo "<table>";
break;

case "tambahbea":
//Form Tambah Berita
echo "<h2>Tambah Beasiswa</h2>";



echo "<form action='?page=beasiswa&aksi=tambah' method='post' enctype=\"multipart/form-data\" >
    <table>
        
        <tr>
            <td>Nama</td>
            <td><input name=nama type=text size=55></td>
        </tr>
        <tr>
            <td>Data</td>
            <td><input type=\"file\" name=\"file\" id=\"file\"/></td>
        </tr>
        <tr>
            <td>Isi</td>
            <td><textarea name=isi cols=55 row=25></textarea></td>
            
        </tr>
        
        <tr>
            <td colspan=2><input type=submit name='submit' value=Simpan>
                          <input type='reset' value='Reset'>
                          <input type=button value=Kembali onclick=self.history.back()>
            </td> 
        </tr>
    </table>

</form>";
break;
//perintah menyimpan berita
case "tambah":
	
	   if($_POST['submit'] == 'Simpan' && !empty($_FILES) && $_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){
	$fileName = $_FILES['file']['name'];
	$move = move_uploaded_file($_FILES['file']['tmp_name'], 'dokumen/'.$fileName);
	if($move){
		$sql=("INSERT INTO beasiswa(nama_beasiswa,isi_beasiswa,tgl_beasiswa,file) 
        VALUES ('$_POST[nama]','$_POST[isi]','$date','$fileName')");
		mysql_query($sql);
        
        echo "<meta http-equiv='refresh' content='0; ?page=beasiswa'>";
        exit;
	}
    }
    
    
	break;
//perintah menghapus
case "hapus":
	mysql_query("DELETE FROM beasiswa WHERE id_beasiswa='$_GET[id]'");
    echo "<meta http-equiv='refresh' content='0; ?page=beasiswa'>";
	break;
//form pengeditan


case "edit":


	$edit=mysql_query("SELECT * FROM beasiswa WHERE id_beasiswa='$_GET[id]'");
    $r=mysql_fetch_array($edit);
	echo "
	<form name='formEdit' method='post' action='?page=beasiswa&aksi=ubah'>
	<h2>Ubah Beasiswa </h2>
		<table>
            <tr><td>Tanggal</td><td>:</td><td><input type='text' name='tgl' value='$r[tgl_beasiswa]' size='50'></td></tr>
            <tr><td>Nama</td><td>:</td><td><input type='text' name='nama' value='$r[nama_beasiswa]' size='50'></td></tr>
			
            <tr><td><input type='hidden' name='id' value='$_GET[id]' size='50'></td></tr>
		
		<tr><td>Isi</td><td>:</td><td><textarea rows='15' cols='60' name='isi'>$r[isi_beasiswa]</textarea></td></tr>
       
		<tr><td colspan='3' align='center'>
			<input type=submit name='submit' value=Ubah>
			<input type=button value=Batal onclick=self.history.back()>
		</td></tr>
		</table>
	</form>";
	break;
//queri pengubahan
case "ubah":
	if ($_POST['submit'] == 'Ubah') {
	   $query="UPDATE beasiswa SET  nama_beasiswa='$_POST[nama]',isi_beasiswa='$_POST[isi]',tgl_beasiswa='$_POST[tgl]'
			WHERE id_beasiswa= '$_POST[id]'";
		mysql_query($query);
        //echo $query;
		echo "<meta http-equiv='refresh' content='0; ?page=beasiswa'>";
	}
	break;
    
}
?>