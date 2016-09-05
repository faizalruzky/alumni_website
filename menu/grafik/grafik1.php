<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script src="/js/jquery-1.4.min.js"></script>
		<script src="/js/jquery.fusioncharts.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Selamat Datang Di Web Alumni SMAN 1 CIkarang Utara</title>
        <?php
			mysql_connect("localhost", "root", "") ;
			mysql_select_db("db_alumnisman");
		?>
    </head>
    <body>
    	
    	<center><h3><b>Statistik Penerimaan Alumni di Perguruan Tinggi Negeri</b></h3><br />
        <table id="myHTMLTable" border="1" align="center" cellpadding="5">
        	<tr align="center">
            	<th width="50" bgcolor="#CCCCCC">Tahun</th>
                <td width="50" bgcolor="#CCCCCC"><b>Jumlah</b></td>
			</tr>
            <tr>
               <?php 
					$sql = mysql_query("select ketegori_tahun.nama_thun as tahun, count(*) as PTN from data_siswa join ketegori_tahun on ketegori_tahun.id_thun=data_siswa.id_thun_lulus where perguruan_tinggi='PTN' group by id_thun_lulus order by ketegori_tahun.nama_thun asc");
					while ($data = mysql_fetch_array($sql)) 
					{
						$tahun=$data['tahun'];
						$ptn=$data['PTN'];
						echo "<td bgcolor='#CCCCCC' align='center'><b> $tahun </b></td><td align='center'> $ptn</td></tr>";
					}
				?>
   
        </table>
        </center>
        <script type="text/javascript">
			$('#myHTMLTable').convertToFusionCharts({
				swfPath: "Charts/",
				type: "MSColumn3D",
				data: "#myHTMLTable",
				dataFormat: "HTMLTable"
			});
		</script>
	
    </body>
</html>
