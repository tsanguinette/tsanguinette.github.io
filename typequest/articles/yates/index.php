<!DOCTYPE HTML>
<html>
<head>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/functions.php'; ?>
	<?php head("Type Quest | Ian Yates", "../../styles.css");?>
	
	<link rel="stylesheet" type="text/css" href="../../articles.css" />
</head>

<body>
	<!--HEADER-->
	<header class="straight">
		<!--STRAIGHT NAVIGATION-->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FFStraightNav.php'; ?>
	</header>
	
	<div id="main" class="yates">
		
		<div id="content">
		<div id="first">
			<img class="picture" src="../../images/norman.jpg"/>
			<div class="smallinfo float">
				<h1 class="left">Ian<br/>Yates</h1>
				<p class="">Daniel Eden is currently an intern at Dropbox in Manchester, UK. His skills include design, development, HTML, CSS, JavaScript, PHP and Git/Version Control. You may recognize one of his more well known projects, Animate.css, which is used by Hipstamatic, Foursquare and many other instances. Eden was also a finalist for .net Magazine’s “Brilliant Newcomer of The Year” award.</p>
				<p><a href="http://www.snaptin.com/">Snaptin</a><br/><a href="https://twitter.com/_dte">@_dte</a></p>
			</div>
		</div>
		
		<div id="second">
			<div class="caption">
				<p></p>
			</div>
			<div class="paragraph">
				<p><span class="sans">Mac or PC?</span> Oh so Mac.</p>
				<p><span class="sans">In your opinion, what is the best browser for web fonts?</span> I use Chrome as a matter of course, which I'm always very happy with in terms of text rendering. Saying that, it's only really improved when anti-aliasing is used, as opposed to the default sub-pixel smoothing (-webkit-font-smoothing: antialiased;). This isn't a standard as yet, but I think WebKit are going in the right direction.</p>
				<p><span class="sans">What makes you cringe when looking at type on the web?</span> Miniscule copy, poor use of whitespace. Let it breathe!</p>
				<p><span class="sans">What is one thing you would like other web and graphic designers to know about web fonts?</span> Paying for quality fonts is worth every penny.</p>
				<p><span class="sans">What makes a great webfont worth purchasing?</span> Attention to detail, varied weights and styles, thoroughly complete glyph collections, uniqueness.</p>
				<p><span class="sans">Do you know what hinting is, if so, in your words what does hinting do?</span> Hinting refers to the data within a font file, which instructs the curves of each letterform how they should appear under different circumstances (altering curves for type size, for example).</p>
			</div>
		</div><!--END SECOND-->
		</div><!--END CONTENT-->
		
	</div><!--END MAIN-->
	
	<!--FF FOOTER-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FFFooter.php'; ?>
</body>
</html>