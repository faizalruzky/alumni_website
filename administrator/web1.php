<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">  
    <title>Halaman Administrator</title>
    <!-- core CSS -->
    <link href="css/dashboard/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard/font-awesome.min.css" rel="stylesheet">
    <link href="css/dashboard/animate.min.css" rel="stylesheet">
    <link href="css/dashboard/prettyPhoto.css" rel="stylesheet">
    <link href="css/dashboard/main.css" rel="stylesheet">
    <link href="css/dashboard/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/dashboard/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/dashboard/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/dashboard/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/dashboard/ico/apple-touch-icon-57-precomposed.png">

<!-- <link type="text/css" href="css/style.css" media="screen" rel="stylesheet" />
<link type="text/css" href="css/tabs-accordion.css" rel="stylesheet" />  -->
<!-- Accordion menu--> 
<script type="text/javascript" src="js/jquery.tools.min.js"></script>  
<!-- Accordion menu fungsi-->
<script type="text/javascript"> 
      $(document).ready(function(){
        $("#accordion").tabs("#accordion div.pane", {tabs: 'h2', effect: 'slide', initialIndex: null});
	    });
</script> 

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/sliding.form.js"></script>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>-->
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>
<script type="text/javascript"> 
$(document).ready(function(){

	$("ul.subnav").parent().append("<span></span>"); //Only shows drop down trigger when js is enabled - Adds empty span tag after ul.subnav
	
	$("ul.topnav li span").click(function() { //When trigger is clicked...
		
		//Following events are applied to the subnav itself (moving subnav up and down)
		$(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click

		$(this).parent().hover(function() {
		}, function(){	
			$(this).parent().find("ul.subnav").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
		});

		//Following events are applied to the trigger (Hover events for the trigger)
		}).hover(function() { 
			$(this).addClass("subhover"); //On hover over, add class "subhover"
		}, function(){	//On Hover Out
			$(this).removeClass("subhover"); //On hover out, remove class "subhover"
	});

});
</script>
</head>

<body class="homepage">
<!-- dari bootstarp -->
<header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="?page=home">Home</a></li>
                        <li><a href="?page=berita">Berita</a></li> 
                        <li class="dropdown">
                            <a href="?page=alumni" class="dropdown-toggle" data-toggle="dropdown">Alumni <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="?page=kategori">Input Kategori Jurusan</a></li>
                                <li><a href="?page=kategori2">Input Kategori Tahun</a></li>  
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="?page=inputgaleri" class="dropdown-toggle" data-toggle="dropdown">Galeri <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="?page=inputkategorigaleri">Input Kategori Galeri</a></li>
                            </ul>
                        </li>
                        <li><a href="?page=beasiswa">Beasiswa</a></li> 
                        <li><a href="?page=download">Download</a></li>
                        <li><a href="?page=tampil_bukutamu">Entry Buku Tamu </a></li>
                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="lihatweb.php" target="new">Lihat Web</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
    
    <?php include ("content.php")
    ?>
   
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="container">
        
        </div><!--/.container-->
    </div>
    </section><!--/#bottom-->
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer--> 
</body>
</html>
