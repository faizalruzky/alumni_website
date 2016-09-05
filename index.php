<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />


<!-- Untuk Memanggil lightbox-->
<script src="js/jquery-1.4.js" type="text/javascript"></script>
<script src="menu/grafik/js/jquery-1.4.min.js"></script>
<script src="menu/grafik/js/jquery.fusioncharts.js"></script>
<link rel="stylesheet" href="js/lightbox/themes/default/jquery.lightbox.css" type="text/css" />
<script src="js/lightbox/jquery.lightbox.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('.lightbox').lightbox();		    
		});
  </script>


</head>
<body>

<div id="wrapper">
	
			
<div id="head" class="clearfloat">
  <div class="clearfloat">
  
		
      <div class="right"> <img src="images/ads/header.jpg" alt="" width="960" height="200" /> </div>
  </div>
		
  <div id="navbar" class="clearfloat">
    <ul id="page-bar" class="left clearfloat">
      <li><a href="?t=home">Home</a></li>
	 
      
        <li><a href="?t=berita">Berita</a>
			<ul>
				<li><a href="?t=acara">Kumpul Alumni</a></li>
				<li><a href="?t=beasiswa">Berita Beasiswa</a></li>
			</ul>
			</li>
      </li>
        <li><a href="?t=agenda">Agenda</a>
				<li><a href="?t=lowongan">Lowongan Kerja</a></li>
				<li><a href="?t=galery">Album</a></li>
				<li><a href="?t=profilalumni">Alumni</a></li>
        <li><a href="?t=bukutamu">Buku Tamu</a></li>
        <li><a href="#">Grafik</a>
                  <ul>
                        <li><a href="?t=grafikPTN">Grafik Penerimaan Alumni di PTN</a></li>
                        <li><a href="?t=grafikPTS">Grafik Penerimaan Alumni di PTS</a></li>
                        <li><a href="?t=grafikBekerjaSekolah">Grafik Perbandingan Alumni Bekerja dan Sekolah</a></li>
                    </ul>
                </li>
				<li><a href="?t=kontak kami">Kontak kami</a></li>
        </ul>
	  
	  
    <form method="get" id="searchform" action="http://www.work.baleho.com/">
      
    </form>
  </div>
