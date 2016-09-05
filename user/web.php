
<html>
<head>
<title>Halaman User</title>
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

</head>

<body>
<div class="container">
    <div id="header">
       <ul class="topnav">
            <li><a href="?page=home">Home</a></li>
          
            <li>
                <a href="?page=alumni">Alumni</a>
                
            </li>
             
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
