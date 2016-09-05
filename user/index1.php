<?php ?>
<html>
<style>
input[type=submit]{
  background: #1A669C;
  border-radius: 10px;
  color: #FFF;
  position: relative;
  margin: 5px 0px  ;
  padding: 5px;
  width: 70px;

}
</style>
<head><title>Selamat Datang Di Web Alumni SMAN 1 Cikarang Utara</title></head>
	
<body>
<form action="user/login.php" method="post">
<table>
<tr>
<td>Username</td>
<td><input type="text" name="username" size="20"></td>
</tr>
<tr></tr>
<tr></tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" size="20"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="right"><input type="submit" name="Login" value="Login"></td>
</tr>
</table>
<br><center>Anda belum terdaftar sebagai Alumni?</br>
<u><a href="?t=registrasi">[Daftar Sekarang]</a></u></center>
</form>
</body>
</html>
