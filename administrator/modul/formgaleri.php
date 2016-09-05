<html>
<style >
input[type=button],[type=submit],[type=reset]{
  background: #1A669C;
  border-radius: 10px;
  color: #FFF;
  position: relative;
  margin: 10px 10px 10px 0px  ;
  padding: 5px;
  width: 100px;
}
.btn-success:hover { /*--Hover effect for subnav links--*/
  background-color: #65C7F9;
cursor: pointer;
}
</style>
<div style="overflow:auto; width:100%px; height:400px; padding:10px; border:1px solid transparant">
<?php
error_reporting(E_ALL & ~E_NOTICE);

switch($_GET['aksi']){
//form menampilkan seluruh berita
default:
echo "Tabel Galeri <br>
<input type=button class='btn-success' value='Tambah Galeri' onclick=\"window.location.href='?page=inputgaleri&aksi=tambahgaleri';\">";
echo "<table>
	<td width='20'>NO</td><td width='200'>Nama File</td><td width='300'>Deskripsi</td><td width='70'>AKSI</td>";
	$no=1;
	$sql=mysql_query("SELECT * FROM foto ORDER BY id desc");
	while ($r=mysql_fetch_array($sql)){
		echo "<tr><td>$no</td>
			<td>$r[nama_file]</td>
            <td>$r[deskripsi]</td>
            <td>
            
		
			<a href=?page=inputgaleri&aksi=hapus&id=$r[id] > Hapus</a></td></tr>";
		$no++;
	}
echo "<table>";
break;

case "tambahgaleri":
//Form Tambah Berita
echo "<h2>Tambah Galeri</h2>";



echo "<form action='?page=inputgaleri&aksi=tambah' method='post' enctype=\"multipart/form-data\" >
    <table>
        
        
        <tr>
            <td>Kategori</td>
            <td><select name=kat>
                    <option value=0 selected>-Pilih Kategori-</option>";
                    $querykategori= mysql_query("SELECT * FROM kategori_galeri ORDER BY id_kat_galeri");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_kat_galeri]>$kategori[nama_kat_galeri]</option>";
                    }
                    echo "</select></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type=\"file\" name=\"file\" id=\"file\" required/></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><textarea name=isi cols=55 row=25 required></textarea></td>
            
        </tr>
        
        <tr>
            <td colspan=2><input type=submit class='btn-success' name='submit' value=Simpan>
                          <input type='reset' class='btn-success' value='Reset'>
                          <input type=button class='btn-success' value=Kembali onclick=self.history.back()>
            </td> 
        </tr>
    </table>

</form>";
break;
//perintah menyimpan berita
case "tambah":
	
	   if($_POST['submit'] == 'Simpan' && !empty($_FILES) && $_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){
	$fileName = $_FILES['file']['name'];
	$move = move_uploaded_file($_FILES['file']['tmp_name'], 'fotogaleri/'.$fileName);
	if($move){
		$sql=("INSERT INTO foto(nama_file,deskripsi,id_kat_galeri) 
        VALUES ('$fileName','$_POST[isi]','$_POST[kat]')");
		mysql_query($sql);
        
        echo "<meta http-equiv='refresh' content='0; ?page=inputgaleri'>";
        exit;
	}
    }
    
    
	break;
//perintah menghapus
case "hapus":
	mysql_query("DELETE FROM foto WHERE id='$_GET[id]'");
    echo "<meta http-equiv='refresh' content='0; ?page=inputgaleri'>";
	break;
//form pengeditan


case "edit":


	$edit=mysql_query("SELECT * FROM data_siswa WHERE id_siswa='$_GET[id]'");
    $r=mysql_fetch_array($edit);
	echo "
	<form name='formEdit' method='post' action='?page=alumni&aksi=ubah'>
	<h2>Ubah ALmuni </h2>
		<table>
            <tr><td>NIS</td><td>:</td><td><input type='text' name='nis' value='$r[nis]' size='50'></td></tr>
            <tr><td>Nama Siswa</td><td>:</td><td><input type='text' name='nama' value='$r[nama]' size='50'></td></tr>
			
            <tr><td><input type='hidden' name='id' value='$r[id_siswa]' size='50'></td></tr>
            <tr>
            <td> Ubah Jurusan</td>
            <td><select name=jur>
                    <option value=0 selected>-Pilih Jurusan-</option>";
                    $querykategori= mysql_query("SELECT * FROM kategori_jurusan ORDER BY id_jur");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_jur]>$kategori[nama_jurusan]</option>";
                    }
                    echo "</select></td>
        </tr>
		
		<tr><td>Alamat</td><td>:</td><td><textarea rows='5' cols='40' name='alamat'>$r[alamat]</textarea></td></tr>
        <tr><td>No HP</td><td>:</td><td><input type='text' name='hp' value='$r[no_hp]' size='50'></td></tr>
        <tr><td>Email</td><td>:</td><td><input type='text' name='email' value='$r[email]' size='50'></td></tr>
        <tr>
            <td>Ubah Tahun</td>
            <td><select name=lulus>
                    <option value=0 selected>-Pilih Tahun-</option>";
                    $querykategori= mysql_query("SELECT * FROM ketegori_tahun ORDER BY id_thun");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_thun]>$kategori[nama_thun]</option>";
                    }
                    echo "</select></td>
        </tr>
        <tr><td>Saran</td><td>:</td><td><textarea rows='5' cols='40' name='saran'>$r[kritik_saran]</textarea></td></tr>
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
	   $query="UPDATE data_siswa SET  nis='$_POST[nis]',nama='$_POST[nama]',id_jur='$_POST[jur]',alamat='$_POST[alamat]',no_hp='$_POST[hp]',email='$_POST[email]',id_thun_lulus='$_POST[lulus]',kritik_saran='$_POST[saran]'
			WHERE id_siswa= '$_POST[id]'";
		mysql_query($query);
        //echo $query;
		echo "<meta http-equiv='refresh' content='0; ?page=alumni'>";
	}
	break;
    
}
?>
</div>
</html>