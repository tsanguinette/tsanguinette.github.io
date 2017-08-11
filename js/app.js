$(document).foundation();

$(document).ready(function() {
	$('.toggle').click(function() {
		$('.menu-mobile').slideToggle('fast');
	});
});

$("#shareRoundIcons").jsSocials({
    showLabel: false,
    showCount: false,
    shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "whatsapp"]
});

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a.simple-scroll").on('click', function(event) {

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({scrollTop: $('#projects').offset().top-50}, 800);
	  return false;
  });
});
