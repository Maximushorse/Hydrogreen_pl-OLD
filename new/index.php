<!DOCTYPE html>
<html lang="en-us" class="js">
	<head>       
		<?php 
			$page = $_GET["page"];
			$lang = $_GET["lang"]; 
			if( !isset($page)) {$page="Main";  }; 
			if( !isset($lang)) {$lang="PL";  }; 
		?>
        <title><?php echo $page?> - Hydrogreen</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />

		<?php 
			if ($page == "Main")		{$description="We are Hydrogreen. We are the future. Inventors of Hydros - low consumption, hydrogen powered vehicle. From Lublin University of Technology." ;?> <link rel="stylesheet" href="css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" /><?php }
			if ($page == "Zespol")		{$description="We are Hydrogreen. We are the future. Inventors of Hydros - low consumption, hydrogen powered vehicle. From Lublin University of Technology." ;} 
			if ($page == "Nowosci")		{$description="We are Hydrogreen. We are the future. Inventors of Hydros - low consumption, hydrogen powered vehicle. From Lublin University of Technology." ;} 
			if ($page == "Zawody")		{$description="We are Hydrogreen. We are the future. Inventors of Hydros - low consumption, hydrogen powered vehicle. From Lublin University of Technology." ;} 
			if ($page == "Partnerzy")	{$description="We are Hydrogreen. We are the future. Inventors of Hydros - low consumption, hydrogen powered vehicle. From Lublin University of Technology."; }
			if ($page == "Sponsorship")	{$description="We are Hydrogreen. We are the future. Inventors of Hydros - low consumption, hydrogen powered vehicle. From Lublin University of Technology." ;} 
			if ($page == "Media")		{$description="We are Hydrogreen. We are the future. Inventors of Hydros - low consumption, hydrogen powered vehicle. From Lublin University of Technology." ;} 
			if ($page == "Kontakt")		{$description="We are Hydrogreen. We are the future. Inventors of Hydros - low consumption, hydrogen powered vehicle. From Lublin University of Technology.";}
		require_once 'Mobile_Detect.php';
		$detect = new Mobile_Detect;
		?>	
        <meta name="description" content="<?php echo $description?>">	   
		<meta name="viewport" content="width=device-width, height=device-height,initial-scale=1.0">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="./js/jquery.cookie-1.4.1.min.js"></script>
		<script src="./js/visib.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script>
		<?php if ( $detect->isMobile() ) {} else { ?><script src="./js/menu.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script> <?php } ?>

		<script> 

			$(window).ready(function() {

  
				var divs = document.getElementsByClassName("main");
				for (var i = 0; i < divs.length; i = i + 1) {
					
					$(divs[i]).fadeTo(1800,1);
				}	
				var divs2 = document.getElementsByClassName("content");
				for (var i = 0; i < divs2.length; i = i + 1) {
					
					$(divs2[i]).fadeTo(1800,1);
				}	
				var theHash = "#<?php Print($page); ?>1";
				window.scroll(0,$.cookie('scroll'));
				//$("html, body").animate({scrollTop:$(theHash).offset().top}, 800);
				
			});
			
			$(window).bind('mousewheel', function(e){
				if((e.originalEvent.wheelDelta > 50)&&( $("html, body").is(':animated')==false) )
				{			
					//$("#foo").text("up");
					$("html, body").animate({scrollTop:$(document).scrollTop() -$(window).height()}, 800);
				}
				else if ((e.originalEvent.wheelDelta < -50)&&($("html, body").is(':animated')==false) )
				{
				
					//$("#foo").text("down");
					$("html, body").animate({scrollTop:$(document).scrollTop() +$(window).height()}, 800);
				}
				
			});

		</script>


	</head>
	
	<body onload="Function()" style="overflow:hidden;" >
		<div class="top" >	
			
			<a href="?page=Main&lang=<?php echo $lang?>"> <div class="logo" id="logo1"> </div></a> 
			<div class="social">
				<div class="lang"><a href="?page=<?php echo $page ?>&lang=PL" <?php if ($lang == "PL") { ?> style="font-weight: bold; opacity:1;"<?php } ?>  >PL</a>/<a href="?page=<?php echo $page ?>&lang=EN" <?php if ($lang == "EN") { ?> style="font-weight: bold;opacity:1;"<?php } ?>>EN</a></div>
				
				<a href ="https://twitter.com/hydrogreenteam"><div id="tw"></div></a>
				<a href ="https://www.facebook.com/hydrogreenteam"><div id="fb"></div></a> 
			</div>
		</div> 
		<?php	if ($page == "Main"){ ?>
			<div class="content"></div>	
		<?php }	?>
		
		
		<div class="burger" id="burger1"  onclick="toggle_visibility('navlist1') "></div>
		<nav class="navright" id="navright1" >
			<ul class = "navlist" id="navlist1">
				<div class="burger-t"></div>
				<li><a href="?page=Zespol&lang=<?php echo $lang?>" 		<?php if ($page == "Zespol")		{ ?>class='active' <?php } if ($lang =="EN"){ ?>>Team<?php ;} else { ?>>Zespół<?php ;} ?></a></li>
				<li><a href="?page=Hydros&lang=<?php echo $lang?>" 	<?php if ($page == "Hydros")		{ ?>class='active' <?php } if ($lang =="EN"){ ?>>Hydros<?php ;} else { ?>>Hydros<?php ;} ?></a>	</li>
				<li><a href="?page=Zawody&lang=<?php echo $lang?>" 		<?php if ($page == "Zawody")		{ ?>class='active' <?php } if ($lang =="EN"){ ?>>Competition<?php ;} else { ?>>Zawody<?php ;} ?></a>	</li>
				<li><a href="?page=Partnerzy&lang=<?php echo $lang?>" 	<?php if ($page == "Partnerzy")		{ ?>class='active' <?php } if ($lang =="EN"){ ?>>Partners<?php ;} else { ?>>Partnerzy<?php ;} ?></a>	</li>
				<li><a href="?page=Sponsorship&lang=<?php echo $lang?>" <?php if ($page == "Sponsorship")	{ ?>class='active' <?php } if ($lang =="EN"){ ?>>Sponsorship<?php ;} else { ?>>Sponsorship<?php ;} ?></a></li>
				<li><a href="?page=Media&lang=<?php echo $lang?>" 		<?php if ($page == "Media")			{ ?>class='active' <?php } if ($lang =="EN"){ ?>>Media<?php ;} else { ?>>Media<?php ;} ?></a>		</li>
				<li><a href="?page=Kontakt&lang=<?php echo $lang?>" 	<?php if ($page == "Kontakt")		{ ?>class='active' <?php } if ($lang =="EN"){ ?>>Contact<?php ;} else { ?>>Kontakt<?php ;}  ?></a>	</li>
				<div class="burger-b"></div>
			</ul>		
		</nav>		
		<?php	if ($page == "Main"):  
				include 'main.php'; 
			elseif ($page =="Zespol"):
				require 'zespol.php';
			elseif ($page =="Hydros"):
				include 'hydros.php';
			elseif ($page =="Zawody"):
				include 'zawody.php';
			elseif ($page =="Partnerzy"):
				include 'partnerzy.php';
			elseif ($page =="Sponsorship"):
				include 'sponsorship.php';
			elseif ($page =="Media"):
				include 'media.php';
			elseif ($page =="Kontakt"):
				include 'kontakt.php';
			endif; ?>
	
		
		
		
		<a href ="?page=<?php 
			if ($page =="Main"):
				echo "Zespol";
			elseif ($page =="Zespol"):
				echo "Hydros";
			elseif ($page =="Hydros"):
				echo "Zawody";
			elseif ($page =="Zawody"):
				echo "Partnerzy";
			elseif ($page =="Partnerzy"):
				echo "Sponsorship";
			elseif ($page =="Sponsorship"):
				echo "Media";
			elseif ($page =="Media"):
				echo "Kontakt";
			elseif ($page =="Kontakt"):
				echo "Main";
			endif;
		
		?>&lang=<?php echo $lang ?>" ><div class="scroll" id="scroll1"></div></a>
		
		<?php	if ($page == "Main"){ ?>
			<div class="footer"><p>We are Hydrogreen. We are the future.</p></div>
		<?php }	?>
		
	</body>

</html>