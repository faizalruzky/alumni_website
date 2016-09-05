<html>
<style >
input[type=button],[type=submit],[type=reset]{
  background: #1A669C;
  border-radius: 10px;
  color: #FFF;
  position: relative;
  margin: 10px 10px 10px 0px  ;
  padding: 5px;
  width: 130px;
}
.btn-success:hover { /*--Hover effect for subnav links--*/
  background-color: #65C7F9;
cursor: pointer;
}
</style>
<?php
error_reporting(E_ALL & ~E_NOTICE);
switch($_GET['aksi']){
//form menampilkan seluruh berita
default:
echo "Tabel Download <br>
<input type=button class='btn-success' value='Tambah Download' onclick=\"window.location.href='?page=download&aksi=tambahdow';\">";
echo "<table>
	<td width='20'>NO</td><td width='500'>NAMA</td><td width='70'>AKSI</td>";
	$no=1;
	$sql=mysql_query("SELECT * FROM download_lowongan ORDER BY id_low desc");
	while ($r=mysql_fetch_array($sql)){
		echo "<tr><td>$no</td>
            <td>$r[nama_low]</td>
            <td>
            
			<a href=?page=download&aksi=edit&id=$r[id_low]> Ubah</a>
			<a href=?page=download&aksi=hapus&id=$r[id_low] > Hapus</a></td></tr>";
		$no++;
	}
echo "<table>";
break;

case "tambahdow":
//Form Tambah Berita
echo "<h2>Tambah Dowlnoad</h2>";



echo "<form action='?page=download&aksi=tambaha' method='post' enctype=\"multipart/form-data\" >
    <table>
        
        <tr>
            <td>Nama</td>
            <td><input name=lowongan type=text size=55 required></td>
        </tr>
        
        <tr>
            <td>Data File</td>
            <td><input type=\"file\" name=\"file\" id=\"file\" required/></td>
        </tr>
        <tr>
            <td colspan=2><input type=submit class='btn-success' name='submit' value=Simpan>
                          <input type='reset' class='btn-success' value='Reset'>
                          <input type=button class='btn-success' value=Kembali onclick=self.history.back()>
            </td> 
    </table>

</form>";
break;
//perintah menyimpan berita
case "tambaha":
	
	   if($_POST['submit'] == 'Simpan' && !empty($_FILES) && $_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){
	$fileName = $_FILES['file']['name'];
	$move = move_uploaded_file($_FILES['file']['tmp_name'], 'filedown/'.$fileName);
	if($move){
		$sql=("INSERT INTO download_lowongan(nama_low,file) 
        VALUES ('$_POST[lowongan]','$fileName')");
		mysql_query($sql);
        
        echo "<meta http-equiv='refresh' content='0; ?page=download'>";
        exit;
	}
    }
    
    
	break;
//perintah menghapus
case "hapus":
	mysql_query("DELETE FROM download_lowongan WHERE id_low='$_GET[id]'");
    echo "<meta http-equiv='refresh' content='0; ?page=download'>";
	break;
//form pengeditan


case "edit":


	$edit=mysql_query("SELECT * FROM download_lowongan WHERE id_low='$_GET[id]'");
    $r=mysql_fetch_array($edit);
	echo "
	<form name='formEdit' method='post' action='?page=download&aksi=ubah'>
	<h2>Ubah Download </h2>
		<table>
           
            <tr><td>Nama Siswa</td><td>:</td><td><input type='text' name='nama' value='$r[nama_low]' size='50'></td></tr>
			
            <tr><td><input type='hidden' name='id' value='$r[id_low]' size='50'></td></tr>
            
		
		
		<tr><td colspan='3' align='center'>
			<input type=submit class='btn-success' name='submit' value=Ubah>
			<input type=button class='btn-success' value=Batal onclick=self.history.back()>
		</td></tr>
		</table>
	</form>";
	break;
//queri pengubahan
case "ubah":
	if ($_POST['submit'] == 'Ubah') {
	   $query="UPDATE download_lowongan SET  nama_low='$_POST[nama]'
			WHERE id_low= '$_POST[id]'";
		mysql_query($query);
        //echo $query;
		echo "<meta http-equiv='refresh' content='0; ?page=download'>";
	}
	break;
    
}
?>
</html>