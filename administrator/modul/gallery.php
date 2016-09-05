<html>
<head>
	<title>Gallery</title>
    <!--jquery-->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<!--menambahkan fancybox-->
	<script type="text/javascript" src="../js/jquery.fancybox.js"></script>
	<!--menambahkan css fancybox-->
	<link href="../css/fancybox.css" type="text/css" rel="stylesheet"/>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".fancy").fancybox();
		});
	</script>
</head>
<body>
	<?php
	//koneksi ke database
	//include('../config/koneksi.php');
	//membaca data dari database
	$result = mysql_query("select * from foto");
	//menampilkan foto
	?>
	<table>
		<tr>
		<?php
		$i = 1;
		while($row = mysql_fetch_array($result)){
		?>
			<td>
				<a href="upload/<?php echo $row['nama_file'];?>" class="fancy" class="imagedropshadow">
				<img src="upload/<?php echo $row['nama_file'];?>" alt="" width="170" border="0"/>
				</a>
				<br/><?php echo $row['deskripsi'];?>
                <br/>
                <a href="modul/delete-gallery.php?id=<?php echo $row['id'];?>" onclick="return confirm('Anda yakin?');">Delete </a>&nbsp;&nbsp;
                <a href="index.php?page=editgaleri&id=<?php echo $row['id'];?>">Edit</a>
			</td>
		<?php
			if($i % 3 == 0){
				echo '</tr><tr>';
			}
			$i++;
		}
		?>
		</tr>
	</table>
</body>
</html>
