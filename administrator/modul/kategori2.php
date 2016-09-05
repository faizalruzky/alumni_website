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
echo "Daftar Kategori <br>
<input type=button class='btn-success' value='Tambah Kategori' onclick=\"window.location.href='?page=kategori2&aksi=tambahkategori2';\">";
echo "<table>
	<td width='20'>NO</td><td width='500'>Kategori</td><td width='70'>AKSI</td>";
	$no=1;
	$sql=mysql_query("SELECT * FROM ketegori_tahun ORDER BY nama_thun ");
	while ($r=mysql_fetch_array($sql)){
		echo "<tr><td>$no</td>
			<td>$r[nama_thun]</td><td>
			<a href=?page=kategori2&aksi=edit2&id=$r[id_thun]> Ubah</a>
			<a href=?page=kategori2&aksi=hapus2&id=$r[id_thun] > Hapus</a></td></tr>";
		$no++;
	}
echo "<table>";
break;

case "tambahkategori2":
//Form Tambah Berita
echo "<h2>Tambah Kategori Tahun</h2>";
echo "<form action='?page=kategori2&aksi=tambah2' method='post' >
    <table>
        <tr>
            <td>Nama Kategori</td>
            <td><input name=kategori type=text size=55></td>
        </tr>
        <tr>
            
            
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
case "tambah2":
	if ($_POST['submit'] == 'Simpan') {
		$sql=mysql_query("INSERT INTO ketegori_tahun(nama_thun) VALUES ('$_POST[kategori]')");
		//$sql;
        echo "<meta http-equiv='refresh' content='0; ?page=kategori2'>";
	}
	break;
//perintah menghapus
case "hapus2":
	mysql_query("DELETE FROM ketegori_tahun WHERE id_thun='$_GET[id]'");
    echo "<meta http-equiv='refresh' content='0; ?page=kategori2'>";
	break;
//form pengeditan


case "edit2":
	$edit=mysql_query("SELECT * FROM ketegori_tahun WHERE id_thun='$_GET[id]'");
    $r=mysql_fetch_array($edit);
	echo "
	<form name='formEdit' method='post' action='?page=kategori2&aksi=ubah2'>
	<h2>Ubah Berita </h2>
		<table>
            <tr><td><input type='hidden' name='id' value='$r[id_thun]' size='50'></td></tr>
		<tr><td>Kategori</td><td>:</td><td><input type='text' name='kategori' value='$r[nama_thun]' size='50'></td></tr>
        
		
		<tr><td colspan='3' align='center'>
			<input type=submit class='btn-success' name='submit' value=Ubah>
			<input type=button class='btn-success' value=Batal onclick=self.history.back()>
		</td></tr>
		</table>
	</form>";
	break;
//queri pengubahan
case "ubah2":
	if ($_POST['submit'] == 'Ubah') {
	   $query="UPDATE ketegori_tahun SET  nama_thun='$_POST[kategori]' 
			WHERE id_thun= '$_POST[id]'";
		mysql_query($query);
        //echo $query;
		echo "<meta http-equiv='refresh' content='0; ?page=kategori2'>";
	}
	break;
    
}
?>
</div>
</html>