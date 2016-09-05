<li>
      <hr size="1"/>
      <?php
                        
                        include 'res/koneksi.php';
						$sql=mysql_query("select * from download_lowongan  order by id_low desc limit 5 ");
						while($s=mysql_fetch_array($sql)){
						?>
                            <p><a href="administrator/filedown/<?php echo $s['file'] ?>"><?php echo $s['nama_low']?></a></p>
                            
						<?php	
						}
				?>
      </li>