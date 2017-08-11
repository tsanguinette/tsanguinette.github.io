<!DOCTYPE HTML>
<html>
<head>
	<!--METADATA AND MAIN STYLE SHEET-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/functions.php'; ?>
	<?php head("Type Quest | OpenType Features", "../styles.css");?>
	
	<link rel="stylesheet" type="text/css" href="../features.css" />
	
	<!--LIGATURES SLIDER-->
    <link rel="stylesheet" type="text/css" media="screen" href="../coda-slider.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.coda-slider-3.0.min.js"></script>
	<script src="../js/slider.js"></script>
</head>	

<body>
	<!--HEADER-->
	<header>
		<div id="smLogo"><a class="boxLogo" href="/"></a></div>
		<div id="name">
			<h1>OPENTYPE<br/>FEATURES</h1>
		</div>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FolderNav.php'; ?>	
	</header>
	
	<div id="main">
		<div id="magic" class="content"><h2>Ligatures</h2></div>
		<div id="ligatures">
	    	<div class="coda-slider"  id="slider-id">
			
	      <div>
	        <h3 class="title">ct</h3>
			<div id="center" class="one">
	        	<div id="noactive"><h4>ct</h4></div>
				<div id="active"><h5>ct</h5></div>
			</div>
	      </div>
	  
	      <div>
	        <h3 class="title">ff</h3>
			<div id="center" class="two">
	        	<div id="noactive"><h4>ff</h4></div>
				<div id="active"><h5>ff</h5></div>
			</div>
	      </div>
	  
	      <div>
	        <h3 class="title">fi</h3>
			<div id="center" class="three">
	        	<div id="noactive"><h4>fi</h4></div>
				<div id="active"><h5>fi</h5></div>
			</div>
	      </div>
	  
	      <div>
	        <h3 class="title">st</h3>
			<div id="center" class="four">
	        	<div id="noactive"><h4>st</h4></div>
				<div id="active"><h5>st</h5></div>
			</div>
	      </div>
	  
	    </div><!--END LIGATURES-->

		<div id="content">
			<p>The <span class="smcp">css</span> font-feature-settings property is a new and upcoming typographic feature that will allow for better typographic detail with web typography. The property essentially brings OpenType features such as small caps, ligatures, fractions, alternate sets and numbers to the web. Of course this is experimental at this point and is not a <span class="smcp">w3c</span> recommendation, although, it is</p>
			<p>currently in the process of recommendation in the Editor&#8217;s Draft. Browser support is hit and miss so be aware of your choice in browser. Google Chrome seems to have the best support at this time closely followed by Mozilla Firefox. If you would like more technical information please visit the blog.</p>
		</div>
		
		<div id="magic">
			<div id="links">
				<ul>
					<li><a href="http://ilovetypography.com/2007/09/09/decline-and-fall-of-the-ligature/">I Love Typography</a></li>
					<li><a href="http://iloveligatures.tumblr.com/">You Love Ligatures</a></li>
					<li><a href="http://practicaltypography.com/ligatures.html">Practical Typography</a></li>
					<li><a href="http://opentype.info/blog/2012/11/20/whats-a-ligature/">Ralf Herrmann</a></li>
				</ul>
			</div>
			<div id="code">
				<pre><code>    -moz-font-feature-settings: "liga=1, dlig=1";
    -ms-font-feature-settings: "liga", "dlig";
    -webkit-font-feature-settings: "liga", "dlig";
    -o-font-feature-settings: "liga", "dlig";
    font-feature-settings: "liga", "dlig";</code></pre>
			</div>
		</div>
	</div><!--END LIGATURES-->
	
	<div id="frac">
		
		
		<div id="magic">
			<div id="">
				<h2>Fractions</h2>
				<button class="switch fracbutton">On/Off</button>
				<p class="frac fracon">1/2 2/3 1/4 1/3 3/4 1/8 7/8</p>
			</div>
			
			<div id="links">
				<ul>
					<li><a href="http://www.fonts.com/content/learning/fyti/using-type-tools/opentype-fractions">Fonts.com</a></li>
					<li><a href="http://ilovetypography.com/OpenType/opentype-features.html">I Love Typography</a></li>
					<li><a href="http://www.microsoft.com/typography/otspec/features_fj.htm">Microsoft</a></li>
				</ul>
			</div>
			<div id="code">
				<pre><code>-moz-font-feature-settings:"frac" 1; 
-moz-font-feature-settings:"frac=1"; 
-ms-font-feature-settings:"frac" 1; 
-o-font-feature-settings:"frac" 1; 
-webkit-font-feature-settings:"frac" 1; 
font-feature-settings:"frac" 1;</code>
				</pre>
			</div>
		</div>
	</div><!--END FRACTIONS-->
	
	<!--NUMBERS-->
	<div id="numbers">
		
		
		<div id="magic">
			<div id="">
				<h2>Numbers</h2>
				<button class="switch numbutton">On/Off</button>
				<p class="numbers onumon">0123456789 <!--<span class="lining">0123456789</span>--></p>
			</div>
			
			<div id="links">
				<ul>
					<li><a href="http://www.fonts.com/content/learning/fontology/level-4/fine-typography/oldstyle-figures">Fonts.com</a></li>
					<li><a href="http://opentype.info/blog/2010/08/14/better-web-typography-with-opentype-features/">Ralf Herrmann</a></li>
					<li><a href="http://www.microsoft.com/typography/otspec/features_ko.htm">Microsoft</a></li>
				</ul>
			</div>
			<div id="code" class="multiple">
				<code><pre>-moz-font-feature-settings:"onum" 1; 
