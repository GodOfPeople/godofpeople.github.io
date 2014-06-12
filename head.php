<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title>Creative - Responsive HTML Template - ClaPat Studio</title>
    
    <meta name="description" content="">
    <meta name="author" content="">
    

    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="alternate stylesheet" type="text/css" media="screen" title="green-theme" href="css/style-green.css" />
	<link rel="alternate stylesheet" type="text/css" media="screen" title="orange-theme" href="css/style-orange.css" />
    
    
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    
    
   <!-- Css Switcher --> 
   <script src="js/styleswitch.js" type="text/javascript"></script>


    
    
    <!-- Responsive Navigation -->
    <script src="js/selectnav.min.js"></script>
    <!-- /Responsive Navigation -->
    
    
    
	
    
    
	<!-- Revolution Slider -->
	<script type="text/javascript" src="js/rs-plugin/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/rs-plugin/jquery.themepunch.revolution.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/revolution-settings.css" media="screen" />
    
    <script type="text/javascript">

				var tpj=jQuery;
				tpj.noConflict();

				tpj(document).ready(function() {

				if (tpj.fn.cssOriginal!=undefined)
					tpj.fn.css = tpj.fn.cssOriginal;

					tpj('.fullwidthbanner').revolution(
						{
							delay:9000,
							startwidth:890,
							startheight:450,

							onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

							thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
							thumbHeight:50,
							thumbAmount:3,

							hideThumbs:200,
							navigationType:"bullet",					//bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
							navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
							navigationStyle:"round",				//round,square,navbar

							touchenabled:"on",						// Enable Swipe Function : on/off

							navOffsetHorizontal:0,
							navOffsetVertical:20,

							stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
							stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic



							fullWidth:"on",

							shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

						});




			});
			</script>
    
    <!-- /Revolution Slider -->
    
    
    
    
    
    
    
	
    
    
    
    
</head>