<!DOCTYPE HTML>
<html>
<head>
	<!--METADATA AND MAIN STYLE SHEET-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/functions.php'; ?>
	<?php head("Type Quest | Blog", "http://typequest.org/styles.css");?>
	
	<!--LIGHTBOX-->
	<link rel="stylesheet" href="../colorbox.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="../js/jquery.colorbox.js"></script>
	<script src="../js/lightbox.js"></script>
	
</head>

<body>
	<!--HEADER-->
	<header class="blog dark">
		<div id="smLogo"><a class="boxLogo" href="/"></a></div>
		<div id="name">
			<h1>Interwebs<br/>Blogin&#8217;</h1>
		</div>
		
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/BlogNav.php'; ?>
	</header>
	
	<div id="main" class="blog">
		<?php entry("Tue", "22", "Normalize</br>OpenType", "July", "2014", "Normalize-OpenType.css, a project by <a href='https://twitter.com/kennethormandy'>Kenneth Ormandy</a>, adds OpenType features such as ligatures, kerning and more to Normalize.css. It is a great starting resource to address some of the most common typographic details often never messed with on the web. The content is good and the code is easy to implement. Visit <a href='http://kennethormandy.com/journal/normalize-opentype-css'>Ormandy’s website</a> to view his thought process and explanation of the project or grab the code on <a href='https://github.com/kennethormandy/normalize-opentype.css'>Github</a>.", "", "");?>
		
		<?php entry("Mon", "03", "Learn<br/>the Ways", "March", "2014", "Their may have been some confusion as to what this project was suppose to accomplish, code related. It was created to serve as a conversation starter and learning tool for more advanced typographic control on the web. This includes the font-feature-settings property in its experimental alternative state to the font-variant feature which is the current &#8220;recommended&#8221; way to use CSS3 OpenType features for webfonts. Engineers have worked hard to make this feature a recommendation standard for the <span class='smcp'>w3c</span> and web community. It deals with understandable language such as &#8220;common-ligatures&#8221; and &#8220;discretionary-ligatures&#8221; as opposed to &#8220;liga&#8221; and &#8220;dlig&#8221;. This is certainly a good place to start if you are interested in  basic finer typographic control on the web, especially if you are not familiar with the specifics of OpenType itself. The font-feature-settings property however is a low-level settings control and a different way of applying the same features as the font-variant property. With my experiences and purposes, the font-feature-setting has been easier to use when it comes to swash, stylistic sets and implementation. Try both methods and see which you like better because after all if you are going to be a type nerd why not use real OpenType tags in your code.</br></br>Finally, I am happy to include <a href='http://webtype.com/'>webtype.com</a> as a source for well known and OpenType feature rich webfonts. They offer free trials so what better opportunity do you have to test these CSS properties yourself!", "", "");?>
		
		<?php entry("Mon", "06", "Live<br/>Testing", "January", "2014", "There has always been an issue with webfonts in regards to web production phase and seeing what a typeface looks like in context before actually purchasing it or publishing it. FontShop, the exquisitely ran type foundry by Erik Spickerman, has produced a heavily efficient and flexible tool called Webfonter. Webfonter gives you three ways to access FontShop&#8217;s typefaces: Chrome extension, bookmarklet and in-browser. One of Webfonter&#8217;s nicest features is that you don&#8217;t have to login to gain access to the library of typefaces, how great is that! Now that you have your typefaces to test it would be helpful to adjust size, line height and letter spacing to see if they fit well. Of course Webfonter has this as an option called &#8220;Tweak&#8221; where you can adjust all of the properties I previously mentioned. Fonts.com and Typekit don&#8217;t offer any tool such as this other than single line input boxes, however, they both have dedicated tools for delivering and testing fonts. Typekit uses the Creative Cloud program whereas Fonts.com uses SkyFonts. Unfortunately you need accounts when accessing their libraries.", "", "");?>
		
			<?php entry("Sun", "05", "Smart<br/>Quotes", "January", "2014", "After spending quite a bit of time testing typographic details on the web I found out that support for smart quotes is lacking immensely across the board. By default you get dumb quotes. I solved my problem on this website by painstakingly replacing every single or double quote with an HTML character code. The codes are as followed: <code>&#8216;</code> (left single #8216), <code>&#8217;</code> (right single #8217), <code>&#8220;</code> (left double #8220) and <code>&#8221;</code> (right double #8221). Top type foundries know this is an issue and fonts.com describes smart quotes as an unfortunate glitch in web typography. Should developers demand better web development tools, is it a Unicode issue or browser rendering problem?", "", "");?>
			
			<?php entry("Wed", "30", "Mobile<br/>Typekit<br/>Support", "October", "2013", "Typekit is slowly incorporating a variety of features in its &#8220;Launch Kit&#8221; component to better control typographic details. Within this feature Adobe has given you the choice to enable/disable support for several mobile platforms. It sounds great at first and most likely is, however, with this project -hosted on Typekit- I found myself at a disappointment. By default the mobile settings are all checked so I published the project and assumed it would display ligatures and other OpenType features on my iPad Mini. This was far from the case. I repeatedly unchecked, rechecked and published the project as the Typekit support staff suggested I do as a solution to the problem. I responded to let them know their solution was not working. Eight days later, after I wrote a second response, Adobe finally responded with the following email.", "../images/email2.jpg", "See what Typekit said.");?>
		
		<?php entry("Mon", "20", "Picking<br/>Webfonts", "October", "2013", "Finding the perfect typeface for my senior thesis has been a challenge. First I started with Hoefler Text and Gotham from HFJ. Once applied the typefaces looked great, however, I quickly figured out that they would not work for my project because certain ligatures ct, st, etc were non-existent. HFJ does not support font-feature-settings currently because the feature is not a <span class='smcp'>w3c</span> standard - it is in the draft stages. Granted my problem was very particular I can understand why HFJ has chosen not to implement font-feature-settings yet: 1.) It is not a <span class='smcp'>w3c</span> standard yet (although widely used). 2.) HFJ are meticulous about constancy and the overall quality of their typefaces so they want to make sure every detail is worked out before implementing.", "../images/HFJemail.png", "See what HFJ said.");?>		
	</div><!--END MAIN-->
	
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/blogaboutFooter.php'; ?>
</body>
</html>