<div class="post">
	<h2 class="title"><a href="#">DETAIL PROFIL ALUMNI</a></h2>
    <table  class="tabelku" >
	
	<tr>
		<?php
		include 'res/koneksi.php';
			$a=mysql_query("SELECT A.nis AS nis,A.nama AS nama ,B.nama_jurusan AS jur,C.nama_thun AS thn ,A.kegiatan AS kegiatan,A.alamat AS alamat,A.no_hp AS hp,
            A.email AS email,A.foto_siswa AS foto,A.kritik_saran AS saran
            FROM data_siswa A,kategori_jurusan B,ketegori_tahun C
            WHERE A.id_jur=B.id_jur and A.id_thun_lulus=C.id_thun  and A.nis='$_GET[no]'");
            
			while($r=mysql_fetch_array($a)){
			 
			
			echo "<form enctype=multipart/form-data>
				<table border=0>
                <tr>
					<td width=80>FOTO</td>
					<td><img src=admin/foto/$r[foto] width=140 height=190 border=1/></td>
				</tr>
				<tr>
					<td width=80>NIS</td>
					<td><input type=text name=No size=10 value='$r[nis]'readonly></td>
				</tr>
                <tr>
					<td width=80 >NAMA</td>
					<td><input type=text name=Nama size=30 value='$r[nama]'readonly></td>
				</tr>
               <tr>
					<td width=80 >ALAMAT</td>
                    <td><textarea  name=alamat rows=4 cols=40 readonly>$r[alamat]</textarea></td>
					
				</tr>
				
                <tr>
					<td width=80 >JURUSAN</td>
					<td><input type=text name=jurusan size=10 value='$r[jur]'readonly></td> 
				</tr>
                <tr>
					<td width=80 >LULUS</td>
					<td><input type=text name=llus size=10 value='$r[thn]'readonly></td> 
				</tr>
				<tr>
					<td width=80 >KEGIATAN</td>
					<td><input type=text name=kegiatan size=10 value='$r[kegiatan]'readonly></td> 
				</tr>
                <tr>
					<td width=80 >NO HP</td>
					<td><input type=text name=hp size=15 value='$r[hp]'readonly></td> 
				</tr>
                <tr>
					<td width=80 >EMAIL</td>
					<td><input type=text name=email size=30 value='$r[email]'readonly></td> 
				</tr>
                <tr>
					<td width=80 >PESAN</td>
					<td><textarea  name=isi rows=4 cols=40 readonly>$r[saran]</textarea></td>
				</tr>
                <td></td>
				
				</table>
			</form>";
			}
		?>
        
        
	</tr>
</table>
	</div>
    
