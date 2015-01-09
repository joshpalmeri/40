<?php 
    /* Include Variables */
    $root        = $_SERVER['DOCUMENT_ROOT'];       //server root
    $inc_loc     = 'inc/';                          //location for php includes
    $dir         = dirname(__FILE__);

    $site_domain = 'http://localhost/';    //change to URL when going live

    if($_SERVER['SERVER_NAME'] == 'localhost') {
        $site          = 'awesome-php-template/'; //site folder inside the root dir
        $css_base_url  = 'http://localhost/awesome-php-template/';
        $path  = $root . '/' . $site . $inc_loc; //construct the path for php includes

        $is_local_environment = true;
        $is_production_environment = false;

        $working_path_relative_start_location = "localhost/";
    } else {
        $site          = ''; //site folder inside the root dir
        $css_base_url  = '/';
        $path  = $root . '/' . $site . '/' . $inc_loc; //construct the path for php includes

        $is_production_environment = true;
        $is_local_environment = false;

        $working_path_relative_start_location = "public_html/";
    }

    $working_path_asset_dir = substr_replace($dir, $working_path_relative_start_location.$site, strpos($dir,$working_path_relative_start_location));

    $content     = "content/";                  //directory for php content
        $test    = "test/";                     //custom directory variables

    $header          = "header.php";            //header php file
    $site_nav        = "site-nav.php";          //nav php file
    $footer          = "footer.php";            //footer php file
    $to_top          = "to-top.php";            //php file for to-top link
    $global          = "global.php";            //header php file


    /* Meta Variables Defaults */
    $author_name       = 'Joshua Palmeri';      //your name
    $page_type         = 'default';             //custom page type
    $page_title        = '';                    //meta title
    $page_description  = '';                    //meta description
    $page_keywords     = '';                    //meta keywords
    $page_title_sub    = '';                    //meta sub title
    $page_title_full   = $page_title . ' | ' . 
                         $page_title_sub;       //full meta title, format 'Title | Subtitle'

    $detect_phone_num  = false;                 //format-detection for telephone number
                                                //default is false, meaning device styles will not be applied

    $og_title          = '';                    //OpenGraph title
    $og_description    = $page_description;     //OpenGraph description
    $og_type           = 'website';             //OpenGraph type: for options see http://ogp.me/ 
    $og_url            = 'http://';             //site URL for OpenGraph
    $og_image          = 'http://';             //image for OpenGraph


    /* Page Include Controls */
    $page_header       = true;                  //Defines if $header is included on page        default true
    $page_footer       = true;                  //Defines if footer is included on page         default true
    $page_loader       = false;                 //Defines if $page_loader is included on page   default false

    /* Javascript Libraries */
    $fastclick_js       = true;                 //Defines if fastclick.js is included to remove 300ms delay from mobile clicks
    $fittext_js         = true;                 //Defines if fittext.js is included to resize text relative to its container's width

    /* Totop Controls */
    $page_to_top        = true;                 //Defines if $to_top is included on page        default true
                                                //speed defined in plugins.js click listener

    /* Default Scroll Controls */
    $page_scroll        = true;                  
    $page_scroll_target = '".scroll"'; //Define options for scroll-to elements, to be used in conditional php
    $page_scroll_time   = 2000;                 //Time for scroll function in milliseconds

    
    /* Sticky Element Controls */
    $sticky_element          = true;            //Defines whether there is a sticky element
    $sticky_element_selector = '".sticky"';     //Define selector for element(s) that should be sticky. Needs ".quotes"

    /* Display Configurations, Default Highlights */
    $main_nav_selected  = 0;                    //Index of selected nav item. Default is the first one.

    /* Cache busting for newer asset files */
    $filename_based_cache_busting = true;
    
    include $path . '../includes/filename_based_cache_busting.php';

?>