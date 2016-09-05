
<div class="post">
	<h2 class="title"><a href="#">GALERY</a></h2>
	<p class="meta">Sunday, April 26, 2009 7:27 AM Posted by <a href="#">Someone</a></p>
	<div class="entry">
        <?php 
        include 'res/koneksi.php';
        $col = 4;

  $a = mysql_query("SELECT * FROM foto WHERE id_kat_galeri=$_GET[id]");
  echo "<table><tr>";
  $cnt = 0;
  while ($w = mysql_fetch_array($a)) {
    if ($cnt >= $col) {
      echo "</tr><tr>";
      $cnt = 0;
  }
  $cnt++;


 echo "<td align=center valign=top><br />
    <a href='administrator/fotogaleri/$w[nama_file]' title='$w[deskripsi]' class='lightbox' rel='group1'>
    <img  src='administrator/fotogaleri/$w[nama_file]' border=0 width=120 height=90><br />
    $w[deskripsi]</a></td>";
}
echo "</tr></table>";      
        ?>
        
        
	</div>
</div>