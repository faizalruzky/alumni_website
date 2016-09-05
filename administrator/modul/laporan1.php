<div class="post">
	<h2 class="title"><a href="#">Data Alumni</a></h2>
    <p><b>Daftar Siswa dan Siswi Alumni dari tahun ke tahun dengan berdasarkan Tahun kelulusannya</b></p>	
<table class="tabelku"  >
	<tr>
		<?php
		 include('../res/koneksi.php');
			$a=mysql_query("select ketegori_tahun.nama_thun as thn from data_siswa join ketegori_tahun on ketegori_tahun.id_thun = data_siswa.id_thun_lulus group by id_thun_lulus order by ketegori_tahun.nama_thun desc");
            $no = 1;
			while($b=mysql_fetch_array($a)){
				echo "<tr>
                    <td >$no.	</td>
                    <td > Daftar Alumni yang Lulus pada Tahun :</td>
                    <td align='center'><a href=?page=laporan2&no=$b[thn]>$b[thn]</a></td>	
				</tr>";
                $no++;
			}
		?>
	</tr>
</table>
</div>
