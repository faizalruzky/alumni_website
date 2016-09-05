<?php 
include ('../res/koneksi.php');
            
            $halaman=$_GET['page'];
            if ($halaman=="home")
			{
                include("modul/utama.php");
            }
			elseif($halaman=="alumni")
			{
                include("modul/alumni.php");   
            }
            elseif($halaman=="pdf")
            {
                include("modul/laporan.php");   
            }
            elseif($halaman=="halamanalumni")
            {
                include("user/login.php");   
            }
			 
?>