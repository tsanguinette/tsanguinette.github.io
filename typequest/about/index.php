<!DOCTYPE HTML>
<html>
<head>
	<!--METADATA AND MAIN STYLE SHEET-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/functions.php'; ?>
	<?php head("Type Quest | About", "../styles.css");?>
	<link rel="stylesheet" type="text/css" href="../form.css">
</head>

<body>
	<!--HEADER-->
	<header class="about dark">
		<div id="smLogo"><a class="boxLogo" href="/"></a></div>
		<div id="name">
			<h1>THE EPIC<br/>TALE</h1>
		</div>
		
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/AboutNav.php'; ?>
	</header>
	
	<div id="main" class="about">
		<div id="about">
			<a href="http://tylersanguinette.com/blog"><div id="box" class="float">  <div id="overlay">
    <h2>Check out my Personal Type Blog</h2>
  </div></div></a>
			
			<div class="float">
				<p class="white normal">The World Wide Web Consortium recommendations can be rather loaded and sometimes down right boring, however, it is full of great and wonderfully thought-out standards for the web. This project is an extension and promotion of the font-feature-settings <span class="smcp">css</span> property, a low-level styling option. Since the property is in the Editor&#8217;s Draft and not a recognized recommendation there are few resources for students and educators. None of which bring relevant professionals opinions&#8217; and insight about typography on the web next to the actual code. Through this website readers should understand the importance and growth of webfonts, make informed and detail oriented decisions about type on the web, and most importantly identify and implement OpenType features on the web.</p>
				
				<p class="white normal">If you have more experience and are advanced in preprocessed code please check out the <span class="smcp">less</span>, <span class="smcp">scss</span> and Stylus OpenType repo at <a href="http://git.typequest.org">git.typequest.org</a>. It was made so that large amounts of OpenType <span class="smcp">css</span> code could be applied with a single line of <span class="smcp">less</span> or <span class="smcp">scss</span> code. With the single line of code, once processed, it contains browser prefixes and other markup content. You can even use multiple OpenType values if you would like. I do not recommend a large amount on a single selector but it is certainly possible for a couple.</p>
				
				<p class="white normal">This project was created in Senior Seminar 1 at the University of Missouri - Saint Louis under the direction of Gretchen Schisla. A special thanks to <a href="http://www.enrichcreative.com/studio/gretchen.php">Gretchen</a>, <a href="http://benkiel.com/">Ben Kiel</a> and <a href="http://pmcneil.com/">Patrick McNeil</a> for their continued support and help with this project. My presentation is also available at <a href="http://talk.typequest.org/">talk.typequest.org</a>.</p>
				<p class="white normal"><a href="http://macromates.com/">TextMate</a>, <a href="http://fetchsoftworks.com/">Fetch</a>, Adobe Photoshop <span class="smcp">cs</span>5 were used to create this project. The typefaces in it [the project] include Effra by <a href="http://www.daltonmaag.com/buyonline/fonts/effra">Dalton Maag</a> and Adobe Caslon Pro by <a href="http://www.adobe.com/products/type/font-designers/carol-twombly.html">Carol Twombly</a> served on <a href="http://typekit.com/">Typekit</a>. Under the hood is <span class="smcp">html</span>5, <span class="smcp">css</span>3, <span class="smcp">php</span> and JavaScript/jQuery.</p>
				
				<p>Follow the project on Twitter at <a href="http://twitter.com/typequestOT">@typequestot</a> or me at <a href="http://twitter.com/tsanguinette">@tsanguinette</a>.</p>
				
				<p class="white normal">To learn more about me and view my recent work, please visit my personal website at <a href="http://tylersanguinette.com/">tylersanguinette.com</a>. If you like my project(s) take a look at some of my friends&#8217; work:
					<ul>
						<li><a href="http://www.behance.net/marquislove"/>Marquis Love</a></li>
						<li><a href="http://www.karagordon.com/"/>Kara Gordon</a></li>
						<li><a href="http://www.500px.com/jennyxlin"/>Jenny Lin</a></li>
						<li><a href="http://www.behance.net/garretteDdesign"/>Garrette Daugherty</a></li>
						<li><a href="http://www.behance.net/nerminz"/>Nermin Zimich</a></li>
						<li><a href="http://www.behance.net/charlesnowell"/>Charlie Nowell</a></li>
					</ul></p>
				
				<!--NEW FORM-->
					<!--<form id="form" action="http://tylersanguinette.com/webformmailer" method="post" data-validate="parsley">
						<input type="hidden" name="redirect" value="http://typequest.org/" />
					<div class="form_description">
						<h2>Contact me</h2>
						<p>Do you have any questions, comments or suggestions?</p>
					</div>
									
						<ul>
					<li>
						<input placeholder="First name" type="text" name= "first_name" class="name" data-required="true"/>
						</br>
						<input placeholder="Last name" type="text" name="last_name" class="name" data-required="true"/>
					</li>
				
					<li>
						<input placeholder="Email address" name="email" class="email" type="email" data-parsley-type="email" data-required="true"/> 
					</li>
				
					<li>
						<input placeholder="Website" type="text" name="website" class="website" type="text" data-parsley-type="url" data-required="true"> 
					</li>	
				
					<li>
						<textarea placeholder="What would you like to say?" type="text" name="paragraph" class="textarea" data-required="true"></textarea> 
					</li>
			
					<li class="buttons">
						<button type="submit" value="Submit">Submit</button>
					</li>
						</ul>
					</form>-->	
					<!--END FORM-->
				
			</div><!--END FLOAT DIV-->
		</div>
	</div><!--END MAIN-->
	
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/blogaboutFooter.php'; ?>
</body>
</html>