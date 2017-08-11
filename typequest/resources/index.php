<!DOCTYPE HTML>
<html>
<head>
	<!--METADATA AND MAIN STYLE SHEET-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/functions.php'; ?>
	<?php head("Type Quest | Resources", "../styles.css");?>
	
	<link rel="stylesheet" type="text/css" href="../resources.css" />
	
	<!--LIGATURES SLIDER-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>	

<body>
	<!--HEADER-->
	<header>
		<div id="smLogo"><a class="boxLogo" href="/"></a></div>
		<div id="name">
			<h1>WEBFONT<br/>RESOURCES</h1>
		</div>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FolderNav.php'; ?>	
	</header>
	
	<div id="main">
		<div id="content">
			<p>The <span class="smcp">css</span> font-feature-settings property is a new and upcoming typographic feature that will allow for better typographic detail with web typography. The property essentially brings OpenType features such as small caps, ligatures, fractions, alternate sets and numbers to the web. Of course this is experimental at this point and is not a <span class="smcp">w3c</span> recommendation, although, it is</p>
			<p>currently in the process of recommendation in the Editor&#8217;s Draft. Browser support is hit and miss so be aware of your choice in browser. Google Chrome seems to have the best support at this time closely followed by Mozilla Firefox. If you would like more technical information please visit the blog.</p>
		</div>
	</div><!--END LIGATURES-->
	
	<div id="frac">
		<div id="magic">
			<div id="">
				<h2>Font Smoothing</h2>
				<button class="switch smoothingbutton">Image</button>
			</div>
			
			<div id="links">
				<p>An Essay on Typography</br>by Eric Gill, 1931</p>
			</div>
            
			<div id="fontsmoothing"><!--LIVE TEXT-->
                <div><span class="valueName">None</span></div>
				<p class="none">Letters are signs for sounds. Signs for numbers and other things (like the sign for a dollar) may in practice be included, though they are not strictly letters ( except as in Roman or Greek numerals & the letter signs used in Algebra). Letters are not pictures or representations. Picture writing and hieroglyphics are not letters from our point of view; and tho’ our letters, our signs for sounds, may be shown to be derived from picture writing, such derivation is so much of the dim and distant past as to concern us no longer. Letters are not pictures or representations. They are more or less abstract forms. Hence their special and peculiar attraction for the ‘mystical mug’ called man. More than most things, letters allow him to consider beauty without fear of what the Home Secretary may think or do. Art and morals are inextricably mixed, but the are of lettering is freer from adulteration than most arts; hence among a highly cultured & rational people like the Chinese the high place of calligraphy and inscription.</p>

                <div><span class="valueName">Subpixel Antialiased</span></div>
				<p class="subpixel">Letters are signs for sounds. Signs for numbers and other things (like the sign for a dollar) may in practice be included, though they are not strictly letters ( except as in Roman or Greek numerals & the letter signs used in Algebra). Letters are not pictures or representations. Picture writing and hieroglyphics are not letters from our point of view; and tho’ our letters, our signs for sounds, may be shown to be derived from picture writing, such derivation is so much of the dim and distant past as to concern us no longer. Letters are not pictures or representations. They are more or less abstract forms. Hence their special and peculiar attraction for the ‘mystical mug’ called man. More than most things, letters allow him to consider beauty without fear of what the Home Secretary may think or do. Art and morals are inextricably mixed, but the are of lettering is freer from adulteration than most arts; hence among a highly cultured & rational people like the Chinese the high place of calligraphy and inscription.</p>

                <div><span class="valueName">Antialiased</span></div>
				<p class="antialiased">Letters are signs for sounds. Signs for numbers and other things (like the sign for a dollar) may in practice be included, though they are not strictly letters ( except as in Roman or Greek numerals & the letter signs used in Algebra). Letters are not pictures or representations. Picture writing and hieroglyphics are not letters from our point of view; and tho’ our letters, our signs for sounds, may be shown to be derived from picture writing, such derivation is so much of the dim and distant past as to concern us no longer. Letters are not pictures or representations. They are more or less abstract forms. Hence their special and peculiar attraction for the ‘mystical mug’ called man. More than most things, letters allow him to consider beauty without fear of what the Home Secretary may think or do. Art and morals are inextricably mixed, but the are of lettering is freer from adulteration than most arts; hence among a highly cultured & rational people like the Chinese the high place of calligraphy and inscription.</p>
			</div><!--END LIVE TEXT-->
            
            <div id="textImage"><!--TEXT IMAGE-->
    			<div><span class="valueName">None</span></div>
				<img src="../images/imagetext.gif"/>

				<div><span class="valueName">Subpixel Antialiased</span></div>
				<img src="../images/imagetext.gif"/>
                
				<div><span class="valueName">Antialiased</span></div>
				<img src="../images/imagetext.gif"/>
			</div><!--TEXT IMAGE-->
            
		</div>
	</div><!--FONT SMOOTHING-->
	
	<!--Text Rendering-->
	<div id="numbers">
		<div id="magic">
			<div id="">
				<h2>Text Rendering</h2>
				<button class="switch numbutton">On/Off</button>
			</div>
            
        <div class="paragraph-offset-1 line">
    		<p>With the text-rendering property CSS allows you to control how text is rendered on the page by providing information to your rendering engine. So far the text-rendering property is SVG based and there is no CSS standard for it. There are five basic text-rendering values for this property but you will most likely only deal with three — legibility, speed and precision. Legibility allows the browser to focus more on legibility over speed and precision. Ligatures are enabled in text smaller than 20 pixels and kerning is applied. optimizeSpeed tells the browser to render the text quickly. As a result it turns off ligatures and additional kerning. Geometric precision allows text to be more fluid when using typographic scales because it does not allow the browser to round point sizes thus it should not stair-step when scaling.</p>
            <p>*Samples have subpixel antialiased font-smoothing applied if viewed in a Webkit browser.</br>View more specific and in-depth details on <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/text-rendering">Mozilla Developer</a>.</p>
		</div>
		
        <!--CHECKBOXES-->
		<form class="checkboxMargin">
            <input type="checkbox" checked="checked" name="optimizeLegibility" id="optimizeLegibility">
            <label>optimizeLegibility</label>

            <input type="checkbox" checked="checked" name="optimizeSpeed" id="optimizeSpeed">
            <label>optimizeSpeed</label>
  
            <input type="checkbox" checked="checked" name="optimizePrecision" id="optimizePrecision">
            <label>optimizePrecision</label>
        </form>
        <!--END CHECKBOXES-->
        
        <div id="legibility">
        <h3 class="renderTitle">Optimize Legibility</h3>
    		<div id="LeftSidebar">
				<span>Font size: 12px</span>
                <span>Font size: 18px</span>
                <span>Font size: 32px</span>
			</div>
            
			<div id="middle">
				<p class="twelve"><span class="renderTwo">HAMBURGEFONSTIV</span>
                <span class="renderTwo">HOHOOHHO</span>
                <span class="renderTwo">VA VC WA WG YA YS</span></p>
                
                <p class="eighteen"><span class="renderTwo">HAMBURGEFONSTIV</span>
                <span class="renderTwo">HOHOOHHO</span>
                <span class="renderTwo">VA VC WA WG YA YS</span></p>
                
                <p class="thirtyTwo"><span class="renderTwo">HAMBURGEFONSTIV</span>
                <span class="renderTwo">HOHOOHHO</span>
                <span class="renderTwo">VA VC WA WG YA YS</span></p>
			</div>
            
            <div id="right">
    			<p><span class="renderTwo">ff fi fj fl fft ffl</span></p>
                <p><span class="renderTwo">ff fi fj fl fft ffl</span></p>
                <p><span class="renderTwo">ff fi fj fl fft ffl</span></p>
			</div>
		</div><!--END LEGIBILITY-->
        
        <div id="speed">
        <h3 class="renderTitle">Optimize Speed</h3>
    		<div id="LeftSidebar">
				<span>Font size: 12px</span>
                <span>Font size: 18px</span>
                <span>Font size: 32px</span>
			</div>
            
			<div id="middle">
				<p class="twelve"><span class="renderOne">HAMBURGEFONSTIV</span>
                <span class="renderOne">HOHOOHHO</span>
                <span class="renderOne">VA VC WA WG YA YS</span></p>
				
				<p class="eighteen"><span class="renderOne">HAMBURGEFONSTIV</span>
                <span class="renderOne">HOHOOHHO</span>
                <span class="renderOne">VA VC WA WG YA YS</span></p>
				
				<p class="thirtyTwo"><span class="renderOne">HAMBURGEFONSTIV</span>
                <span class="renderOne">HOHOOHHO</span>
                <span class="renderOne">VA VC WA WG YA YS</span></p>
			</div>
            
            <div id="right">
    			<p><span class="renderOne">ff fi fj fl fft ffl<span></p>
                <p><span class="renderOne">ff fi fj fl fft ffl<span></p>
                <p><span class="renderOne">ff fi fj fl fft ffl<span></p>
			</div>
		</div><!--END SPEED-->
        
        <div id="precision">
        <h3 class="renderTitle">Optimize Precision</h3>
        	<div id="LeftSidebar">
				<span>Font size: 12px</span>
                <span>Font size: 18px</span>
                <span>Font size: 32px</span>
			</div>
            
			<div id="middle" class="render">
				<p class="twelve"><span class="renderThree">HAMBURGEFONSTIV</span>
                <span class="renderThree">HOHOOHHO</span>
                <span class="renderThree">VA VC WA WG YA YS</span></p>
                
                <p class="eighteen"><span class="renderThree">HAMBURGEFONSTIV</span>
                <span class="renderThree">HOHOOHHO</span>
                <span class="renderThree">VA VC WA WG YA YS</span></p>
                
                <p class="thirtyTwo"><span class="renderThree">HAMBURGEFONSTIV</span>
                <span class="renderThree">HOHOOHHO</span>
                <span class="renderThree">VA VC WA WG YA YS</span></p>
			</div>
            
            <div id="right">
    			<p><span class="renderThree">ff fi fj fl fft ffl</span></p>
                <p><span class="renderThree">ff fi fj fl fft ffl</span></p>
                <p><span class="renderThree">ff fi fj fl fft ffl</span></p>
			</div>
		</div><!--END PRECISION-->
        
    </div><!--END MAGIC-->
	</div><!--Text Rendering-->
	
	</div><!--END MAIN-->
	
	<!--FOLDER FOOTER-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FolderFooter.php'; ?>
	
	<!--ON/OFF BUTTON-->
	<!--<script src="../js/switch.js"></script>-->
	<script src="../js/checkboxes.js"></script>
</body>
</html>