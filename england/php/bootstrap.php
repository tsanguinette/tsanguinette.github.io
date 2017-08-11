<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="http://tylersanguinette.com/england/js/waypoints.min.js"></script>
	

	<!-- Latest compiled and minified JavaScript -->
    <script src="http://tylersanguinette.com/england/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.1/js/jasny-bootstrap.min.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41914323-4', 'tylersanguinette.com');
  ga('send', 'pageview');

</script>
<script>
  	  $(function() {                     // When the page has loaded,
  	  $('.sidebar-module-inset').waypoint(               // create a waypoint
  	      function() {
			  $(".sidebar-module-inset").addClass( "fade" );
		  }, { offset: '50%'});
  	  });
	  
  	  $(function() {                     // When the page has loaded,
  	  $('#skypeWaypoint').waypoint(               // create a waypoint
  	      function() {
			  $("#skypeWaypoint").addClass( "fade" );
		  }, { offset: '52%'});
  	  });
	  
  	  $(function() {                     // When the page has loaded,
  	  $('#socialWaypoint').waypoint(               // create a waypoint
  	      function() {
			  $("#socialWaypoint").addClass( "fade" );
		  }, { offset: '54%'});
  	  });
	  
  	  $(function() {                     // When the page has loaded,
  	  $('ul.pagination').waypoint(               // create a waypoint
  	      function() {
			  $("ul.pagination").addClass( "translateOpacity" );
		  }, { offset: '47%'});
  	  });
</script>
