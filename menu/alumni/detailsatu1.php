<link href="css/bootstrap3.3.1.css" rel="stylesheet">
<div  class="post">
	<h2 class="title"><a href="#">DAFTAR PROFIL ALUMNI</a></h2>
    <table class="table-striped" width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
	<tr>
		<!-- <tr bgcolor="#1d1d19"> -->
		<th width="10%" scope="col" align="center">No</th>
		<th width="15%" scope="col" align="center">NIS</th>
        <th width="30%" scope="col" align="center">Nama Siswa</th>
        <th width="15%" scope="col" align="center">Jurusan</th>
        <th width="15%" scope="col" align="center">Tahun Lulus</th>

		<!-- <th width="50" align="center">No</th>
		<th width="100" align="center">NIS</th>
        <th width="300" align="center">Nama Siswa</th>
        <th width="100" align="center">Jurusan</th>
        <th width="100" align="center">Tahun Lulus</th> -->
        
	</tr>
	<tr>
		<?php
		include 'res/koneksi.php';
			$a=mysql_query("SELECT A.nis AS nis,A.nama AS nama ,B.nama_jurusan AS jur,C.nama_thun AS thn FROM data_siswa A,kategori_jurusan B,ketegori_tahun C 
            WHERE A.id_jur=B.id_jur and A.id_thun_lulus=C.id_thun and C.nama_thun='$_GET[no]'");
            $no = 1;
			while($b=mysql_fetch_array($a)){
				echo "<tr>
                    <td>$no</td>
					<td >$b[nis]</td>
                    <td >$b[nama]</td>
                    <td >$b[jur]</td>
                    <td align='center'>$b[thn]</td>
                   
					
					<td width='5% ' ><a href='?t=detaildua&no=$b[nis]'>detail</a></td>
				</tr>";
                $no++;
			}
		?>
	</tr>
</table>
	</div>
    
