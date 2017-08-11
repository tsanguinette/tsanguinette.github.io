<!DOCTYPE HTML>
<html>
<head>
	<!--METADATA AND MAIN STYLE SHEET-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/typequest/php/functions.php'; ?>
	<?php head("Type Quest", "../styles.css");?>
	<link href="//cloud.webtype.com/css/6f9f57f4-0f7d-4fdb-9ad3-dd36464a2cf8.css" rel="stylesheet" type="text/css" />
	<style>
	#intro{
		height:100%;
		min-width:600px;
		margin:0 auto;
	}
	
	h1{
	    font-family: "Georgia Pro Black";
	     font-style: italic;
	     font-weight: normal;
		font-size:41px;
		color:#3d3d3d;
		text-transform:none;
		text-align:center;
	}
	
	.liga{
		-moz-font-feature-settings:"liga"; 
		-ms-font-feature-settings:"liga"; 
		-o-font-feature-settings:"liga"; 
		-webkit-font-feature-settings:"liga"; 
		font-feature-settings:"liga";
	}
	
	.ligaOne{
		-moz-font-feature-settings:"liga" 1; 
		-ms-font-feature-settings:"liga" 1; 
		-o-font-feature-settings:"liga" 1; 
		-webkit-font-feature-settings:"liga" 1; 
		font-feature-settings:"liga" 1;
	}
	
	.ordn{
		-moz-font-feature-settings:"ordn"; 
		-ms-font-feature-settings:"ordn"; 
		-o-font-feature-settings:"ordn"; 
		-webkit-font-feature-settings:"ordn"; 
		font-feature-settings:"ordn";
	}
	</style>
</head>

<body>
	<!--HEADER-->
	<header class="dark">
		
		<div id="intro">
					<h1>ABCDEFGHIJKLMNOPQRSTUVWXYZ</br>abcdefghijklmnopqrstuvwxyz</br>01234567890</br>!@#$%^&*()-=[]":" "Tyler"</h1>
					<h1 class="ordn">1st 2nd</h1>
					<h1>1<span class="ordn">st</span> 2nd</h1>
					<h1 class="liga">fi ff ct st ffi ch</h1>
					<h1 class="ligaOne">fi ff ffi ffj ffk ffl</h1>
		</div>
	</header>
</body>
</html>