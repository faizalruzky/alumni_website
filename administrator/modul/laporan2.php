<html>
	<head></head>
<body>
    <div class="post">
        <h2 class="title"><a href="#">DAFTAR PROFIL ALUMNI</a></h2>
		<style>
            .table-striped > tbody > tr:nth-child(odd) 
            {
                background-color: #f9f9f9;
            }
		</style>
                <?php
					mysql_connect("localhost","root","");
					mysql_select_db("db_alumnisman");					
					$query ="SELECT A.nis AS nis,A.nama AS nama ,B.nama_jurusan AS jur,A.alamat AS alamat,A.no_hp AS hp,A.email AS email,A.kegiatan AS kegiatan,A.nama_perusahaan AS nama_perusahaan,A.perguruan_tinggi AS pt, A.nama_perguruan_tinggi AS nama_perguruan_tinggi, C.nama_thun AS thn FROM data_siswa A,kategori_jurusan B,ketegori_tahun C WHERE A.id_jur=B.id_jur and A.id_thun_lulus=C.id_thun and C.nama_thun=".$tahun;//echo $query;exit();
                    $a=mysql_query($query);
                    $no = 1;
					echo"<table border='1'>
            				<tr bgcolor='#0099FF'>
                			<th align='center'>No</th>
							<th align='center'>NIS</th>
							<th align='left'>Nama Siswa</th>
							<th align='center'>Jurusan</th>
							<th align='center'>Alamat</th>
							<th align='center'>No. Hp</th>
							<th align='center'>E-mail</th>
							<th align='center'>Tahun Lulus</th>
							<th align='center'>Aktivitas</th>
							<th align='center'>Nama Perusahaan</th>
							<th align='center'>Perguruan Tinggi</th>
							<th align='center'>Nama Perguruan Tinggi</th>
						</tr>";
                    while($b=mysql_fetch_array($a)){
                        echo "<tr>
                            <td align='center'>$no</td>
                            <td>$b[nis]</td>
                            <td>$b[nama]</td>
                            <td>$b[jur]</td>
                            <td>$b[alamat]</td>
                            <td>$b[hp]</td>
                            <td>$b[email]</td>
                            <td>$b[thn]</td>
                            <td>$b[kegiatan]</td>
                            <td>$b[nama_perusahaan]</td>
                            <td>$b[pt]</td>
                            <td>$b[nama_perguruan_tinggi]</td>
                        </tr>";
                        $no++;
                    }
                ?>
            </tr>
        </table>
        <br><br>
        <a href="../administrator/modul/eksport.php?no=<?php echo $tahun ?>" ><input type="button" value="Export/Download"/></a>
	</div>
</html>