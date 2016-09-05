<?php
error_reporting(E_ALL & ~E_NOTICE);

include('counter.php');
?>
<html>
<head>
	<title>Membuat script counter dengan Gambar</title>
</head>
<body>
<style type="text/css">
	body,html{
		background-color:#ffffee;
	}
	table.counter{
		border:silver 1px solid;
		border-radius:5px;
		background-color:#000000;
	}
	table.counter tr td{
		font:bold 12px Tahoma,Arial,Helvetica;
		color:#ffffff;
		border-right:silver 1px solid;
		border-bottom:silver 1px solid;
		padding:0 5px 0 5px;
	}
	table.counter tr td img{
		width:15px;
		height:18px;
	}
</style>
<table cellpadding="0" cellspacing="0" class="counter">
<tr>
	<td valign="middle" height="20"> Visitor today</td>
	
	<td valign="middle">
		<?php echo num_toimage($today['Visitor'],5); ?>
	</td>
</tr>
<tr>
	<td valign="middle" height="20">Yesterday</td>
	
	<td valign="middle">
		<?php echo num_toimage($yesterday['Jumlah'],5); ?>
	</td>
</tr>
<tr>
	<td valign="middle" height="20">Total Visit</td>
	
	<td valign="middle">
		<?php echo num_toimage($total['Total'],5); ?>
	</td>
</tr>
</table>
</body>
</html>