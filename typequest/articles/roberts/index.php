<!DOCTYPE HTML>
<html>
<head>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/functions.php'; ?>
	<?php head("Type Quest | Kirk Roberts", "../../styles.css");?>
	
	<link rel="stylesheet" type="text/css" href="../../articles.css" />
</head>

<body>
	<!--HEADER-->
	<header class="straight">
		<!--STRAIGHT NAVIGATION-->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FFStraightNav.php'; ?>
	</header>
	
	<div id="main" class="roberts">
		
		<div id="content">
		<div id="first">
			<img class="picture" src="../../images/roberts.jpg"/>
			<div class="smallinfo float">
				<h1 class="left">Kirk<br/>Roberts</h1>
				<p class="">Kirk Roberts is a web developer/designer and owner of Kirk Roberts Design in Jonesborough, TN.</p>
				<p><a href="http://kirkrobertsdesign.com/">Kirk Roberts Design</a><br/>
				<a href="https://twitter.com/gokrd">@gokrd</a></p>
			</div>
		</div>
		
		<div id="second">
			<div class="caption">
				<p></p>
			</div>
			<div class="paragraph">
				<p><span class="sans">Mac or PC?</span> Mac</p>
				<p><span class="sans">In your opinion, what is the best browser for web fonts?</span> Webkit & Chrome (with font-smoothing set in <span class="smcp">css</span>)</p>
				<p><span class="sans">What makes you cringe when looking at type on the web?</span> Same as print type: when foot and inch marks are used instead of curly quotes; bad kerning.</p>
				<p><span class="sans">What is one thing you would like other web and graphic designers to know about web fonts?</span> It&#8217;s not a free ride: each weight/style you add increases the download size and rendering speed of your site. Use as few weights/styles as possible.</p>
				<p><span class="sans">How are webfonts contributing to brand development on multi media devices?</span> Now people are free to use a much wider range of poorly-advised/inappropriate fonts.</p>
				<p><span class="sans">What makes a great webfont worth purchasing?</span> Kerning and hinting.</p>
				<p><span class="sans">Do you know what hinting is, if so, in your words what does hinting do?</span> It improves the rendering at small sizes.</p>
				<p><span class="sans">How much coffee do you consume on a daily basis?</span> None.</p>
			</div>
		</div><!--END SECOND-->
		</div><!--END CONTENT-->
		
	</div><!--END MAIN-->
	
	<!--FF FOOTER-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FFFooter.php'; ?>
</body>
</html>