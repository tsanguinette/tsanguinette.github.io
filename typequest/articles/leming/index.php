<!DOCTYPE HTML>
<html>
<head>
	<!--METADATA AND MAIN STYLE SHEET-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/functions.php'; ?>
	<?php head("Type Quest | Tal Leming", "../../styles.css");?>
	
	<link rel="stylesheet" type="text/css" href="../../articles.css" />
</head>

<body>
	<!--HEADER-->
	<header class="straight">
		<!--STRAIGHT NAVIGATION-->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FFStraightNav.php'; ?>
	</header>
	
	<div id="main" class="leming">
		
		<div id="content">
		<div id="first">
			<img class="picture" src="../../images/leminglrg.jpg"/>
			<div class="smallinfo float">
				<h1 class="left">Tal<br/>Leming</h1>
				<p class="">Tal Leming is currently a Type Designer at his personal type foundry, Type Supply, in Baltimore, Md. He has also worked for House Industries and among other foundries such as Commerical Type and Typotheque. Leming is the co-author of the Web Open Font Format (<span class="smcp">woff</span>) and Unified Font Object (<span class="smcp">ufo</span>) specification.
You may also recognize his work from the lettering portion of the Quaker Oates brand, The Hollywood Reporter, Money Magazine and GoodHousekeeping.</p>
				<p><a href="http://typesupply.com/">typesupply.com</a><br/>
				<a href="https://twitter.com/typesupply">@typesupply</a></p>
			</div>
		</div>
		
		<div id="second">
			<div class="caption">
				<p>
					<h2>Notable Projects</h2>
					<ul>
						<li><a href="https://typesupply.com/portfolio/quaker-oats">Quaker Oats</a></li>
						<li><a href="https://typesupply.com/fonts/balto">Balto</a></li>
						<li><a href="https://typesupply.com/portfolio/money-magazine">Money Magazine</a></li>
						<li><a href="http://www.w3.org/TR/WOFF/">W3C WOFF Recommendation</a></li>
						<li><a href="http://unifiedfontobject.org/">Unified Font Object</a></li>
					</ul>
				</p>
			</div>
			<div class="paragraph">
				<p><span class="sans">From your experience, are web designers/developers conscious and respectful of font licensing? If not, what do you think the disconnect is?</span> I hope they will be, but we&#8217;re still in the very early stages of webfonts.</p>

<p>If there is a disconnect right now, it&#8217;s an education issue. Specifically, the two issues that need to be understood by web designers and developers are quality and licensing. Unfortunately, some of the earliest entrants into the webfont market did little more than the equivalent of a &#8220;save as…&#8221; on their desktop fonts and generated webfonts that didn&#8217;t look very good. Additionally, sites popped up that would convert desktop fonts to webfonts with little or no regard to licensing concerns. This resulted in the early adopters of webfonts wondering A. &#8220;Why should I pay for this since it looks kind of terrible?&#8221; and B. &#8220;What do you mean they require more work? That site over there will convert all of my desktop fonts to webfonts in a matter of seconds!&#8221;</p>

<p>The truth is that making a webfont that universally looks good is not trivial. It requires outline modification that must be monitored carefully (and, most likely, manually adjusted) and a process called hinting. Hinting (optimizing the font at specific pixel sizes via instructions) is required for the fonts to look good in Windows. This requires a significant amount of time and rare expertise. The time and rarity make this a very expensive investment. I can&#8217;t speak for everyone and the numbers vary widely depending on a variety of factors, but it is common to spend $1,000 or more per style just to hint the font. You can extrapolate the cost of hinting a large family from that. That doesn&#8217;t include the cost of modifying the outlines, proofing the hinting, quality-control, etc. This is an expense that the foundries must recoup (and eventually profit on since they are businesses).</p>

<p>Even if you factor out these expenses, it doesn&#8217;t mean that the fonts should be free or cheap for web use. Someone still has to draw the fonts. Making new fonts is an investment. To put it personally. I&#8217;m not being paid by anyone to work on the fonts that I am drawing today. I&#8217;m drawing them in the hope that someone will want to use them (and therefore pay for them) in the future. Regardless of where those fonts will be used—desktop, web, mobile app—I need to be compensated for the work that I have put into them.</p>

<p>So, there are licenses specific for webfont usage. There isn&#8217;t a common license direction for this yet. There are hosted services, self-hosting and things that are somewhere in-between. Foundries are still trying to figure it all out. The one common thread that seems to be emerging is that the fonts will be licensed on a per use basis. This allows for tiered pricing based on how much the fonts are actually used.</p>
				<p><span class="sans">What is the future outlook for webfonts? Will the demand increase?</span> Demand is definitely going to increase. The big question for me is the viability of high-quality webfonts. Everyone wants webfonts that look great—readers, web designers and developers and type designers. But are web designers and developers going to modify their budgets to accommodate this? I am quite optimistic that they will.</p>
				<p><span class="sans">In your opinion has the WOFF increased a collaborative connection between type designers and web designers/developers?</span> I think so. The grassroots support that pushed <span class="smcp">woff</span> into the recommendation process at the <span class="smcp">w3c</span> was a big sign of commitment from type foundries to web designers and developers.</p>
				<p><span class="sans">How much coffee do you consume on a daily basis?</span> None. I don&#8217;t drink coffee and I only have a caffeinated soft drink a few times a year.</p>
			</div>
		</div><!--END SECOND-->
		</div><!--END CONTENT-->
		
	</div><!--END MAIN-->
	
	<!--FF FOOTER-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FFFooter.php'; ?>
</body>
</html>