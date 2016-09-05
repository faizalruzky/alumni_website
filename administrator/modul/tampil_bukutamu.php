<html>
<h3>Buku Tamu</h3>
<style type="text/css">
	body { font: 100% Arial, Helvetica}
	table{background-color: transparent;}
	
</style>
<div style="overflow:auto; width:100%px; height:400px; padding:10px; border:1px solid transparant">
<?php
include './../res/koneksi.php';


$tampil = "SELECT * FROM bukutamu ORDER BY id";
$hasil = mysql_query($tampil);
echo "<table>";
$no=1;
while($data = mysql_fetch_array($hasil)){
	echo "<tr><td>$no<td>";
	echo "<td>Nama : $data[nama] <br />";
	echo "E-mail : $data[email] <br />";
	echo "Pesan : $data[pesan] <br /></td></tr><hr />";
	$no++;
	echo"<table>";
}
?>
</div>
</html>