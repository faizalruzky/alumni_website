<?php 
include ('../res/koneksi.php');
            
            $halaman=$_GET['page'];
            if ($halaman=="home"){
                include("modul/utama.php");
            }elseif($halaman=="berita"){
                include("modul/post.php");
                
            }elseif($halaman=="alumni"){
                include("modul/alumni.php");
                
            }elseif($halaman=="kategori"){
                include("modul/kategori.php");
            }elseif($halaman=="kategori2"){
                include("modul/kategori2.php");
                
            }elseif($halaman=="inputgaleri"){
                include ("modul/formgaleri.php");
                
            }elseif($halaman=="beasiswa"){
                include ("modul/beasiswa.php");
                
            }elseif($halaman=="inputkategorigaleri"){
                include("modul/katgaleri.php");
                
            }elseif($halaman=="galeri"){
                include("modul/gallery.php");
            }elseif($halaman=="editgaleri"){
                include("edit-gallery.php");
            }elseif($halaman=="download"){
                include("modul/donload.php");
            }elseif($halaman=="tampil_bukutamu"){
                include("modul/tampil_bukutamu.php");
            }elseif($halaman=="agenda"){
                include("modul/agenda/agenda.php");
            }elseif($halaman=="laporan"){
                include("modul/laporan1.php");
            }elseif($halaman=="laporan2"){
                $tahun = $_GET['no'];
                include("modul/laporan2.php");
            }

        
?>