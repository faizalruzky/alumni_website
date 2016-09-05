<?php
	if(isset($_POST['button']))
	{
		if($_POST['button']=='Buat Agenda' && !empty($_POST['isi_agenda']) && !empty($_POST['tgl']))
		{
			$sql_input = "INSERT INTO `data_agenda`(`tgl_agenda`, `agenda`) VALUES ('$_POST[tgl]', '$_POST[isi_agenda]')";
			mysql_query($sql_input);
		}
		if($_POST['button']=='Tambah Agenda' && !empty($_POST['isi_agenda']))
		{
			$agenda_update = $_POST[agenda_yang_ada]."$_POST[isi_agenda]";
			$sql_update = "UPDATE  `data_agenda` SET  `agenda` =  '$agenda_update' WHERE  `tgl_agenda` =  '$_POST[tgl]';";
			mysql_query($sql_update);
		}
	}
?>