<div class="post">
		<div class="entry">
		<p><?php
                        include 'res/koneksi.php';
						$sql=mysql_query("select * from berita where id_ber='$_GET[id]'");
						while($s=mysql_fetch_array($sql)){
						?>
                            <h2><?php echo $s['nama_ber']?></h2>
                            <center><img style="center" src="administrator/upload/<?php echo $s['foto_ber'];?>" alt="" width="400" height="200" border="0"/></center>
                            
                            <p>Diposting pada tanggal&nbsp;<?php echo $s['tgl_ber']?> &nbsp;&nbsp;Oleh : &nbsp;<?php echo $s['post_ber']?></a></p>
							<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><?php echo $s['isi_ber']?></p>
          
        
      </p>
						<?php	
						}
				?></p>
	</div>
</div>