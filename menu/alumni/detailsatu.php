<div class="post">
	<h2 class="title"><a href="#">DAFTAR PROFIL ALUMNI</a></h2>
    
    	<style>
    	.table-striped > tbody > tr:nth-child(odd) {
  background-color: #f9f9f9;
}
    	</style>
    	<table class="table-striped" class="tabelku" >
	<tr bgcolor="#1A669C">
		
		<th width="50" align="center">No</th>
		<th width="100" align="center">NIS</th>
        <th width="300" align="left">Nama Siswa</th>
        <th width="100" align="center">Jurusan</th>
        <th width="100" align="center">Tahun Lulus</th>
        
		<th></th>
	</tr>
	<tr>
		<?php
		include 'res/koneksi.php';
			$a=mysql_query("SELECT A.nis AS nis,A.nama AS nama ,B.nama_jurusan AS jur,C.nama_thun AS thn FROM data_siswa A,kategori_jurusan B,ketegori_tahun C 
            WHERE A.id_jur=B.id_jur and A.id_thun_lulus=C.id_thun and C.nama_thun='$_GET[no]'");
            $no = 1;
			while($b=mysql_fetch_array($a)){
				echo "<tr>
                    <td align='center'>$no</td>
					<td align='center'>$b[nis]</td>
                    <td >$b[nama]</td>
                    <td align='center'>$b[jur]</td>
                    <td align='center'>$b[thn]</td>
                   
					
					<td align='center'><a href='?t=detaildua&no=$b[nis]'>detail</a></td>
				</tr>";
                $no++;
			}
		?>
	</tr>
</table>
	</div>
    