</div>
<div id="page" class="clearfloat">
  <div id="top" class="clearfloat">
    <div id="headline"> 
      <div class="title"></div>
      <div class="meta"></div>
      <?php
      if (isset($_GET['t']) && $_GET['t'] == 'home') {
    	include 'home.php';
		} else if (isset($_GET['t']) && $_GET['t'] == 'berita') {
    	include 'menu/berita/berita.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'acara') {
      include 'menu/acara/acara.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'alamat') {
    	include 'menu/informasi/alamat.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'prestasi') {
    	include 'menu/prestasi/prestasi.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'suasana') {
    	include 'menu/suasana/suasana.php';
		
	} else if (isset($_GET['t']) && $_GET['t'] == 'galery') {
    	include 'menu/galery/galery.php';
  } else if (isset($_GET['t']) && $_GET['t'] == 'bukutamu') {
      include 'menu/bukutamu/bukutamu.php';  
	} else if (isset($_GET['t']) && $_GET['t'] == 'kontak kami') {
    	include 'menu/informasi/kontak.php';	
    } 
    else if (isset($_GET['t']) && $_GET['t'] == 'grafikPTN') {
      include 'menu/grafik/grafik1.php';
  }
  else if (isset($_GET['t']) && $_GET['t'] == 'grafik') {
      include 'menu/grafik/grafik1.php';
  }
  else if (isset($_GET['t']) && $_GET['t'] == 'grafikPTS') {
      include 'menu/grafik/grafik2.php';
  }
  else if (isset($_GET['t']) && $_GET['t'] == 'grafikBekerjaSekolah') {
      include 'menu/grafik/grafik3.php';
    }
    else if (isset($_GET['t']) && $_GET['t'] == 'detailgalery') {
    	include 'menu/galery/detailgalery.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'profilalumni') {
    	include 'menu/alumni/alumni.php';
     } else if (isset($_GET['t']) && $_GET['t'] == 'detailsatu') {
    	include 'menu/alumni/detailsatu.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'detaildua') {
    	include 'menu/alumni/detaildua.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'lowongan') {
    	include 'menu/lowongan/lowongan.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'readmore') {
    	include 'readmore.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'beasiswa') {
    	include 'menu/beasiswa/beasiswa.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'lampiran') {
    	include 'menu/beasiswa/lampirkan.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'agenda') {
      include 'menu/agenda/agenda.php';
	}
	else if (isset($_GET['t']) && $_GET['t'] == 'registrasi') {
    	include 'menu/informasi/registrasi.php';
	} else {
    	include 'home.php';
	}
    ?>
       </div>
		 
	<div id="sidebar">
     
     <div id="sidebar-top">
        <center><h3>Login Siswa</h3><center>
        <p><?php include"user/index.php"?></p>
        </div>
      
    <div id="sidebar-bottom">
        <center><h3>Formulir dan Info Beasiswa</h3></center>
        <p>
        <li>
      <hr size="1"/>
      <?php
                        
                        include 'res/koneksi.php';
						$sql=mysql_query("select * from beasiswa  order by id_beasiswa desc limit 5 ");
						while($s=mysql_fetch_array($sql)){	
						?>
                            <p><a href="administrator/dokumen/<?php echo $s['file'] ?>"><?php echo $s['nama_beasiswa']?></a></p>
                            
						<?php	
						
						}
				?>
      </li>
        </p>
        </div>
		
		<div id="sidebar-bottom">
        <center><h3>Download Formulir Lowongan Kerja</h3></center>
        <p><?php include "menu/lowongan/download_lowongan.php";?></p>
        </div>
		
		<div id="sidebar-bottom">
        <center>
          <h3>Forum Facebook SMAN 1 Cikarang Utara</h3>
        </center>
		<center><li><a href='http://facebook.com/'><img src="images/LOGO SMAN1CIKUT.gif" style="width:200px;" align="center" /></a></li></center>
		</div>
		
    <div id="sidebar-bottom">
    <center><h3>Statistik Pengunjung</h3></center>
    <div class="c" align="center" style="width:300px;">
    <?php include "counter/viewcounter.php"?>
    </div>
  </div>

		<div id="sidebar-bottom">
		<center><h3>Kalender</h3></center>
		<div class="c" align="center" style="width:300px;">
		<?php include "kalender.php"?>
		</div>
  </div>
</div>	 
	
  <div id="bottom" class="clearfloat">
    
      <div class="clearfloat">
        <!--<h3 class="cat_title">GALERY&raquo;</h3>
        
        <p> <?php include "menu/galery/galery.php" ?></p>
      </div>
      <div class="divider"><img src="images/divider.png" alt="" /></div>
      <div class="clearfloat">
        <h3 class="cat_title">Info Lowongan&raquo;</h3>
			
        -->
       <!-- <p> <?php include "menu/lowongan/lowongan.php" ?></p> -->
      </div>
      <div class="divider"></div>
      <div class="navigation">
        
        <div class="right"></div>
      </div>
    </div>
    
<div id="front-popular" class="clearfloat">
  <div id="wrp5">
					<div id="wrp5_inner">
												<div id="u21" style="width:940px; margin-right:0px;">
									<div class="moduletable">

					<p>
	<img alt="" src="images/LOGO SMAN1CIKUT.gif" style="width: 84px; height: 84px;" align="left" hspace="3">&nbsp;<br><strong>SMA NEGERI 1 CIKARANG UTARA</strong><br>
	&nbsp;Jalan Ki Hajar Dewantara No. 91, Cikarang Utara. 17530 <br>
	&nbsp;Telp: 021-8901320<br>
    &nbsp;Website: sman1cikarangutara.sch.id<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    alumni.sman1cikarangutara.sch.id<br>
	&nbsp;Email : sman1cikarangutara@yahoo.co.id<br></br>

	</p>		</div>
	
						</div>						
																								<div class="clrfix"></div>
					</div>	
			</div>

   
  
    
</body>
</html>
