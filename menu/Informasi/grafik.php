<?php
	include "res/koneksi.php";
	
	$query = "select count(*) AS jum2008 from data_siswa where id_thun_lulus = '10'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2008 = $data['jum2008'];
	$query = "select count(*) AS jum2007 from data_siswa where id_thun_lulus = '11'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2007 = $data['jum2007'];
	$query = "select count(*) AS jum2006 from data_siswa where id_thun_lulus = '12'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2006 = $data['jum2006'];
	$query = "select count(*) AS jum2005 from data_siswa where id_thun_lulus = '13'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2005 = $data['jum2005'];
	$query = "select count(*) AS jum2004 from data_siswa where id_thun_lulus = '14'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2004 = $data['jum2004'];
	$query = "select count(*) AS jum2003 from data_siswa where id_thun_lulus = '15'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2003 = $data['jum2003'];
	$query = "select count(*) AS jum2002 from data_siswa where id_thun_lulus = '16'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2002 = $data['jum2002'];
	$query = "select count(*) AS jum2001 from data_siswa where id_thun_lulus = '17'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2001 = $data['jum2001'];
	$query = "select count(*) AS jum2000 from data_siswa where id_thun_lulus = '18'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2000 = $data['jum2000'];
	$query = "select count(*) AS jum2009 from data_siswa where id_thun_lulus = '8'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2009 = $data['jum2009'];
	$query = "select count(*) AS jum2010 from data_siswa where id_thun_lulus = '1'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2010 = $data['jum2010'];
	$query = "select count(*) AS jum2011 from data_siswa where id_thun_lulus = '9'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2011 = $data['jum2011'];
	$query = "select count(*) AS jum2012 from data_siswa where id_thun_lulus = '39'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2012 = $data['jum2012'];
	$query = "select count(*) AS jum2013 from data_siswa where id_thun_lulus = '40'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2013 = $data['jum2013'];
	$query = "select count(*) AS jum2014 from data_siswa where id_thun_lulus = '41'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2014 = $data['jum2014'];
	$query = "select count(*) AS jum2015 from data_siswa where id_thun_lulus = '42'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2015 = $data['jum2015'];
	$query = "select count(*) AS jum2016 from data_siswa where id_thun_lulus = '43'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2016 = $data['jum2016'];
	$query = "select count(*) AS jum2017 from data_siswa where id_thun_lulus = '44'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2017 = $data['jum2017'];
	$query = "select count(*) AS jum2018 from data_siswa where id_thun_lulus = '45'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2018 = $data['jum2018'];
	$query = "select count(*) AS jum2019 from data_siswa where id_thun_lulus = '46'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2019 = $data['jum2019'];
	$query = "select count(*) AS jum2020 from data_siswa where id_thun_lulus = '47'";$hasil = mysql_query($query);$data = mysql_fetch_array($hasil);$jum2020 = $data['jum2020'];
	
	$total = $jum2009+$jum2010+$jum2011+$jum2012+$jum2013+$jum2014+$jum2015+$jum2016+$jum2017+$jum2018+$jum2019+$jum2020+$jum2000+$jum2001+$jum2002+$jum2003+$jum2004+$jum2005+$jum2006+$jum2007+$jum2008;
	
	$persen2009 = $jum2009 / $total * 100;$persen2010 = $jum2010 / $total * 100;$persen2011 = $jum2011 / $total * 100;$persen2012 = $jum2012 / $total * 100;$persen2013 = $jum2013 / $total * 100;$persen2014 = $jum2014 / $total * 100;$persen2015 = $jum2015 / $total * 100;$persen2016 = $jum2016 / $total * 100;$persen2017 = $jum2017 / $total * 100;$persen2018 = $jum2018 / $total * 100;$persen2019 = $jum2019 / $total * 100;$persen2020 = $jum2020 / $total * 100;$persen2000 = $jum2000 / $total * 100;$persen2001 = $jum2001 / $total * 100;$persen2002 = $jum2002 / $total * 100;$persen2003 = $jum2003 / $total * 100;$persen2004 = $jum2004 / $total * 100;$persen2005 = $jum2005 / $total * 100;$persen2006 = $jum2006 / $total * 100;$persen2007 = $jum2007 / $total * 100;$persen2008 = $jum2008 / $total * 100;
	
	$panjangGrafik2009 = $persen2009 * 1;$panjangGrafik2010 = $persen2010 * 1;$panjangGrafik2011 = $persen2011 * 1;$panjangGrafik2012 = $persen2012 * 1;$panjangGrafik2013 = $persen2013 * 1;$panjangGrafik2014 = $persen2014 * 1;$panjangGrafik2015 = $persen2015 * 1;$panjangGrafik2016 = $persen2016 * 1;$panjangGrafik2017 = $persen2017 * 1;$panjangGrafik2018 = $persen2018 * 1;$panjangGrafik2019 = $persen2019 * 1;$panjangGrafik2020 = $persen2020 * 1;$panjangGrafik2000 = $persen2000 * 1;$panjangGrafik2001 = $persen2001 * 1;$panjangGrafik2002 = $persen2002 * 1;$panjangGrafik2003 = $persen2003 * 1;$panjangGrafik2004 = $persen2004 * 1;$panjangGrafik2005 = $persen2005 * 1;$panjangGrafik2006 = $persen2006 * 1;$panjangGrafik2007 = $persen2007 * 1;$panjangGrafik2008 = $persen2008 * 1;
	
	
	$query = "select count(*) AS bekerja from data_siswa where kegiatan = 'Bekerja'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$bekerja = $data['bekerja'];
	
	$query = "select count(*) AS sekolah from data_siswa where kegiatan = 'Sekolah'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$sekolah = $data['sekolah'];
	
	$total = $bekerja + $sekolah;
	$persenBekerja = $bekerja / $total * 100;
	$panjangGrafikBekerja = $persenBekerja * 1;
	$persenSekolah = $sekolah / $total * 100;
	$panjangGrafikSekolah = $persenSekolah * 1;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Selamat Datang Di Web Alumni SMAN 1 CIkarang Utara</title>
