<div class="post">
	<h2 class="title"><a href="#">BEASISWA</a></h2>
	<div class="entry">
		<p><?php
                        include 'res/koneksi.php';
						$sql=mysql_query("select * from beasiswa where id_beasiswa='$_GET[id]'");
						while($s=mysql_fetch_array($sql)){
						?>
                            <h2><?php echo $s['nama_beasiswa']?></h2>
                            
                            
                            <p>Diposting pada tanggal&nbsp;<?php echo $s['tgl_beasiswa']?></p>
							<p align="justify"></a><?php echo $s['isi_beasiswa']?></a></p>
                            <p><a href="administrator/dokumen/<?php echo $s[file]?>">Download Formulir</a></p>
                            
          
        
      </p>
						<?php	
						}
				?></p>
	</div>
</div>