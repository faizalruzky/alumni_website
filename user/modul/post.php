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

 
switch ($_GET['aksi']){
//form menampilkan seluruh berita
default:
echo "Berita Terbaru <br>
<input type=button value='Tambah Berita' onclick=\"window.location.href='?page=berita&aksi=tambahberita';\">";
echo "<table>
	<td width='20'>NO</td><td width='500'>JUDUL</td><td width='70'>AKSI</td>";
	$no=1;
	$sql=mysql_query("SELECT * FROM berita ORDER BY id_ber desc");
	while ($r=mysql_fetch_array($sql)){
		echo "<tr><td>$no</td>
			<td>$r[nama_ber]</td><td>
			<a href=?page=berita&aksi=edit&id=$r[id_ber]> Ubah</a>
			<a href=?page=berita&aksi=hapus&id=$r[id_ber] > Hapus</a></td></tr>";
		$no++;
	}
echo "<table>";
break;

case "tambahberita":
//Form Tambah Berita
echo "<h2>Tambah Berita</h2>";



echo "<form action='?page=berita&aksi=tambah' method='post' enctype=\"multipart/form-data\" >
    <table>
        
        <tr>
            <td>Judul</td>
            <td><input name=judul type=text size=55></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><select name=kategori>
                    <option value=0 selected>-Pilih Kategori-</option>";
                    $querykategori= mysql_query("SELECT * FROM kategori_berita ORDER BY id_kat");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_kat]>$kategori[nama_kat]</option>";
                    }
                    echo "</select></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type=\"file\" name=\"file\" id=\"file\"/></td>
        </tr>
        <tr>
            <td>Isi Berita</td>
            <td><textarea name=isi cols=55 row=25></textarea></td>
            
        </tr>
        <tr>
            <td>Posting</td>
            <td><input name=posting type=text size=25></td>
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
	$move = move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$fileName);
	if($move){
		$sql=("insert into berita(id_kat_ber,nama_ber,isi_ber,foto_ber,tgl_ber,post_ber) 
        values ('$_POST[kategori]','$_POST[judul]','$_POST[isi]','$fileName','$date','$_POST[posting]')");
		mysql_query($sql);
        
        echo "<meta http-equiv='refresh' content='0; ?page=berita'>";
        exit;
	}
    }
    
    
	break;
//perintah menghapus

case "hapus":

	mysql_query("DELETE FROM berita WHERE id_ber='$_GET[id]'");

    echo "<meta http-equiv='refresh' content='0; ?page=berita'>";
	break;
//form pengeditan


case "edit":


	$edit=mysql_query("SELECT * FROM berita WHERE id_ber='$_GET[id]'");
    $r=mysql_fetch_array($edit);
	echo "
	<form name='formEdit' method='post' action='?page=berita&aksi=ubah'>
	<h2>Ubah Berita </h2>
		<table>
            <tr><td>Tanggal</td><td>:</td><td><input type='text' name='tgl' value='$r[tgl_ber]' size='50'></td></tr>
            <tr><td>Judul Berita</td><td>:</td><td><input type='text' name='judul' value='$r[nama_ber]' size='50'></td></tr>
			
            <tr><td><input type='hidden' name='id' value='$_GET[id]' size='50'></td></tr>
		
		<tr><td>Isi Berita</td><td>:</td><td><textarea rows='15' cols='60' name='isi'>$r[isi_ber]</textarea></td></tr>
        <tr><td>Posting</td><td>:</td><td><input type='text' name='posting' value='$r[post_ber]' size='50'></td></tr>
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
	   $query="UPDATE berita SET  nama_ber='$_POST[judul]',isi_ber='$_POST[isi]',tgl_ber='$_POST[tgl]',post_ber='$_POST[posting]'
			WHERE id_ber= '$_POST[id]'";
		mysql_query($query);
        //echo $query;
		echo "<meta http-equiv='refresh' content='0; ?page=berita'>";
	}
	break;
    
}
?>