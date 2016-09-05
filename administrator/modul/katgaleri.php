<?php
error_reporting(E_ALL & ~E_NOTICE);

switch($_GET['aksi']){
//form menampilkan seluruh berita
default:
echo "Daftar Kategori Galeri<br>
<input type=button value='Tambah Kategori' onclick=\"window.location.href='?page=inputkategorigaleri&aksi=tambahgaleri';\">";
echo "<table>
	<td width='20'>NO</td><td width='500'>Kategori</td><td width='70'>AKSI</td>";
	$no=1;
	$sql=mysql_query("SELECT * FROM kategori_galeri ORDER BY id_kat_galeri ");
	while ($r=mysql_fetch_array($sql)){
		echo "<tr><td>$no</td>
			<td>$r[nama_kat_galeri]</td><td>
			<a href=?page=inputkategorigaleri&aksi=edit2&id=$r[id_kat_galeri]> Ubah</a>
			<a href=?page=inputkategorigaleri&aksi=hapus2&id=$r[id_kat_galeri] > Hapus</a></td></tr>";
		$no++;
	}
echo "<table>";
break;

case "tambahgaleri":
//Form Tambah Berita
echo "<h2>Tambah Kategori Galeri</h2>";
echo "<form action='?page=inputkategorigaleri&aksi=tambah2' method='post' enctype=\"multipart/form-data\">
    <table>
    <tr>
            <td>cover</td>
            <td><input type=\"file\" name=\"file\" id=\"file\"/></td>
        </tr>
        <tr>
            <td>Nama Kategori</td>
            <td><input name=kategori type=text size=55></td>
        </tr>
        <tr>
            
            
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
case "tambah2":

    if($_POST['submit'] == 'Simpan' && !empty($_FILES) && $_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){
	$fileName = $_FILES['file']['name'];
	$move = move_uploaded_file($_FILES['file']['tmp_name'], 'fotogaleri/'.$fileName);
	if($move){
		$sql=("INSERT INTO kategori_galeri(cover,nama_kat_galeri) 
        VALUES ('$fileName','$_POST[kategori]')");
		mysql_query($sql);
        
        echo "<meta http-equiv='refresh' content='0; ?page=inputkategorigaleri'>";
        exit;
	}
    }
    
  break;
    
    
    
    
	if ($_POST['submit'] == 'Simpan') {
		$sql=mysql_query("INSERT INTO kategori_galeri(nama_kat_galeri) VALUES ('$_POST[kategori]')");
		//$sql;
        echo "<meta http-equiv='refresh' content='0; ?page=inputkategorigaleri'>";
	}
	break;
//perintah menghapus
case "hapus2":
	mysql_query("DELETE FROM kategori_galeri WHERE id_kat_galeri='$_GET[id]'");
    echo "<meta http-equiv='refresh' content='0; ?page=inputkategorigaleri'>";
	break;
//form pengeditan


case "edit2":
	$edit=mysql_query("SELECT * FROM kategori_galeri WHERE id_kat_galeri='$_GET[id]'");
    $r=mysql_fetch_array($edit);
	echo "
	<form name='formEdit' method='post' action='?page=inputkategorigaleri&aksi=ubah2'>
	<h2>Ubah kategori galeri</h2>
		<table>
            <tr><td><input type='hidden' name='id' value='$r[id_kat_galeri]' size='50'></td></tr>
		<tr><td>Kategori</td><td>:</td><td><input type='text' name='kategori' value='$r[nama_kat_galeri]' size='50'></td></tr>
        
		
		<tr><td colspan='3' align='center'>
			<input type=submit name='submit' value=Ubah>
			<input type=button value=Batal onclick=self.history.back()>
		</td></tr>
		</table>
	</form>";
	break;
//queri pengubahan
case "ubah2":
	if ($_POST['submit'] == 'Ubah') {
	   $query="UPDATE kategori_galeri SET  nama_kat_galeri='$_POST[kategori]' 
			WHERE id_kat_galeri= '$_POST[id]'";
		mysql_query($query);
        //echo $query;
		echo "<meta http-equiv='refresh' content='0; ?page=inputkategorigaleri'>";
	}
	break;
    
}
?>