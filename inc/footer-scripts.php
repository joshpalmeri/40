		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <?php if($sticky_element) { ?>
        <script type="text/javascript" src="js/vendor/jquery.sticky.js"></script>
		<script>
			$(window).load(function(){
				/*console.log("ww: "+$(window).width());*/
				if($(window).width()>=1022) {
					$(<?php echo $sticky_element_selector; ?>).sticky({ topSpacing: 0 });
				}
			});
			$(window).resize(function(){
				/*console.log("ww: "+$(window).width());*/
				if($(window).width()>=1022) {
					if ($('.sticky-wrapper').length == 0) { 
					    $(<?php echo $sticky_element_selector; ?>).sticky({ topSpacing: 0 });
					}
				}
			});
		</script>
		<?php } ?>

		<script src="js/vendor/jquery.easing.1.3.js"></script>
		<script src="js/vendor/jquery.easing.compatibility.js"></script>
		<script src="js/vendor/jquery.scrollTo.min.js"></script>
		<script src="js/vendor/jquery.localScroll.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <?php if($fastclick_js) { ?>
        <script src="js/vendor/fastclick.js"></script>
        <script type="text/javascript">
		    //<![CDATA[
		        $(function() {
				    FastClick.attach(document.body);
				});
		    //]]>
		</script>
		<?php } ?>

		<script src="js/vendor/placeholders.jquery.min.js"></script>

		<?php if($fittext_js) { ?>
        <script src="js/vendor/jquery.fittext.js"></script>
		<script type="text/javascript">
		    //<![CDATA[
				$("#fittextdemo").fitText(1.1, { minFontSize: '50px', maxFontSize: '75px' });
		    //]]>
		</script>
		<?php } ?>

		<?php if($validation) { ?>
	        <script src="js/vendor/jquery-validation/jquery.validate.min.js"></script>
	        <script src="js/vendor/jquery-validation/additional-methods.min.js"></script>
	        <script type="text/javascript">
	        	$('.validate').validate();
	        </script>
		<?php } ?>

		<!-- BEGIN Page Specific Includes -->
		<?php if($page_type=='') { ?>

        <?php } ?>
        <!-- END Page Specific Includes -->

        <script type="text/javascript">
	        <?php if($fade_in_page) { ?>
	        	$('body').prepend('<div id="preloader"><div id="status"></div></div><style type="text/css"> body { overflow: hidden; } </style>');
	            $('#status').fadeOut(); // will first fade out the loading animation
	            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
	            $('body').delay(350).css({'overflow':'visible'});
			<?php } ?>
		</script>
        <!-- window.load() -->
        <script type="text/javascript">
	        $(window).load(function() { // makes sure the whole site is loaded				

				<?php if($page_loader) { ?>
		            $('#preloader-status').fadeOut(); // will first fade out the loading animation
		            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
				<?php } ?>

		        <?php if($page_to_top) { ?>
		        	//hide link by default
		        	$('#totop').addClass('invisible');

		        <?php } ?>
	            
	            <?php if($page_scroll) { ?>
	            	//define scrollto target for page load
	            	var scrollToTarget = <?php echo $page_scroll_target ?>;
		            if(scrollToTarget) {
		           		$('body').scrollTo( scrollToTarget, <?php echo $page_scroll_time; ?> );
		            }

		        <?php } ?>
	        })
		</script>