-moz-font-feature-settings:"onum=1"; 
-ms-font-feature-settings:"onum" 1; 
-o-font-feature-settings:"onum" 1; 
-webkit-font-feature-settings:"onum" 1; 
font-feature-settings:"onum" 1;</pre>
				</code>
				<code><pre>-moz-font-feature-settings:"lnum" 1; 
-moz-font-feature-settings:"lnum=1"; 
-ms-font-feature-settings:"lnum" 1; 
-o-font-feature-settings:"lnum" 1; 
-webkit-font-feature-settings:"lnum" 1; 
font-feature-settings:"lnum" 1;</pre>
				</code>
			</div>
		</div>
	</div><!--END NUMBERS-->
	
	<!--SMALL CAPS-->
	<div id="smallCaps">
		<div id="magic">
			<div id="">
				<h2>Small Caps</h2>
				<button class="switch smcpbutton">On/Off</button>
				<p class="caps smcpon">real small caps</p>
			</div>
			
			<div id="links">
				<ul>
					<li><a href="http://www.thinkingwithtype.com/contents/letter/#Caps_and_Small_Caps">Thinking With Type</a></li>
					<li><a href="http://ilovetypography.com/2008/02/20/small-caps/">I Love Typography</a></li>
					<li><a href="http://typographyforlawyers.com/small-caps.html">Typography for Lawyers</a></li>
					<li><a href="https://www.typotheque.com/fonts/small_caps_in_opentype">Typotheque</a></li>
				</ul>
			</div>
			<div id="code">
				<code>
					<pre>-moz-font-feature-settings:"smcp" 1; 
-moz-font-feature-settings:"smcp=1"; 
-ms-font-feature-settings:"smcp" 1; 
-o-font-feature-settings:"smcp" 1; 
-webkit-font-feature-settings:"smcp" 1; 
font-feature-settings:"smcp" 1;</pre>
				</code>
			</div>
		</div>
	</div><!--END SMALL CAPS-->
	
	<!--SWASH-->
	<div id="swash">
		<div id="magic">
			<div id="swsh">
				<h2>Swash</h2>
				<button class="switch swshbutton">On/Off</button>
				<p class="swash">Touc<span class="swshon">h</span> th<span class="swshon">e</span> Swas<span class="swshon">h</span></p>
			</div>
			
			<div id="links">
				<ul>
					<li><a href="http://ilovetypography.com/2011/04/01/engaging-contextuality/">I Love Typography</a></li>
					<li><a href="http://typofonderie.com/font-support/opentype-features/">Typofonderie</a></li>
					<li><a href="http://msdn.microsoft.com/en-us/library/ms745109(v=vs.110).aspx">Microsoft Dev Network</a></li>
				</ul>
			</div>
			<div id="code">
				<code>
					<pre>-moz-font-feature-settings:"swsh" 1; 
-moz-font-feature-settings:"swsh=1"; 
-ms-font-feature-settings:"swsh" 1; 
-o-font-feature-settings:"swsh" 1; 
-webkit-font-feature-settings:"swsh" 1; 
font-feature-settings:"swsh" 1;</pre>
				</code>
			</div>
		</div>
	</div><!--END SWASH-->
	
	<!--SUB-->
	<div id="subscript">
		<div id="magic">
			<div id="subs">
				<h2>Subscript</h2>
				<button class="switch subsbutton">On/Off</button>
				<p class="scripts">Mg(OH)<span class="subson">2</span> N<span class="subson">2</span>O + H<span class="subson">2</span>O</p>
			</div>
			
			<div id="links">
				<ul>
					<li><a href="http://www.howdesign.com/resources-education/production/expert-advice-on-opentype/">How Design</a></li>
					<li><a href="http://helpme.webink.com/customer/portal/articles/346788-webink-fonts-with-opentype-features">WebINK</a></li>
					<li><a href="http://msdn.microsoft.com/en-us/library/ms745109(v=vs.110).aspx">Microsoft Dev Network</a></li>
				</ul>
			</div>
			<div id="code">
				<code>
					<pre>-moz-font-feature-settings:"subs" 1; 
-moz-font-feature-settings:"subs=1"; 
-ms-font-feature-settings:"subs" 1; 
-o-font-feature-settings:"subs" 1; 
-webkit-font-feature-settings:"subs" 1; 
font-feature-settings:"subs" 1;</pre>
				</code>
			</div>
		</div>
	</div><!--END SUB-->
	
	<!--SUP-->
	<div id="superscript">
		<div id="magic">
			<div id="sups">
				<h2>Superscript</h2>
				<button class="switch supsbutton">On/Off</button>
				<p class="scripts">Cu<span class="supson">2</span></p>
			</div>
			
			<div id="links">
				<ul>
					<li><a href="http://www.howdesign.com/resources-education/production/expert-advice-on-opentype/">How Design</a></li>
					<li><a href="http://helpme.webink.com/customer/portal/articles/346788-webink-fonts-with-opentype-features">WebINK</a></li>
					<li><a href="http://msdn.microsoft.com/en-us/library/ms745109(v=vs.110).aspx">Microsoft Dev Network</a></li>
				</ul>
			</div>
			<div id="code">
				<code>
					<pre>-moz-font-feature-settings:"sups" 1; 
-moz-font-feature-settings:"sups=1"; 
-ms-font-feature-settings:"sups" 1; 
-o-font-feature-settings:"sups" 1; 
-webkit-font-feature-settings:"sups" 1; 
font-feature-settings:"sups" 1;</pre>
				</code>
			</div>
		</div>
	</div><!--END SUB-->
	
	</div><!--END MAIN-->
	
	<!--FOLDER FOOTER-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FolderFooter.php'; ?>
	
	<!--ON/OFF BUTTON-->
	<script src="../js/switch.js"></script>
</body>
</html>