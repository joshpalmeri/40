<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
    		if($_SERVER['SERVER_NAME'] == 'localhost') {
    			$inc = $_SERVER['DOCUMENT_ROOT'] . "/40/inc/inc.php";
    		} else {
    			$inc = $_SERVER['DOCUMENT_ROOT'] . "/inc/inc.php";
    		}
			include($inc);
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
		    $main_nav_selected = 5;
		    $inside_page_name = 'contact-submit';
		?>

	<!-- <head> -->
		<?php 
			if($page_header) {
				include($path . $header);
			}
		?>
	<!-- </head> -->
    <body>
        <?php
			include($path . $global);
		?>

        <div class="main-container">
            <div class="main clearfix">

		        <!-- <header> -->
		        <?php 
					if($page_header) {
						include($path . $inside_header);
					}
				?>
				<!-- </header> -->
				        
		        <div class="content-container">
		            <div class="content clearfix">

		                <!-- <main-content> -->
							<?php
								$file = "content/contact/contact-submit.php";
								include($path . $content . $file);
							?>
						<!-- </main-content> -->

		            </div> <!-- .content-container -->
		        </div> <!-- .content -->
		        
				<!-- <to-top> -->
					<?php if($page_to_top) {
						include($path . $to_top);
					} ?>
				<!-- </to-top> -->

				<!-- <footer> -->
			    <?php 
					if($page_footer) {
						include($path . $footer);
					}
				?>
				<!-- </footer> -->

			</div> <!-- .main -->
		</div> <!-- .main-container -->

	    <!-- <scripts> -->
			<?php 
				$file = "footer-scripts.php";
				include($path . $file);
			?>
		<!-- </scripts> -->

		<!-- <googleanalytics> -->
			<?php
				$file = "site-analytics.php";
				include($path . $file);
			?>
		<!-- </googleanalytics> -->
    </body>
</html>