</head>

<body>
	<u><b><h2>Statistik Alumni Berdasarkan Tahun Lulus</h2></b></u><br>
	<table cellpadding="4" cellspacing="5" border="0" style="background-color:#ABCDEF;border:1px solid blue;">
        <tr>
            <td width="100"><b>Lulus Tahun </b></td>
            <td width="60" align="center"><b>Jumlah</b></td>
            <td width="200"><b>Statistik</b></td>
        </tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2000</td>
            <td align="center"><?php echo $jum2000; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafik2000; ?>%; background-color:#FF0000;" title="2000 (Jumlah: <?php echo $jum2000; ?> | <?php echo $persen2000; ?>%)">(<?php echo $persen2000; ?>%)</div></td></tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2001</td>
            <td align="center"><?php echo $jum2001; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafik2001; ?>%; background-color:#FF0000;" title="2001 (Jumlah: <?php echo $jum2001; ?> | <?php echo $persen2001; ?>%)">(<?php echo $persen2001; ?>%)</div></td></tr>
		<tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2002</td>
            <td align="center"><?php echo $jum2002; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafik2002; ?>%; background-color:#FF0000;" title="2002 (Jumlah: <?php echo $jum2002; ?> | <?php echo $persen2002; ?>%)">(<?php echo $persen2002; ?>%)</div></td></tr>
		<tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2003</td>
            <td align="center"><?php echo $jum2003; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafik2003; ?>%; background-color:#FF0000;" title="2003 (Jumlah: <?php echo $jum2003; ?> | <?php echo $persen2003; ?>%)">(<?php echo $persen2003; ?>%)</div></td></tr>
		<tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2004</td>
            <td align="center"><?php echo $jum2004; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafik2004; ?>%; background-color:#FF0000;" title="2004 (Jumlah: <?php echo $jum2004; ?> | <?php echo $persen2004; ?>%)">(<?php echo $persen2004; ?>%)</div></td></tr>
		<tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2005</td>
            <td align="center"><?php echo $jum2005; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafik2005; ?>%; background-color:#FF0000;" title="2005 (Jumlah: <?php echo $jum2005; ?> | <?php echo $persen2005; ?>%)">(<?php echo $persen2005; ?>%)</div></td></tr>
		<tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2006</td>
            <td align="center"><?php echo $jum2006; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafik2006; ?>%; background-color:#FF0000;" title="2006 (Jumlah: <?php echo $jum2006; ?> | <?php echo $persen2006; ?>%)">(<?php echo $persen2006; ?>%)</div></td></tr>
		<tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2007</td>
            <td align="center"><?php echo $jum2007; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafik2007; ?>%; background-color:#FF0000;" title="2007 (Jumlah: <?php echo $jum2007; ?> | <?php echo $persen2007; ?>%)">(<?php echo $persen2007; ?>%)</div></td></tr>
		<tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2008</td>
            <td align="center"><?php echo $jum2008; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafik2008; ?>%; background-color:#FF0000;" title="2001 (Jumlah: <?php echo $jum2008; ?> | <?php echo $persen2008; ?>%)">(<?php echo $persen2008; ?>%)</div></td></tr>
        
<tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2009</td>
            <td align="center"><?php echo $jum2009; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafik2009; ?>%; background-color:#FF0000;" title="2009 (Jumlah: <?php echo $jum2009; ?> | <?php echo $persen2009; ?>%)">(<?php echo $persen2009; ?>%)</div></td></tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2010</td>
            <td align="center"><?php echo $jum2010; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafik2010; ?>%; background-color:#FF0000;" title="2010 (Jumlah: <?php echo $jum2010; ?> | <?php echo $persen2010; ?>%)">(<?php echo $persen2010; ?>%)</div></td>
        </tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2011</td>
            <td align="center"><?php echo $jum2011; ?></td>
          <td><div style="height: 35px; width: <?php echo $panjangGrafik2011; ?>%; background-color:#FF0000;" title="2011 (Jumlah: <?php echo $jum2011; ?> | <?php echo $persen2011; ?>%)">(<?php echo $persen2011; ?>%)</div></td>
        </tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2012</td>
            <td align="center"><?php echo $jum2012; ?></td>
          <td><div style="height: 35px; width: <?php echo $panjangGrafik2012; ?>%; background-color:#FF0000;" title="2012 (Jumlah: <?php echo $jum2012; ?> | <?php echo $persen2012; ?>%)">(<?php echo $persen2012; ?>%)</div></td>
          <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2013</td>
            <td align="center"><?php echo $jum2013; ?></td>
          <td><div style="height: 35px; width: <?php echo $panjangGrafik2013; ?>%; background-color:#FF0000;" title="2013 (Jumlah: <?php echo $jum2013; ?> | <?php echo $persen2013; ?>%)">(<?php echo $persen2013; ?>%)</div></td>
        </tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2014</td>
            <td align="center"><?php echo $jum2014; ?></td>
          <td><div style="height: 35px; width: <?php echo $panjangGrafik2014; ?>%; background-color:#FF0000;" title="2014 (Jumlah: <?php echo $jum2014; ?> | <?php echo $persen2014; ?>%)">(<?php echo $persen2014; ?>%)</div></td>
        </tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2015</td>
            <td align="center"><?php echo $jum2015; ?></td>
          <td><div style="height: 35px; width: <?php echo $panjangGrafik2015; ?>%; background-color:#FF0000;" title="2015 (Jumlah: <?php echo $jum2015; ?> | <?php echo $persen2015; ?>%)">(<?php echo $persen2015; ?>%)</div></td>
        </tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2016</td>
            <td align="center"><?php echo $jum2016; ?></td>
          <td><div style="height: 35px; width: <?php echo $panjangGrafik2016; ?>%; background-color:#FF0000;" title="2016 (Jumlah: <?php echo $jum2016; ?> | <?php echo $persen2016; ?>%)">(<?php echo $persen2016; ?>%)</div></td>
        </tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2017</td>
            <td align="center"><?php echo $jum2017; ?></td>
          <td><div style="height: 35px; width: <?php echo $panjangGrafik2017; ?>%; background-color:#FF0000;" title="2017 (Jumlah: <?php echo $jum2017; ?> | <?php echo $persen2017; ?>%)">(<?php echo $persen2017; ?>%)</div></td>
        </tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2018</td>
            <td align="center"><?php echo $jum2018; ?></td>
          <td><div style="height: 35px; width: <?php echo $panjangGrafik2018; ?>%; background-color:#FF0000;" title="2018 (Jumlah: <?php echo $jum2018; ?> | <?php echo $persen2018; ?>%)">(<?php echo $persen2018; ?>%)</div></td>
        </tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2019</td>
            <td align="center"><?php echo $jum2019; ?></td>
          <td><div style="height: 35px; width: <?php echo $panjangGrafik2019; ?>%; background-color:#FF0000;" title="2019 (Jumlah: <?php echo $jum2019; ?> | <?php echo $persen2019; ?>%)">(<?php echo $persen2019; ?>%)</div></td>
        </tr>
        <tr>
            <td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">2020</td>
            <td align="center"><?php echo $jum2020; ?></td>
          <td><div style="height: 35px; width: <?php echo $panjangGrafik2020; ?>%; background-color:#FF0000;" title="2020 (Jumlah: <?php echo $jum2020; ?> | <?php echo $persen2020; ?>%)">(<?php echo $persen2020; ?>%)</div></td>
        </tr>
    </table>
    <br><br>
    
    <u><b><h2>Statistik Alumni Berdasarkan Kegiatan Alumni</h2></b></u><br>
	<table cellpadding="4" cellspacing="5" border="0" style="background-color:#ABCDEF;border:1px solid blue;">
        <tr>
            <td width="100"><b>Kegiatan Alumni</b></td>
            <td width="60" align="center"><b>Jumlah</b></td>
            <td width="200"><b>Statistik</b></td>
        </tr>
        <tr>
        	<td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">Bekerja</td>
            <td align="center"><?php echo $bekerja; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafikBekerja; ?>%; background-color:#FF3366;" title="2009 (Jumlah: <?php echo $bekerja; ?> | <?php echo $persenBekerja; ?>%)">(<?php echo $persenBekerja; ?>%)</div></td>
        </tr>
        <tr>
        	<td style="color:#000000;border:2px groove white; font-family:Arial, Helvetica, sans-serif;font-size:12px;" nowrap="nowrap" align="center">Sekolah</td>
            <td align="center"><?php echo $sekolah; ?></td>
            <td><div style="height: 35px; width: <?php echo $panjangGrafikSekolah; ?>%; background-color:#FF3366;" title="2009 (Jumlah: <?php echo $sekolah; ?> | <?php echo $persenSekolah; ?>%)">(<?php echo $persenSekolah; ?>%)</div></td>
        </tr>
	</table>
</body>
</html>
