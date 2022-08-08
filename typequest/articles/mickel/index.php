<!DOCTYPE HTML>
<html>
<head>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/functions.php'; ?>
	<?php head("Type Quest | Jeremy Mickel", "../../styles.css");?>
	
	<link rel="stylesheet" type="text/css" href="../../articles.css" />
</head>

<body>
	<!--HEADER-->
	<header class="straight">
		<!--STRAIGHT NAVIGATION-->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FFStraightNav.php'; ?>
	</header>
		
		<div id="main" class="mickel">
		
		<div id="content">
		<div id="first">
			<img class="picture" src="../../images/jeremylg.jpg"/>
			<div class="smallinfo float">
				<h1 class="left">Jeremy<br/>Mickel</h1>
				<p class="">Jeremy Mickel runs a Minneapolis-based type foundry and design studio called MCKL where he offers a library of retail fonts, as well as custom typefaces, lettering and logos. His clients range from ESPN to Pentagram and even Kraft Food.</p>
				<p><a href="http://www.mckltype.com/">mckltype.com</a><br/>
				<a href="https://twitter.com/mckltype">@mckltype</a></p>
			</div>
		</div>
		
		<div id="second">
			<div class="caption">
				<p>
					<h2>Notable Projects</h2>
					<ul>
						<li><a href="http://www.mckltype.com/logos/etsy/">Etsy Logotype</a></li>
						<li><a href="http://www.mckltype.com/logos/kraft/">Kraft Logotype</a></li>
						<li><a href="http://www.mckltype.com/custom/nutcase/">Nutcase</a></li>
						<li><a href="http://www.mckltype.com/custom/amc-zing/">AMC Zing</a></li>
						<li><a href="http://www.mckltype.com/custom/playoff-pro/">Playoff Pro</a></li>
					</ul>
				</p>
			</div>
			<div class="paragraph">
				<p><span class="sans">How has the type industry as a whole adapted/handled the high demand and use of webfonts? Are production and skill set costs increasing?</span> I think the type industry has been waiting for webfonts for a long time, but they&#8217;ve only recently been fully supported by browsers. I think web designers have adapted their designs to the demand of clients who want a consistent typographic voice across all medium, and type designers have adapted with optimized files for hinting and file size to improve performance and reduce load time.</p>
				<p><span class="sans">What can be improved with webfonts currently?</span> I think the biggest challenge right now is the discrepancy in pricing. There has to be a way to scale the cost, and traditionally this has been on the number of domains, number of page views, and number of years under a subscription model. But Google Fonts are fairly-well made and completely free, and TypeKit is pretty good and almost free. That threatens to undermine higher quality manually-hinted fonts from foundries like WebType, H&FJ, Commercial Type and others that are charging prices more in line with licensing costs for print fonts.</p>
				<p><span class="sans">What makes a webfont or webfont hosting service worth purchasing?</span> The difference between manual and auto hinting can be subtle, but can cause problems with consistency across multiple styles in a family (x-heights, stem weights, overshoot, etc) across all OS and browsers.</p>
<p>Another consideration is technical support and whether the fonts are server-hosted or self-hosted. Server-hosted have the benefit of delivering different files based on the operating system and browser of the end-user.</p>
				<p><span class="sans">From your experience, what are some of the complications of producing webfonts?</span> Hinting and file size are the biggest ones. There was a long time where there wasn&#8217;t a standard for file format, and then we settled on <span class="smcp">woff</span>. But now it seems that there may be a preference for <span class="smcp">ttf</span> or even <span class="smcp">otf</span> files.</p>
				<p><span class="sans">What is one important thing you would like web and graphic designers to know about webfonts?</span> That they still take time and skill to make, and should be paid for!</p>
				<p>I think it&#8217;s actually all very encouraging though. Now the interactive experience can be just as rich as the print experience, and it&#8217;s much easier to track usage, whereas tracking unlicensed usage of print fonts is still impossible.</p>
				<p><span class="sans">Which operating system(s) do you use?</span> Mac OS X Mavericks.</p>
				<p><span class="sans">How much coffee do you consume on a daily basis?</span> 3&ndash;4 cups.</p>
			</div>
		</div><!--END SECOND-->
		</div><!--END CONTENT-->
		
	</div><!--END MAIN-->
	
	<!--FF FOOTER-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FFFooter.php'; ?>
</body>
</html>