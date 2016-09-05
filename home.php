<div class="post">
	<h2 class="title"><a href="#">HOME</a></h2>
	<div class="entry">
		<p><?php
                        include 'res/koneksi.php';
                        $sql=mysql_query("select * from berita order by id_ber desc limit 5 ");
                         
							while($s=mysql_fetch_array($sql)){
						?>
                            <h2><?php echo $s['nama_ber']?></h2>
                            <p>Diposting pada tanggal&nbsp;<?php echo $s['tgl_ber']?> &nbsp;&nbsp;Oleh : &nbsp;<?php echo $s['post_ber']?></a></p>
                            <img src="administrator/upload/<?php echo $s['foto_ber'];?>" alt="" width="200" height="140" border="0"/>
                            
                            <p align="justify"></p>
                            <?php echo $isi= substr($s['isi_ber'],0,300);
                        $isi = substr($s['isi_ber'],0,strrpos($isi,""));
          ?>
          <span><a style="color: red;" href="?t=readmore&id=<?php echo $s['id_ber'] ?>"></br>readmore...</a></span>
        
      </p>
						<?php	
						}
				?></p>
	</div>
</div>