<?php 
function entry($day, $number, $title, $month, $year, $paragraph, $caption, $HTMLtext) 
{
	echo "<div id='entry'><div id='date' class='float'><p>";
	echo $day;
	echo "<br/>";
	echo $number;
	echo "</p></div>";
	echo "<div class='float'><h1>";
	echo $title;
	echo "</h1><p class='monthYear'>by: Tyler Sanguinette | ";
	echo $month; $year;
	echo "</p><p class='white'>";
	echo $paragraph;
	echo "</p><p><a class='lightbox' href='";
	echo $url;
	echo "' title='";
	echo $caption;
	echo "'>";
	echo $HTMLtext;
	echo "</a></p></div></div>";
}
?>