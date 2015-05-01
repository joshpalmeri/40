		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script type="text/javascript" src="js/vendor/jquery.sticky.js"></script>
		<script>
			var theVideo = $('#forty-video');
			$(window).load(function(){
				if($(window).width()>=960) {
					if(theVideo.length) {
						theVideo.get(0).play();
					}
					$(<?php echo $sticky_element_selector; ?>).sticky({ topSpacing: 0 });
				}
			});
			$(window).resize(function(){
				if($(window).width()>=960) {
					if ($('.sticky-wrapper').length == 0) { 
					    $(<?php echo $sticky_element_selector; ?>).sticky({ topSpacing: 0 });
					}
				}				
			});
		</script>

		<script src="js/vendor/jquery.easing.1.3.js"></script>
		<script src="js/vendor/jquery.easing.compatibility.js"></script>
		<script src="js/vendor/jquery.scrollTo.min.js"></script>
		<script src="js/vendor/jquery.localScroll.min.js"></script>
		<script src="plugins/waypoints/jquery.waypoints.js"></script>
		<script src="plugins/waypoints/inview.js"></script>
		<script src="js/vendor/jquery.motio.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- BEGIN Page Specific Includes -->
		<?php if($page_type=='home') { ?>
        	<script src="js/home.js"></script>
        <?php } else if($page_type=='honorees') { ?>
        	<script src="js/honorees.js"></script>
        <?php } ?>

        <?php if($profile_grid) { ?>
        	<script src="js/vendor/isotope.pkgd.min.js"></script>
        	<script src="js/dynamic-grid.js"></script>
        <?php } ?>
        <?php if($profile_page || $page_type=='home') { ?>
			<script src="js/profile-page.js"></script>
        <?php } ?>
        <!-- END Page Specific Includes -->

        <?php if($contact_form) { ?>
        	<?php includeAsset('js','plugins/contact-form/contact-form.js'); ?>
        <?php } ?>

        <?php includeAsset('js','plugins/nivo-lightbox/nivo-lightbox.min.js'); ?>

        <?php if($gallery) { ?>
	        <script src="plugins/gallery/js/isotope.pkgd.min.js"></script>
	        <script src="plugins/gallery/js/imagesloaded.pkgd.min.js"></script>
			<?php includeAsset('js','plugins/gallery/js/isotope-custom.js'); ?>
	        
	        <script src="plugins/gallery/js/jquery.magnific-popup.min.js"></script>
	        <?php includeAsset('js','plugins/gallery/js/magnific-popup-custom.js'); ?>
		<?php } ?>

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

        <script type="text/javascript">
	        <?php if($fade_in_page) { ?>
	        	$('body').prepend('<div id="preloader"><div id="status"></div></div><style type="text/css"> body { overflow: hidden; } </style>');
	            $('#status').fadeOut(); // will first fade out the loading animation
	            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
	            $('body').delay(350).css({'overflow':'visible'});
			<?php } ?>
		</script>

		<!-- BEGIN Page Specific Includes -->
		<?php if($motio==true) { ?>
		   	<script type="text/javascript">
			   	$(document).ready(function() {
					var panning = new Motio(document.getElementById('panning'), {
					    fps: 30, // Frames per second. More fps = higher CPU load.
					    speedX: -15 // Negative horizontal speed = panning to left.
					});
					panning.play(); // Start playing animation
				});
			</script>
		<?php } ?>

		<?php if($social_feed) { ?>

			<?php includeAsset('js','js/social/jquery.plugins.js'); ?>
			<?php includeAsset('js','js/social/jquery.site.js'); ?>
			<?php includeAsset('js','js/social/jquery.social.stream.1.5.4.js'); ?>
			<?php includeAsset('js','js/social/preload-messages.js'); ?>

			<script type="text/javascript">
				jQuery(document).ready(function($){
					$('#social-stream').dcSocialStream({
						feeds: {
							twitter: {
								id: 'stonybrookalum,#sbu40under40',
								intro: '',
								search: '',
								out: 'intro,thumb,text',
								thumb: true
							}
						},
						rotate: {
							delay: 0
						},
						control: false,
						filter: false,
						wall: false,
						order: 'date',
						max: 'limit',
						limit: 2,
						iconPath: 'images/dcsns-dark/',
						imagePath: 'images/dcsns-dark/'
					});
								 
				});
			</script>

        <?php } ?>

        <?php if($carousel) { ?>
	    	<?php includeAsset('js','js/elements/owl-carousel/owl.carousel.js'); ?>
	    <?php } ?>

		<script>
			//adapted from http://www.lovelldsouza.com/webdev/flickr-to-website/
			function getImgs(setId) {
			  var URL = "https://api.flickr.com/services/rest/" + // Call API
			    "?method=flickr.photosets.getPhotos" +  // Get photo from a photoset. http://www.flickr.com/services/api/flickr.photosets.getPhotos.htm
			    "&api_key=0e78a7e20cc2ea3a5456c04ce7deb2b1" +  // API key. Get one here: http://www.flickr.com/services/apps/create/apply/
			    "&photoset_id=" + setId +  // The set ID.
			    "&privacy_filter=1" +  // 1 signifies all public photos.
			    "&per_page=40" + // For the sake of this example I am limiting it to 20 photos.
			    "&format=json&nojsoncallback=1";  // Er, nothing much to explain here.

			  // See the API in action here: http://www.flickr.com/services/api/explore/flickr.photosets.getPhotos
				$.getJSON(URL, function(data){
					$.each(data.photoset.photo, function(i, item){
						// Creating the image URL. Info: http://www.flickr.com/services/api/misc.urls.html
						var src_start = "http://farm" + item.farm + ".static.flickr.com/" + item.server + "/" + item.id + "_" + item.secret;
						var img_thumb_src = src_start + "_q.jpg";
						var img_large_src = src_start + "_b.jpg";

						var img_html = '<a class="item nivo-lightbox" href="'+ img_large_src +'" data-lightbox-gallery="event-gallery">';
						img_html += '<img src="' + img_thumb_src + '" />';
						img_html += '</a>';

						$(img_html).appendTo("#the-carousel");
					});
				}).done(function() {
					// Create the Carousel
				    var owl = $("#the-carousel");
	                owl.owlCarousel({
	                	itemsCustom: [[0,2],[480,2],[600,3],[840,4],[960,5],[1140,6],[1440,7],[1700,8]],
	                    autoPlay: false,
	                    navigation : true, // Show next and prev buttons
	                    slideSpeed : 800,
	                    paginationSpeed : 400
	                });
	                $('.owl-prev-3').on('click', function() {
	                    owl.trigger('owl.prev');
	                });
	                $('.owl-next-3').on('click', function() {
	                    owl.trigger('owl.next');
	                });

	                // Initiate the Lightbox
	                $('.nivo-lightbox').nivoLightbox();
				});
			}

			$(document).ready(function() {
				getImgs("72157649295457517"); // Set up event gallery
			});
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