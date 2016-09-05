<div class="post">
	<h2 class="title"><a href="#">BEASISWA</a></h2>
	<div class="entry">
		<p><?php
                        include 'res/koneksi.php';
						$sql=mysql_query("select * from beasiswa order by tgl_beasiswa desc limit 8");
						while($s=mysql_fetch_array($sql)){
						?>
                            <h2><?php echo $s['nama_beasiswa']?></h2>
                            <p>Diposting pada tanggal&nbsp;<?php echo $s['tgl_beasiswa']?></p>
                            
                            <p align="justify"></p><?php echo $isi= substr($s['isi_beasiswa'],0,300);
                        $isi = substr($s['isi_beasiswa'],0,strrpos($isi,""));
                            ?>
                            <span><a style="color: red;" href="?t=lampiran&id=<?php echo $s['id_beasiswa'] ?>"></br>readmore...</a></span>
                            </p>
          
        
      
                           
                            
                           
							
						<?php	
						}
				?></p>
	</div>
</div>