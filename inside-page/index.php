<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
    		if($_SERVER['SERVER_NAME'] == 'localhost') {
    			$inc = $_SERVER['DOCUMENT_ROOT'] . "/awesome-php-template/inc/inc.php";
    		} else {
    			$inc = $_SERVER['DOCUMENT_ROOT'] . "/inc/inc.php";
    		}
			include($inc);
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
			$page_type       = 'second-level';
			$page_title_sub  = 'Economic Development';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    $og_description  = 'Did you know? Stony Brook University generates more than $2.5 billion annually in regional economic impact and is one of the few campuses anywhere with a Vice President for Economic Development. Read more...';
		    $og_url          = 'http://www.stonybrook.edu/economic-development';

		    $page_to_top_link = true;

		    $page_footerbar   = true;

		    $validation        = false;                 //Defines if form validation is included on the page    default false
    		$contact_form      = false;                 //Defines if contact form dependencies are included     default false
		?>

	<!-- <head> -->
		<?php 
			$file  = $header;
			include($path . $file);
		?>
	<!-- </head> -->
    <body>
        <?php
			include($path . $global);
		?>

        <div class="sbu-wrapper clearfix">
        	<div class="sbu-sub-wrapper">

		        <div class="header-container">
		        	<!-- <quick-nav> -->
						<?php
							include($path . $quick_nav);
						?>
					<!-- </quick-nav> -->
		            <!-- <more-nav> -->
						<?php 
							include($path . $more_nav);
						?>
					<!-- </more-nav> -->
		            <!-- <audience-nav> -->
						<?php 
							include($path . $audience_nav);
						?>
					<!-- </audience-nav> -->
					<!-- <logo-container> -->
						<?php 
							include($path . $logo_container);
						?>
					<!-- </logo-container> -->
		        </div>
		        <div class="main-nav-container">
		        	<!-- <site-nav> -->
						<?php 
							include($path . $site_nav);
						?>
					<!-- </site-nav> -->
		        </div>
		        <div class="main-container">
		            <div class="main clearfix">

		                <!-- <economic-development> -->
							<?php 
								$file = "economic-development.php";
								include($path . $content . $secLv . $file);
							?>
						<!-- </economic-development> -->

		            </div> <!-- .main -->
		        </div> <!-- .main-container -->
		        <!-- <div.footer-container> -->
					<?php if($page_footerbar) {
						$file = "footerbar.php";
						include($path . $file);
					} ?>
				<!-- </div.footer-container> -->
<!--
				<div class="left-fixed-sidebar-container">

				</div>

				<div class="right-fixed-sidebar-container">

				</div>
-->
				<!-- <to-top> -->
					<?php if($page_to_top_link) {
						$file = "to-top.php";
						include($path . $file);
					} ?>
				<!-- </to-top> -->

	        </div><!-- .sbu-sub-wrapper -->
	    </div><!-- .sbu-wrapper -->

	    <!-- <scripts> -->
			<?php 
				$file = "footer-scripts.php";
				include($path . $file);
			?>
		<!-- </scripts> -->

		<!-- <googleanalytics> -->
			<?php /*
				$file = "site-analytics.php";
				include($path . $file); */
			?>
		<!-- </googleanalytics> -->
    </body>
</html>