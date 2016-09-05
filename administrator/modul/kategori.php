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
<?php
error_reporting(E_ALL & ~E_NOTICE);

switch($_GET['aksi']){
//form menampilkan seluruh berita
default:
echo "Daftar Kategori <br>
<input type=button class='btn-success' value='Tambah Kategori' onclick=\"window.location.href='?page=kategori&aksi=tambahkategori';\">";
echo "<table>
	<td width='20'>NO</td><td width='500'>Kategori</td><td width='70'>AKSI</td>";
	$no=1;
	$sql=mysql_query("SELECT * FROM kategori_jurusan ORDER BY nama_jurusan ");
	while ($r=mysql_fetch_array($sql)){
		echo "<tr><td>$no</td>
			<td>$r[nama_jurusan]</td><td>
			<a href=?page=kategori&aksi=edit&id=$r[id_jur]> Ubah</a>
			<a href=?page=kategori&aksi=hapus&id=$r[id_jur] > Hapus</a></td></tr>";
		$no++;
	}
echo "<table>";
break;

case "tambahkategori":
//Form Tambah Berita
echo "<h2>Tambah Kategori</h2>";
echo "<form action='?page=kategori&aksi=tambah' method='post' >
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
case "tambah":
	if ($_POST['submit'] == 'Simpan') {
		$sql=mysql_query("INSERT INTO kategori_jurusan(nama_jurusan) VALUES ('$_POST[kategori]')");
		//$sql;
        echo "<meta http-equiv='refresh' content='0; ?page=kategori'>";
	}
	break;
//perintah menghapus
case "hapus":
	mysql_query("DELETE FROM kategori_jurusan WHERE id_jur='$_GET[id]'");
    echo "<meta http-equiv='refresh' content='0; ?page=kategori'>";
	break;
//form pengeditan


case "edit":
	$edit=mysql_query("SELECT * FROM kategori_jurusan WHERE id_jur='$_GET[id]'");
    $r=mysql_fetch_array($edit);
	echo "
	<form name='formEdit' method='post' action='?page=kategori&aksi=ubah'>
	<h2>Ubah Berita </h2>
		<table>
            <tr><td><input type='hidden' name='id' value='$r[id_jur]' size='50'></td></tr>
		<tr><td>Kategori</td><td>:</td><td><input type='text' name='kategori' value='$r[nama_jurusan]' size='50'></td></tr>
        
		
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
	   $query="UPDATE kategori_jurusan SET  nama_jurusan='$_POST[kategori]' 
			WHERE id_jur= '$_POST[id]'";
		mysql_query($query);
        //echo $query;
		echo "<meta http-equiv='refresh' content='0; ?page=kategori'>";
	}
	break;
    
}
?>
</html>