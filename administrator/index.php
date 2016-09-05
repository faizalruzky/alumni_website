<?php 
error_reporting(E_ALL & ~E_NOTICE);
$username=$_COOKIE['username'];
$password=$_COOKIE['password'];
if(!isset($username)) { //kondisi jika cookies user tidak ada maka halaman memanggil formlogin kembali

}else{ header('location:web.php?page=home'); 
}//dan jika cookies ada maka akan menampilkan halaman.php
?>
<html>
 <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap/stylesheet.css" rel="stylesheet">
    <style>
        body { 
          background: url(images/login/bg_login.jpg) ; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }
    </style>
    <head>
    	
        <title>Selamat Datang Di Web Alumni SMAN 1 Cikarang Utara</title>
    </head>
    <body  style="">
    <form action="login.php" method="post">
    <div class="login-container">
        <div class="login-header bordered">
            <h4>Login Administrator</h4>
        </div>
        <hr>
        <form>
            <div class="login-field">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" >
                <i class="icon-user"></i>
            </div>
            <div class="login-field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" >
                <i class="icon-lock"></i>
            </div>
            <div class="login-button clearfix">
                <label class="checkbox pull-left">
                    <div ><span><input type="checkbox" class="uniform" name="setcookie" value="true"></span></div> Remember me
                </label>
                <button type="submit" class="pull-right btn btn-large blue">LOGIN </button>
            </div>
                       
</form>
</body>
</html>
