<?php session_start(); ?>
<html>
<script>
    function pilihanmu()
        {
            var val = 0;
            for( i = 0; i < document.form1.kegiatan.length; i++ )
            {
                if( document.form1.kegiatan[i].checked == true )
                {
                    val = document.form1.kegiatan[i].value;
                    if(val=='Bekerja')
                    {
                        document.form1.nama_perusahaan.disabled = false;
                        document.form1.pt.disabled = true;
                        document.form1.nama_perguruan_tinggi.disabled = true;       
                    }
                    else
                    {
                        document.form1.nama_perusahaan.disabled = true;
                        document.form1.pt.disabled =false;
                        document.form1.nama_perguruan_tinggi.disabled = false;
                    }
                }
            }
        }
</script>

<style >
input[type=button],[type=submit],[type=reset]{
  background: #1A669C;
  border-radius: 10px;
  color: #FFF;
  position: relative;
  margin: 10px 10px 10px 0px  ;
  padding: 5px;
  width: 110px;
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
echo "Data Alumni <br>
<input type=button  value='Tambah Alumni' onclick=\"window.location.href='?page=alumni&aksi=tambahalumni';\">";
echo "<table>
	<td width='20'>NO</td><td width='50'>NIS</td><td width='500'>NAMA</td><td width='70'>AKSI</td>";
	//$no=1;
    $username=$_SESSION['username'];
	$sql="SELECT * from data_siswa where username='".$username."'";
	//$r=mysql_num_rows($sql);
    $r=mysql_query($sql);
    while ($data=mysql_fetch_array($r)){
		
        echo "<tr><td>1</td>
			<td>$data[nis]</td>
            <td>$data[nama]</td>
            <td>
            <a href=?page=alumni&aksi=edit&id=$r[id_siswa]> Ubah</a>

			</td></tr>";
		//$no++;
	}
echo "<table>";
break;

case "tambahalumni":
//Form Tambah Berita
echo "<h2>Tambah Data Alumni</h2>";



echo "<form name='form1' action='?page=alumni&aksi=tambah' method='post' enctype=\"multipart/form-data\" >
    <table>
        <tr>
            <td>Nis</td>
             <td><input name=nis type=text size=15 ></td>
            
        </tr>
        <tr>
            <td>Nama</td>
            <td><input name=nama type=text size=55></td>
        </tr>
        <tr>
            <td>Kelas/Jurusan</td>
            <td><select name='jur'>
                    <option value=0 selected>-Pilih-</option>";
                    $querykategori= mysql_query("SELECT * FROM kategori_jurusan ORDER BY id_jur");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_jur]>$kategori[nama_jurusan]</option>";
                    }
                    echo "</select></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type=\"file\" name=\"file\" id=\"file\" /></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name=alamat cols=55 row=25></textarea></td>
            
        </tr>
        <tr>
            <td>No HP</td>
            <td><input name=hp type=text size=25></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name=email type=text size=25></td>
        </tr>
        <tr>
            <td>Tahun Lulus</td>
            <td><select name=lulus>
                    <option value=0 selected>-Pilih Tahun-</option>";
                    $querykategori= mysql_query("SELECT * FROM ketegori_tahun ORDER BY id_thun");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_thun]>$kategori[nama_thun]</option>";
                    }
                    echo "</select></td>
        </tr>
		<tr>
            <td>Aktivitas</td>
            <td>
                <input type='radio' name='kegiatan' value='Bekerja' onclick='pilihanmu()'/>Bekerja</label>&nbsp;&nbsp;
                <input type='radio' name='kegiatan' value='Sekolah' onclick='pilihanmu()'/>Sekolah</label><br>
            </td>
        </tr>
		<tr>
            <td>Nama Perusahaan*</td>
            <td><input name=nama_perusahaan id='np' type=text size=55 disabled=''></td>
        </tr>
		<tr>
            <td>Perguruan Tinggi**</td>
            <td>
                <select name = 'pt' disabled=''>
                    <option value=0 selected>-Pilih-</option>
                    <option value='PTN'>Perguruan Tinggi Negeri(PTN)</option>
                    <option value='PTN'>Perguruan Tinggi Swasta(PTS)</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama Perguruan Tinggi**</td>
            <td><input name=nama_perguruan_tinggi id='npt' type=text size=55 disabled=''></td>
        </tr>
        <tr>
            <td>Saran</td>
            <td><textarea name=saran cols=55 row=25></textarea></td>
            
        </tr>
        <tr>
            <td colspan=2><input type=submit name='submit' value=Simpan>
                          <input type='reset'  value='Reset'>
                          <input type=button  value=Kembali onclick=self.history.back()>
            </td> 
        </tr>
    </table>

