<html>
<link rel="stylesheet" href="user/css/login.css" type="text/css" media="screen" />
<head>
	<title>Selamat Datang Di Web Alumni SMAN 1 Cikarang Utara</title>
</head>
<body>
<form action="user/login.php" method="post">
<div class="login-fields">			
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Login" value="Login"></td>
</tr>

<br><center>Anda belum terdaftar sebagai Alumni?</br>
<u><a href="?t=registrasi">[Daftar Sekarang]</a></u></center>
</form>
</body>
</html>
