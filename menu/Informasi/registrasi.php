<div class="post">
	<h2 class="title"><a href="#">Registrasi Akun</a></h2>
	<div class="entry">
		<div id='isi'>
    	<h3>Registrasi Akun Alumni SMAN 1 Cikarang Utara</h3><br>
    	<form action="input.php" method="post" id="baru">
        	<table border="0" cellpadding="2" cellspacing="2">
            	<tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" id="name" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" id="user" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="pass" required></td>
                </tr>
                <tr>
            <!-- <td>Foto</td>
            <td><input type="file" name="foto_siswa" id="foto" required/></td>
        </tr> -->
                <tr>
                	<td colspan="2" align="center"><br><input type="submit" name="btnSubmit" value="SIMPAN BARU" onclick="cekisi()"></td> 
				</tr>
            </table>
        </form>
        </div
	</div>
</div>
        <script type="text/javascript">
			function cekisi()
			{
				if(document.getElementById('name').value == '')
				{
				  alert('Nama tidak boleh kosong');
				  document.getElementById('name').focus();
				  return false;
				}
				if(document.getElementById('user').value == '')
				{
				  alert('Username tidak boleh kosong');
				  document.getElementById('user').focus();
				  return false;
				}
				if(document.getElementById('pass').value == '')
				{
				  alert('Password tidak boleh kosong');
				  document.getElementById('pass').focus();
				  return false;
				}
				document.getElementById('baru').submit();
			}
   