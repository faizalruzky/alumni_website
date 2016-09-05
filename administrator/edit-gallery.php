<?php
//file edit-gallery.php
//koneksi ke database
include ('koneksi.php');
if($_POST){ //jika tombol update ditekan dan data terkirim ke server
//bentuk sql query untuk update
	$update = "update foto set deskripsi='".$_POST['deskripsi']."' ";
	if($_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){ //update gambar hanya jika user memilih file baru
		$move = move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$_FILES['file']['name']);
		if($move){
			$update .= ", nama_file='".$_FILES['file']['name']."'";
		}
	}
	$update .= " where id='".$_POST['id']."'";
	mysql_query($update); //update data ke database
	//header("Location: index.php?page=galeri");
    echo "<meta http-equiv='refresh' content='0; index.php?page=galeri'>";
	exit;
}
?>
<html>
<head>
	<title>Edit Picture</title>
</head>
<body>
	<form name="form1" action="" method="post" enctype="multipart/form-data">
		<?php
		$sql = "select * from foto where id='".intval($_GET['id'])."'";
		$data = mysql_fetch_array(mysql_query($sql));
		?>
        <table>
        <th>Update Gambar</th>
		<!-- menampilkan gambar sebelumnya -->
		<tr><td colspan="2"><img src="upload/<?php echo $data['nama_file'];?>" alt="" width="200"/><br/><br/></tr></td>
		<tr><td>File</td>:<td><input type="file" name="file" id="file"/><br/><br/></tr></td>
		<!-- menampilkan deskripsi -->
		<tr><td>Deskripsi</td>:<td> <textarea name="deskripsi" id="deskripsi"><?php echo $data['deskripsi'];?></textarea><br/></tr></td>
		<tr><td><input type="submit" name="save" value="Update"/>
		<input type="hidden" name="id" value="<?php echo $data['id'];?>"/></tr></td>
        </table>
	</form>
</body>
</html>