</form>";
echo "*Isi jika kegiatan sedang Bekerja <br />";
echo "**Isi jika kegiatan sedang Sekolah";
break;
//perintah menyimpan berita
case "tambah":
	
	   if($_POST['submit'] == 'Simpan' && !empty($_FILES) && $_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){
	$fileName = $_FILES['file']['name'];
	$move = move_uploaded_file($_FILES['file']['tmp_name'], 'foto/'.$fileName);
	if($move){
		$sql=("INSERT INTO data_siswa VALUES ('','$_POST[nis]','$_POST[nama]','','','$_POST[jur]','$_POST[alamat]','$_POST[hp]','$_POST[email]','$_POST[lulus]','$_POST[kegiatan]','$_POST[nama_perusahaan]','$_POST[pt]','$_POST[nama_perguruan_tinggi]','$fileName','$_POST[saran]')");
		mysql_query($sql);
        
        echo "<meta http-equiv='refresh' content='0; ?page=alumni'>";
        exit;
	}
    }
    
    
	break;
//perintah menghapus
case "hapus":
	mysql_query("DELETE FROM data_siswa WHERE id_siswa='$_GET[id]'");
    echo "<meta http-equiv='refresh' content='0; ?page=alumni'>";
	break;
//form pengeditan


case "edit":
/*$query="select data_siswa.*, kategori_jurusan.nama_jurusan,ketegori_tahun.nama_thun, data_siswa.kegiatan from data_siswa join kategori_jurusan on kategori_jurusan.id_jur=data_siswa.id_jur join ketegori_tahun on ketegori_tahun.id_thun=data_siswa.id_thun_lulus where id_siswa='$_GET[id]'";*/

	/*$query="select  data_siswa.nis,id_thun, data_siswa.nama,data_siswa.username, data_siswa.password, kategori_jurusan.id_jur,data_siswa.id_siswa, kategori_jurusan.nama_jurusan, data_siswa.alamat, data_siswa.no_hp, data_siswa.email, ketegori_tahun.nama_thun, data_siswa.kegiatan, data_siswa.nama_perusahaan, data_siswa.perguruan_tinggi,data_siswa.nama_perguruan_tinggi, data_siswa.kritik_saran from data_siswa inner join kategori_jurusan on kategori_jurusan.id_jur=data_siswa.id_jur inner join ketegori_tahun on ketegori_tahun.id_thun=data_siswa.id_thun_lulus where id_siswa='$_GET[id]'";*/

    $query="select * from data_siswa ";

	//echo $query;exit();
	$edit=mysql_query($query);
	
	$r=mysql_fetch_array($edit);
	echo "
	<form name='form1' method='post' action='?page=alumni&aksi=ubah'>
	<h2>Ubah Alumni </h2>
		<table>
            <tr><td>NIS</td>
			<td><input type='text' name='nis' value='$r[nis]' size='50'></td></tr>
            <tr><td>Nama Siswa</td><td><input type='text' name='nama' value='$r[nama]' size='50'></td></tr>
			
            <tr><td><input type='hidden' name='id' value='$r[id_siswa]' size='50'></td></tr>
            <tr><td><input type='hidden' name='username' value='$r[username]' size='50'></td></tr>
            <tr><td><input type='hidden' name='password' value='$r[password]' size='50'></td></tr>
            <tr>
            <td> Ubah Kelas/Jurusan</td>
            <td><select name='jur'>
                    <option value=$r[id_jur] selected>$r[nama_jurusan]</option>";
                    $querykategori= mysql_query("SELECT * FROM kategori_jurusan ORDER BY id_jur");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_jur]>$kategori[nama_jurusan]</option>";
                    }
                    echo "</select></td>
        </tr>
		<tr>
            <td>Foto</td>
            <td><input type=\"file\" name=\"file\" id=\"file\" /></td>
        </tr>
		<tr><td>Alamat</td><td><textarea rows='5' cols='40' name='alamat'>$r[alamat]</textarea></td></tr>
        <tr><td>No HP</td><td><input type='text' name='hp' value='$r[no_hp]' size='50'></td></tr>
        <tr><td>Email</td><td><input type='text' name='email' value='$r[email]' size='50'></td></tr>
        <tr>
            <td>Ubah Tahun Lulus</td>
            <td><select name='lulus'>
                    <option value=$r[id_thun] selected > $r[nama_thun]</option>";
                    $querykategori= mysql_query("SELECT * FROM ketegori_tahun ORDER BY id_thun");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_thun]>$kategori[nama_thun]</option>";
                    }
                    echo "</select></td>
        </tr>
		<tr>
            <td>Aktivitas</td>
            <td>
                <input type='radio' name='kegiatan' value='Bekerja' onclick='pilihanmu()'/>Bekerja</label>&nbsp;&nbsp;
                <input type='radio' name='kegiatan' value='Sekolah' onclick='pilihanmu()'/>Sekolah</label><br>
            </td>
        </tr>
        <tr>
            <td>Nama Perusahaan*</td>
            <td><input type='text' name='nama_perusahaan' value='$r[nama_perusahaan]' size='55'></td>
        </tr>
        <tr>
            <td>Perguruan Tinggi</td>
            <td><select name = 'pt'>
                    <option>$r[perguruan_tinggi]</option>
                    <option value='PTN'>Perguruan Tinggi Negeri(PTN)</option>
                    <option value='PTS'>Perguruan Tinggi Swasta(PTS)</option>
                    </select></td>
        </tr>
        <tr>
            <td>Nama Perguruan Tinggi**</td>
            <td><input name=nama_perguruan_tinggi value='$r[nama_perguruan_tinggi]' type=text size=55></td>
        </tr>
        <tr><td>Saran</td><td><textarea rows='5' cols='40' name='saran'>$r[kritik_saran]</textarea></td></tr>
		<tr><td colspan='3' align='center'>
			<input type=submit  name='submit' value=Ubah>
			<input type=button  value=Batal onclick=self.history.back()>
		</td></tr>
		</table>
	</form>";
	break;
