<html>
<head>
<title>Halaman Administrator</title>
<link type="text/css" href="css/style.css" media="screen" rel="stylesheet" />
<link type="text/css" href="css/tabs-accordion.css" rel="stylesheet" /> 
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

<body>
<div class="container">
    <div id="header">
        <ul class="topnav">
            <li><a href="?page=home">Home</a></li>
            <li>
                <a href="?page=berita">Berita</a>
                
            </li>
            <li>
                <a href="?page=alumni">Alumni</a>
                <ul class="subnav">
                    
                    <li><a href="?page=kategori">Input Kategori Jurusan</a></li>
                    <li><a href="?page=kategori2">Input Kategori Tahun</a></li>
                </ul>
            </li>
            <li>
                <a href="?page=inputgaleri">Gallery</a>
                <ul class="subnav">
                    <li><a href="?page=inputkategorigaleri">Input Kategori Galeri</a></li>
                </ul>
            </li>
            <li><a href="?page=beasiswa">Beasiswa </a></li>
             <li><a href="?page=download">Download </a></li>
             <li><a href="?page=tampil_bukutamu">Entry Buku Tamu </a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="lihatweb.php" target="new">Lihat Web</a></li>
        </ul>
        <!--Menu Selessai--> 
    </div>
    <div id="content">
    <!--Menu Mulai-->
    <br />
    <?php include ("content.php")?>
    </div>
    
</div>
</body>
</html>
