<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
			$this_dir = $_SERVER['REQUEST_URI'];
			$dev_dir  = '/development/40/';
			$prod_dir = '/40/';
			$is_dev = strpos($this_dir,$dev_dir);
			if($is_dev !== false) {
				$inc = $_SERVER['DOCUMENT_ROOT'] . $dev_dir . "inc/inc.php";
			} else {
				$inc = $_SERVER['DOCUMENT_ROOT'] . $prod_dir . "inc/inc.php";
			}
			include($inc);
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
			$page_type = 'nominees';
			$tablesaw = true;
		    $main_nav_selected = 3;
		    $program_year = '2014';
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
				        
		        <div class="content-container">
		            <div class="content clearfix">

		                <!-- <main-content> -->
							<!-- <nav> -->
							    <?php
							        $file = "site-nav.php";
							        include($path . $file);
							    ?>
							<!-- </nav> -->
							
						    <!-- <nominees> -->
							    <?php
							    	include($path . $content . "nominees.php");
							    ?>
							<!-- </nominees> -->

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