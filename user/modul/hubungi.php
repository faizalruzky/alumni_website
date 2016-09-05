<?php
error_reporting(E_ALL & ~E_NOTICE);
switch($_GET['aksi']){
//form menampilkan seluruh berita
default:
echo "<h2>Hubungi Kami</h2>";
echo "<table>
	<td width='20'>NO</td><td width='200'>Nama</td><td width='200'>Email</td><td width='400'>Pesan</td><td width='100'>AKSI</td>";
	$no=1;
	$sql=mysql_query("SELECT * FROM hubungi ORDER BY id desc");
	while ($r=mysql_fetch_array($sql)){
		echo "<tr><td>$no</td>
			<td>$r[nama]</td>
            <td>$r[email]</td>
            <td>$r[pesan]</td>
            <td>
			<a href=?page=hubungi&aksi=hapus&id=$r[id] > Hapus</a></td></tr>";
		$no++;
	}
echo "<table>";
break;
//perintah menghapus
case "hapus":
	mysql_query("DELETE FROM hubungi WHERE id='$_GET[id]'");
    echo "<meta http-equiv='refresh' content='0; ?page=berita'>";
	break;
}
?>