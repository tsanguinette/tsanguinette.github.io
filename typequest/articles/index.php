<!DOCTYPE HTML>
<html>
<head>
	<!--METADATA AND MAIN STYLE SHEET-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/functions.php'; ?>
	<?php head("Type Quest | Leading Experts", "../styles.css");?>
	
	<link rel="stylesheet" type="text/css" href="../articles.css" />
	<link rel="stylesheet" type="text/css" href="../isotope.css" />
</head>

<body>
	<!--HEADER-->
	<header>
		<div id="smLogo"><a class="boxLogo" href="/"></a></div>
		<div id="name">
			<h1>LEADING<br/>EXPERTS</h1>
		</div>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FolderNav.php'; ?>
	</header>
	
	<div id="main">
		
	<div id="title">
		<h2 class="color">What Are They Saying?</h2>
		<p>Knowing how to code is great but what current professionals are saying about typography on the web can help you.</p>
	</div>
		
	    <section id="options" class="clearfix">

	        <ul id="filters" class="option-set clearfix" data-option-key="filter">
	          <li><a href="#filter" data-option-value="*" class="selected">show all</a></li>
			  <li><a href="#filter" data-option-value=".wd">Web Developer</a></li>
			  <li><a href="#filter" data-option-value=".td">Type Designer</a></li>
	          <li><a href="#filter" data-option-value=".ligatures, .sc, .num">Characters</a></li>
	          <li><a href="#filter" data-option-value=".legibility, .smooth">Readability</a></li>
	          <li><a href="#filter" data-option-value=".hinting">Hinting</a></li>
			  <li><a href="#filter" data-option-value=".chrome">Chrome</a></li>
			  <li><a href="#filter" data-option-value=".safari">Safari</a></li>
	          <li><a href="#filter" data-option-value=".mac">Mac</a></li>
			  <li><a href="#filter" data-option-value=".pc">PC</a></li>

	    </section> <!-- #options -->
		
		<div id="isotope">
  
	    <div id="container" class="clearfix">
			
	      	  <div class="element large ligatures safari sc num hinting mac wd" data-category="transition">
				  <div class="spacing">
			  		  <a class="tint" href="eden/"><img width="219" height="219" src="../images/dan.jpg" /></a>
					  <p class="name">Daniel Eden</p>
					  <p>Designer, Dropbox</p>
				   </div>
	      	  </div>
    
	      	  <div class="element large hinting mac wd" data-category="metalloid">
				  <div class="spacing">
	       	   	   <a class="tint" href="kalbag/"><img src="../images/laura.jpg" /></a>
					<p class="name">Laura Kalbag</p>
					<p>Web Developer, laurakalbag.com</p>
	      	  	  </div>
		  	</div>
    
	      	  <div class="element large td hinting" data-category="metalloid">
				  <div class="spacing">
	       	   <a class="tint" href="leming/"><img src="../images/tal.jpg" /></a>
				<p class="name">Tal Leming</p>
				<p>Type Designer, Type Supply</p>
	      	  </div>
		  	</div>
			
      	  <div class="element large td hinting mac hinting" data-category="metalloid">
			  <div class="spacing">
       	   <a class="tint" href="mickel/"><img src="../images/mickel.jpg" /></a>
			<p class="name">Jeremy Mickel</p>
			<p>Type Designer, MCKL</p>
      	  </div>
	  	</div>

	      	  <div class="element large wd hinting mac pc chrome safari ligatures sc num legibility" data-category="metalloid">
				  <div class="spacing">
	       	   <a class="tint" href="stoff/"><img src="../images/jason.jpg" /></a>
				<p class="name">Jason Stoff</p>
				<p>Senior Designer, Atomic Dust</p>
	      	  </div>
		  	</div>
		  
	      	  <div class="element large wd hinting mac pc chrome" data-category="metalloid">
				  <div class="spacing">
	       	   <a class="tint" href="mcneil/"><img src="../images/patrick.jpg" /></a>
				<p class="name">Patrick McNeil</p>
				<p>Author/Associate Professor, How/UMSL</p>
	      	  </div>
		  	</div>
		  
	      	  <div class="element large td hinting" data-category="metalloid">
				  <div class="spacing">
	       	   <a class="tint" href="monotype/"><img src="../images/monotype.jpg" /></a>
				<p class="name">Johnathan Zsittnik</p>
				<p>Marketing Director, Monotype</p>
	      	  </div>
		  	</div>

	      	  <div class="element large wd hinting mac chrome legibility" data-category="metalloid">
				  <div class="spacing">
	       	   <a class="tint" href="norman/"><img src="../images/marshall.jpg" /></a>
				<p class="name">Marshall Norman</p>
				<p>Web Developer, Sparkbox</p>
	      	  </div>
		  	</div>

	      	  <div class="element large wd hinting mac chrome" data-category="metalloid">
				  <div class="spacing">
	       	   <a class="tint" href="roberts/"><img src="../images/kirk.jpg" /></a>
				<p class="name">Kirk Roberts</p>
				<p>Web Developer, Kirk Roberts Design</p>
	      	  </div>
		  	</div>
			
      	  <div class="element large wd hinting mac chrome" data-category="metalloid">
			  <div class="spacing">
       	   <a class="tint" href="renicker/"><img src="../images/neil.jpg" /></a>
			<p class="name">Neil Renicker</p>
			<p>Web Developer, Sparkbox</p>
      	  </div>
	  	</div>
		
    	  <!--<div class="element large mac chrome hinting wd" data-category="metalloid">
		  <div class="spacing">
     	   	   <a class="tint" href="yates/"><img src="../images/dan.jpg" /></a>
			<p class="name">Ian Yates</p>
			<p>Webdesign tuts+, Envato</p>
    	  	  </div>
  		  </div>-->

	    </div> <!-- #container -->
	</div><!-- Center content -->

	<!--JAVASCRIPT FOR ISOTOPE-->
	    <script src="../js/jquery-1.7.1.min.js"></script>
	    <script src="../js/jquery.isotope.min.js"></script>
		<script src="../js/grid.js"></script>
    
	    </section> <!-- #content -->
	</div><!--END MAIN-->
	
	<!--FOLDER FOOTER-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/FolderFooter.php'; ?>
</body>
</html>