//queri pengubahan
case "ubah":

/*if(empty($fileName))   //jika gambar kosong atau tidak di ganti
{
$query="UPDATE data_siswa SET  nis='$_POST[nis]',nama='$_POST[nama]',id_jur='$_POST[jur]',alamat='$_POST[alamat]',no_hp='$_POST[hp]',email='$_POST[email]',id_thun_lulus='$_POST[lulus]',kegiatan='$_POST[kegiatan]',nama_perusahaan='$_POST[nama_perusahaan]',perguruan_tinggi='$_POST[pt]',nama_perguruan_tinggi='$_POST[nama_perguruan_tinggi]',kritik_saran='$_POST[saran]'
            WHERE id_siswa = '$_POST[id]'" or die ("gagal update ");
        //  echo $query;exit();
        mysql_query($query);
        echo "<script>alert ('data telah di update '); </script> ";
        echo "<meta http-equiv='refresh' content='0; ?page=alumni'>";
    }
    else*/
    $query="UPDATE data_siswa SET  nis='$_POST[nis]',nama='$_POST[nama]',id_jur='$_POST[jur]',alamat='$_POST[alamat]',no_hp='$_POST[hp]',email='$_POST[email]',id_thun_lulus='$_POST[lulus]',kegiatan='$_POST[kegiatan]',nama_perusahaan='$_POST[nama_perusahaan]',perguruan_tinggi='$_POST[pt]',nama_perguruan_tinggi='$_POST[nama_perguruan_tinggi]',foto_siswa='$_POST[file]',kritik_saran='$_POST[saran]'
            WHERE id_siswa = '$_POST[id]'" or die ("gagal update ");
        //  echo $query;exit();
        mysql_query($query);
        echo "<script>alert ('data telah di update '); </script> ";
        echo "<meta http-equiv='refresh' content='0; ?page=alumni'>";
    
/*    $id_siswa=$_GET['id'];
    $foto=$_FILES['gambar']['tmp_name'];
    $foto_name=$_FILES['gambar']['name'];
    $acak=rand(1,99);
    $tujuan_foto=$acak.$foto_name;
    $tempat_foto='img/'.$tujuan_foto;

	if (isset($_POST['update'])) {
	//var_dump($_POST);exit();
	   if(!$foto==""){
        $buat_foto=$tujuan_foto;
        $d='img/'.$id_siswa;
        @unlink("$d");
        copy($foto,$tempat_foto);
    }else{
    $buat_foto=$x;
}
       $query="UPDATE data_siswa SET  nis='$_POST[nis]',nama='$_POST[nama]',id_jur='$_POST[jur]',alamat='$_POST[alamat]',no_hp='$_POST[hp]',email='$_POST[email]',id_thun_lulus='$_POST[lulus]',kegiatan='$_POST[kegiatan]',nama_perusahaan='$_POST[nama_perusahaan]',perguruan_tinggi='$_POST[pt]',nama_perguruan_tinggi='$_POST[nama_perguruan_tinggi]',foto_siswa='$buat_foto',kritik_saran='$_POST[saran]'
			WHERE id_siswa = '$id'" or die (mysql_error());
		//	echo $query;exit();
		mysql_query($query);
        
		echo "<meta http-equiv='refresh' content='0; ?page=alumni'>";
  }*/
/*if ($_POST['submit'] == 'Ubah') {

    //var_dump($_POST);exit();
       $query="UPDATE data_siswa SET  nis='$_POST[nis]',nama='$_POST[nama]',id_jur='$_POST[jur]',alamat='$_POST[alamat]',no_hp='$_POST[hp]',email='$_POST[email]',id_thun_lulus='$_POST[lulus]',kegiatan='$_POST[kegiatan]',nama_perusahaan='$_POST[nama_perusahaan]',perguruan_tinggi='$_POST[pt]',nama_perguruan_tinggi='$_POST[nama_perguruan_tinggi]',foto_siswa='$fileName',kritik_saran='$_POST[saran]'
            WHERE id_siswa = '$_POST[id]'";
        //  echo $query;exit();
        mysql_query($query);
        
        echo "<meta http-equiv='refresh' content='0; ?page=alumni'>";
    }*/
	
    
}
?>
</html>