
<?php session_start();
include "../../res/koneksi.php";
require_once("dompdf/dompdf_config.inc.php");
$username=$_SESSION['username'];
$a=mysql_query("SELECT A.id_siswa As id_siswa, A.nis AS nis,A.nama AS nama ,B.nama_jurusan AS jur,C.nama_thun AS thn ,A.alamat AS alamat,A.no_hp AS hp,A.kegiatan AS kegiatan,A.nama_perusahaan AS nama_perusahaan,A.nama_perguruan_tinggi AS nama_perguruan_tinggi,
            A.email AS email,A.foto_siswa AS foto,A.kritik_saran AS saran
            FROM data_siswa A,kategori_jurusan B,ketegori_tahun C 
            WHERE A.id_jur=B.id_jur and A.id_thun_lulus=C.id_thun and username='".$username."'");
            
            while($r=mysql_fetch_array($a)){
            $id=$r['id_siswa'];
            echo "<center>
                <h2>Profil Alumni </h2></center>
                <table border=0>
                
                <tr>
                    <td width=190>NIS</td>
                    <td>$r[nis]</td>
                </tr>
                <tr>
                    <td width=80 >Nama Siswa</td>
                    <td>$r[nama]</td>
                </tr>
               <tr>
                    <td width=80 >Alamat</td>
                    <td>$r[alamat]</td>
                    
                </tr>
                
                <tr>
                    <td width=80 >Jurusan</td>
                    <td>$r[jur]</td> 
                </tr>
                <tr>
                    <td width=80 >Tahun Lulus</td>
                    <td>$r[thn]</td> 
                </tr>
                <tr>
                    <td width=80 >Aktivitas</td>
                    <td>$r[kegiatan]</td> 
                </tr>
                <tr>
                    <td width=80 >Nama Perusahaan*</td>
                    <td>$r[nama_perusahaan]</td> 
                </tr>
                <tr>
                    <td width=80 >Nama Perguruan Tinggi**</td>
                    <td>$r[nama_perguruan_tinggi]</td> 
                </tr>
                <tr>
                    <td width=80 >No Hp</td>
                    <td>$r[hp]</td> 
                </tr>
                <tr>
                    <td width=80 >Email</td>
                    <td>$r[email]</td> 
                </tr>
                <tr>
                    <td width=80 >Pesan</td>
                    <td>$r[saran]</td>
                </tr>
        
                <td></td>
                
                </table>
            ";
            } 

$dompdf = new DOMPDF();
$dompdf->load_html();
$dompdf->render();
$dompdf->stream('Profil.pdf');
?>
