<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <!-- <inc> -->
        <?php
            $inc = $_SERVER['DOCUMENT_ROOT'] . "/40/inc/inc.php";
            include($inc);
        ?>
    <!-- </inc> -->
    <!--site variables-->
        <?php
            $page_type = 'honorees';
            $profile_page = true;
            $main_nav_selected = 1;
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

                <!-- <header> -->
                <?php 
                    if($page_footer) {
                        include($path . $footer);
                    }
                ?>
                <!-- </header> -->
                        
                <div class="content-container">
                    <div class="content clearfix">

                        <!-- <main-content> -->
                            <!-- <nav> -->
                                <?php
                                    $file = "site-nav.php";
                                    include($path . $file);
                                ?>
                            <!-- </nav> -->

                            <section class="honorees-grid first-section clearfix">

                                <div class="overlay bio-overlay">
                                    <div class="overlay-controls clearfix">
                                        <a href="<?php echo $program_year; ?>" class="back overlay-control icon-before grid-icon-before clearfix" role="button" aria-label="Back to Nominee List" tabindex="0"><span class="hide-accessible-smaller">Back</span></a>
                                        <a href="<?php echo $program_year; ?>" class="category overlay-control icon-before dots-icon-before clearfix category-nav-trigger" role="button" aria-label="View Categories" tabindex="0"><span class="hide-accessible-smaller">Categories</span></a>
                                        <h3 class="category-header stars-around" data-category="Civil Service & Activism" role="button" tabindex="0" label="View all honorees in Civil Service & Activism">Civil Service &amp; Activism</h3>
                                    </div>
                                    <div class="name-detail overlay-wrapper clearfix">
                                        <div class="name">Errol Cockfield <span class="year">&#8217;94</span></div>
                                        <div class="social clearfix">
                                            <a href="#" class="twitter icon-before twitter-before" target="_blank">@ecockfield</a>
                                            <a href="#" class="linkedin icon-before linkedin-before" target="_blank">View profile</a>
                                        </div>
                                    </div>
                                    <div class="bio-detail overlay-wrapper clearfix">
                                        <div class="title-detail">
                                            <span class="degree">BA English</span>
                                            <span class="title">Senior VP, Edelman</span>
                                        </div>
                                        <div class="bio-image">
                                            <img src="img/people/grid/errol-cockfield.jpg" alt="Portrait of Errol Cockfield" />
                                            <a href="http://www.youtube.com/watch?v=Z8MhZJqdEKc" class="cta video-trigger nivo-lightbox icon-before play-icon-before" role="button" tabindex="0">Play Video</a>
                                        </div>
                                        <ul class="bullet-points">
                                            <li>Former Press Secretary for New York Governors David Paterson and Elliot Spitzer</li>
                                            <li>Former reporter at Newsday and Los Angeles Times</li>
                                            <li>Named "City and State’s 40 Under 40" in 2007</li>
                                        </ul>
                                    </div>
                                    <a href="http://www.youtube.com/watch?v=Z8MhZJqdEKc" class="cta video-trigger mobile-video-trigger nivo-lightbox icon-before play-icon-before" role="button" tabindex="0">Play Video</a>
                                    <div class="pagination-wrapper clearfix">
                                        <a href="." class="back pagination-trigger" role="button" aria-label="View previous biography" tabindex="0">
                                            <span class="label icon-before">Previous</span>
                                            <span class="name">Joshua <br />Palmeri</span>
                                        </a>
                                        <a href="." class="next pagination-trigger" role="button" aria-label="View previous biography" tabindex="0">
                                            <span class="label icon-before">Next</span>
                                            <span class="name">Lynn<br /> Zawie</span>
                                        </a>
                                    </div>
                                </div>

                            </section>

                            <!-- <category-nav> -->
                                <?php
                                    $file = "category-nav.php";
                                    include($path . $file);
                                ?>
                            <!-- </category-nav> -->

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