<?php 
function head($title, $url) 
{
	echo "<script type='text/javascript' src='//use.typekit.net/mta7lgn.js'></script>";
	echo "<script type='text/javascript'>try{Typekit.load();}catch(e){}</script>"; 
	echo "<link rel='stylesheet' type='text/css' href='";
	echo $url;
	echo "' />";
	echo "<title>";
	echo $title;
	echo "</title>";
	echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
	echo "<meta name='description' content='Type Quest is designed to help educate graphic designers and web designers understand the power of OpenType in Webfonts while giving insightful information from current professionals in the industry! The topics include what you should keep in mind when using webfonts, supported browsers, and hinting. Discover the power of OpenType Webfonts and learn the finer coding details to implement classic typographic details.'>";
	echo "<meta name='keywords' content='webfonts,typography,ligatures,type on the web,hinting,characters,typefaces,fonts,typekit, font feature settings'>";
	echo "<meta name='author' content='Tyler Sanguinette'>";
	include_once ('analyticstracking.php');
	echo "<link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>";
}
?>

<?php 
function ArticlesNav ()
{
	echo "<nav class='light'>";
	echo "<ul>"; 
	echo "<li><a href='../../'>Home</a></li>";
	echo "<li><a href='../../features/'>OpenType features</a>";
	echo "<ul class='opentype'>";
	echo "<li><a href='../../features/#ligatures'>Kerning</a></li>";
	echo "<li><a href='../../features/#ligatures'>Ligatures</a></li>";
	echo "<li><a href='../../features/#smallCaps'>Small Caps</a></li>";
	echo "<li><a href='../../features/#numbers'>Numbers</a></li>";
	echo "<li><a href='../../features/#fractions'>Fractions</a></li>";
	echo "<li><a href='../../features/#subs'>Subscript</a></li>";
	echo "<li><a href='../../features/#sups'>Superscript</a></li>";
	echo "<li><a href='../../features/#swsh'>Swash</a></li>";
	echo "</ul>";
	echo "</li>";
	echo "<li><a href='../../articles/'>Articles</a>";
	echo "<ul class='articles'>";
	echo "<li><a href='../leming/'>Tal Leming</a></li>";
	echo "<li><a href='../eden/'>Daniel Eden</a></li>";
	echo "<li><a href='../mickel/'>Jeremy Mickel</a></li>";
	echo "<li><a href='../monotype/'>Johnathan Zsittnik</a></li>";
	echo "<li><a href='../renicker/'>Neil Renicker</a></li>";
	echo "<li><a href='../yates/'>Ian Yates</a></li>";
	echo "<li><a href='../mcneil/'>Patrick McNeil</a></li>";
	echo "<li><a href='../stoff/'>Jason Stoff</a></li>";
	echo "<li><a href='/'>Marshall Norman</a></li>";
	echo "<li><a href='../roberts/'>Kirk Roberts</a></li>";
	echo "</ul>";
	echo "</li>";
	echo "<li><a href='../../about/'>About</a></li>";
	echo "</ul>";
	echo "</nav>";
}
?>

<?php 
function entry($day, $number, $title, $month, $year, $paragraph, $url, $caption) 
{
	echo "<div id='entry'><div id='date' class='float'><p>";
	echo $day;
	echo "<br/>";
	echo $number;
	echo "</p></div>";
	echo "<div class='float'><h1>";
	echo $title;
	echo "</h1><p class='monthYear'>by: Tyler Sanguinette | ";
	echo $month;
	echo " ";
	echo $year;
	echo "</p><p class='white'>";
	echo $paragraph;
	echo "</p><p><a class='lightbox' href='";
	echo $url;
	echo "' title='";
	echo $caption;
	echo "'>";
	echo $caption;
	echo "</a></p></div></div>";
}
?>