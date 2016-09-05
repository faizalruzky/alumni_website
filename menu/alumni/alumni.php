<div class="post">
	<h2 class="title"><a href="#">PROFIL ALUMNI</a></h2>
    <p>Daftar Siswa dan Siswi Alumni dari tahun ke tahun dengan berdasarkan Tahun kelulusannya</p>
	
	
		
<table class="tabelku"  >

	<tr>
		<?php
		 include 'res/koneksi.php';
			$a=mysql_query("SELECT DISTINCT B.nama_thun AS thn FROM kategori_jurusan A,ketegori_tahun B,data_siswa C 
                WHERE A.id_jur=C.id_jur and C.id_thun_lulus=B.id_thun order by B.nama_thun desc");
            $no = 1;
			while($b=mysql_fetch_array($a)){
				echo "<tr>
                    <td >$no.	</td>
                    <td > Daftar Alumni yang Lulus pada Tahun :</td>
                    <td align='center'><a href='?t=detailsatu&no=$b[thn]'>$b[thn]</a></td>
					
					
					
				</tr>";
                $no++;
			}
		?>
	</tr>
</table>


	</div>
