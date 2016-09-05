<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script src="js/jquery-1.4.min.js"></script>
		<script src="js/jquery.fusioncharts.js"></script> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Selamat Datang Di Web Alumni SMAN 1 CIkarang Utara</title>
        <?php
			mysql_connect("localhost", "root", "") ;
			mysql_select_db("db_alumnisman");
		?>
    </head>
    <body>
    	<center><h3><b>Statistik Perbandingan Alumni Bekerja dan Sekolah</b></h3><br />
        <table id="myHTMLTable" border="1" align="center" cellpadding="5">
            <tr align="center">
            	<th width="50" bgcolor="#CCCCCC">Aktivitas</th>
                <td width="50" bgcolor="#CCCCCC"><b>Jumlah</b></td>
			</tr>
            <tr>
            	<td bgcolor="#CCCCCC"><b>Sekolah</b></td>
				<?php 
					$sql = mysql_query("select count(*) as sekolah from data_siswa where kegiatan='Sekolah'");
					while ($data = mysql_fetch_array($sql)) 
					{
						$sekolah=$data['sekolah'];
						echo "<td align='center'>$sekolah</td></tr>";
					}
				?>
        	<tr>
            	<td bgcolor="#CCCCCC"><b>Bekerja</b></td>
				<?php 
					$sql = mysql_query("select count(*) as bekerja from data_siswa where kegiatan='Bekerja'");
					while ($data = mysql_fetch_array($sql)) 
					{
						$bekerja=$data['bekerja'];
						echo "<td align='center'>$bekerja</td></tr>";
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
