<!-- tabs  js-->
<script src="<?php echo public_url()?>js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>

<!-- //tabs-js  -->

<!-- //tabs -->    <!-- //about -->
<script src="<?php echo public_url()?>js/jarallax.js"></script>
	<script src="<?php echo public_url()?>js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="<?php echo public_url()?>js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo public_url()?>js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- Date-Picker-JavaScript -->
				<script src="<?php echo public_url()?>js/jquery-ui.js"></script>
				<script>
					$(function() {
						$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
					});
				</script>
<!-- //Date-Picker-JavaScript -->

<!-- banner text effect js file -->
		<script src="<?php echo public_url()?>js/modernizr.custom.72111.js"></script>
<!-- banner text effect js file -->


 <script type="text/javascript" src="<?php echo public_url()?>js/wow.js"></script>
   <script type="text/javascript">
      new WOW().init();
   </script>
</body>
<!-- //Body -->
</html>