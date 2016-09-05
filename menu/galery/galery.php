
<div class="post">
	<h2 class="title"><a href="#">Album Foto</a></h2>
	<div class="entry">
		
        <?php 
        include 'res/koneksi.php';
        $col = 4;

  $a = mysql_query("SELECT * FROM `kategori_galeri`");
  echo "<table><tr>";
  $cnt = 0;
  while ($w = mysql_fetch_array($a)) {
    if ($cnt >= $col) {
      echo "</tr><tr>";
      $cnt = 0;
  }
  $cnt++;


 echo "<td align=center valign=top><br />
    <a href=\"?t=detailgalery&id=$w[id_kat_galeri]\" title='$w[nama_kat_galeri]' >
    <img src='administrator/fotogaleri/$w[cover]' border=0 width=120 height=90><br />
    $w[nama_kat_galeri]</a></td>";
}
echo "</tr></table>";      
        ?>
        
        
	</div>
</div>