<!--
Copyright 2013-2014
Tyler Sanguinette
Made in Saint Louis, Missouri

Life lessons:
Don't put twinkies on your pizza.
Join AIGA.
Don't put plastic over your head.
Don't stare at womens behinds even if they are lumpy and disfigured.
Don't chew gum while pooping.
If you have a job opening, please contact me!
-->

<!DOCTYPE HTML>
<html>
<head>
	<!--METADATA AND MAIN STYLE SHEET-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/functions.php'; ?>
	<?php head("Type Quest", "styles.css");?>
	<link href="jquery.reject.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<!--HEADER-->
	<header class="dark">
		<!--<div id="script"></div-->
	<div id="logoMargin">
		<div id="logo"></div>
	</div>

		<!--NAVIGATION-->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/MainNav.php'; ?>
		
		<!--YEAH, SON-->
		<div id="intro">
			<div class="wrapper">
				<div class="special">
					<p>Type Quest is designed to help educate graphic designers and web designers understand the power of OpenType in Webfonts while giving insightful information from current professionals in the industry! The topics include what you should keep in mind when using webfonts, supported browsers, and hinting. Discover the power of OpenType Webfonts and learn the finer coding details to implement classic typographic details.</p>
				</div>
				
				<!--THE BOLT OF FURRY-->
				<div id="bolt">
					<img src="images/bolt.gif" />
				</div>
			</div>
		</div>
	</header>
	
	<div id="main">
		<div id="beef"><!--YES, LIKE A COW-->
			<!--BEAUTIFUL TYPOGRAPHY-->
			<div id="col1">
				<div class="circle"><a href="features/"><img src="images/col1.png" /></a></div>
				<h2>Beautiful Typography.</h2>
				<hr>
				<p class="small">With the advancements in css you</br>are now able to use OpenType features</br>with webfonts. Check out the code.</p>
			</div>
			
			<!--WHAT ARE DESIGNERS SAYING-->
			<div id="col2">
				<div class="circle"><a href="articles/"><img src="images/col2.png" /></a></div>
				<h2>Who says what?</h2>
				<hr>
				<p class="small">Customizable webfonts are relatively new. Find out what current type and</br>web designers want you to know about</br>better web typography!</p>
			</div>
			
			<!--I WANT ALL THE ANSWERS-->
			<div id="col3">
				<div class="circle"><a href="blog/"><img src="images/col3.png" /></a></div>
				<h2>I want all<br/>the answers!</h2>
				<hr>
				<p class="small">Me too. Sometimes it can be tough to pick a webfont with OpenType features or to know where to find them. Your search ends here!</p>
			</div><!--END COL3-->
		</div><!--END BEEF-->
		
		<div id="hinting">
			<div id="box" class="float">
				
			</div>
			
			<div class="float">
				<h2 class="left">I&#8217;m Sexy and I Know It.</h2>
				<p class="white">Hinting is the programming of instructions that fine-tune a font&#8217;s rasterisation, the process by which its mathematically ideal outlines are mapped onto a monitor&#8217;s pixels. Hinting can control the heights and widths of a font&#8217;s uppercase and lowercase letters, the widths of its individual lines, the amount of white space around letters, the size at which uppercase letters start to use different stem-widths from lowercase letters, how the angle of italic characters changes to best fit the pixel grid, and many other extremely technical details, all on a pixel-by-pixel basis. If this sounds like a rather tedious, time-consuming activity, it is, (even for type designers, who are accustomed to tedious, time-consuming activities).</p>
				<p class="author">&mdash; Peter Bil'ak, Typotheque</p>
			</div>
		</div>
	</div><!--END MAIN-->
	
	<div id="less">
		<div class="width">
			<div class="github float">
				<a href="http://git.typequest.org/"><img src="images/github.png"/></a>
			</div>
			<div class="text float">
				<h2 class="left">Make Life Easier</h2>
				<p>Check out the helpful <span class="smcp">less</span>, <span class="smcp">scss</span> and Stylus OpenType repo on GitHub!</p>
			</div>
		</div>
	</div>
	
	<!--FOOTER-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/MainFooter.php'; ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="js/jquery.reject.js"></script>
	<script>
	$(function() { 
		$.reject({
			reject: { safari: true }, // Rejects Safari
			display: ['firefox','chrome','opera'], // Displays only firefox, chrome, and opera
			closeCookie: true, // Set cookie to remmember close for this session
			header: 'Your browser is lame, bro!', // Header Text
			paragraph1: 'Since your browser does not support the font-feature-settings CSS property you will not be able to see the magic of this website.', // Paragraph 1
			paragraph2: 'Install one of the browsers below that supports this feature!',
		});
	
		return false;
	});
	</script>
</body>
</html>