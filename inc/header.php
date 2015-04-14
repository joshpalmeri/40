    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo $page_title_full; ?></title>
        <!--<title><?php perch_pages_title(); ?></title>-->

        <meta name="author" content="<?php echo $author_name; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="keywords" content="<?php echo $page_keywords; ?>">
        <!--perch cms alternative
            <meta name="description" content="<?php perch_page_attribute('description'); ?>">
            <meta name="keywords" content="<?php perch_page_attribute('keywords'); ?>">
        -->
        <?php if(!$detect_phone_num) { ?>
            <meta name="format-detection" content="telephone=no">
        <?php } ?>

    <!--BEGIN Open Graph Meta Tags-->
    <!--See http://davidwalsh.name/facebook-meta-tags-->
        <meta property="og:title" content="<?php echo $og_title; ?>" />
        <meta property="og:description" content="<?php echo $og_description; ?>">
        <meta property="og:type" content="<?php echo $og_type; ?>" />
        <meta property="og:url" content="<?php echo $og_url; ?>" />
        <meta property="og:image" content="<?php echo $og_image; ?>" />
        <!--perch cms alternative
            <meta property="og:title" content="<?php perch_page_attribute('og_title'); ?>">
            <meta property="og:description" content="<?php perch_page_attribute('og_description'); ?>">
            <meta property="og:type"content="<?php perch_page_attribute('og_type'); ?>">
            <meta property="og:url"content="<?php perch_page_attribute('og_url'); ?>">
            <meta property="og:image"content="<?php perch_page_attribute('og_image'); ?>">
        -->
    <!--END Open Graph Meta Tags-->

    	<base href="<?php echo $css_base_url; ?>">

    <!--BEGIN Cross-device Favicon code-->
    <!--Be sure to have the appropriate images configured correctly in the site root-->
        <link rel="apple-touch-icon" href="apple-touch-icon-144x144-precomposed.png">
        <link rel="icon" href="apple-touch-icon.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="/favicon.ico">
        <![endif]-->
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="msapplication-TileImage" content="apple-touch-icon-144x144-precomposed.png">
    <!--END Cross-device Favicon code-->

    <!--BEGIN main CSS Includes-->
        <link rel="stylesheet" href="css/vendor/normalize.min.css">
        <?php includeAsset('css','css/main.css');  ?>
        <?php includeAsset('css','css/nav.css'); ?>

        <?php includeAsset('css','css/print.css','print'); ?>
    <!--END main CSS Includes-->

    <!--BEGIN conditional CSS Includes-->
        <?php if($page_type=='default') { ?>
        	<!--<link rel="stylesheet" href="css/default.css" media="all" />-->
			<!--[if lt IE 9]>
	            <link rel="stylesheet" href="css/default-ie8.css" media="all" />
	        <![endif]-->
        <?php } ?>

        <?php if($gallery==true) { ?>
            <?php includeAsset('css','plugins/gallery/css/magnific-popup.css'); ?>
            <?php includeAsset('css','plugins/gallery/css/gallery.css'); ?>
        <?php } ?>

        <?php if($page_to_top_link) { ?>
            <?php includeAsset('css','css/elements/to-top-link/to-top.css','all'); ?>
        <?php } ?>
    <!--END conditional CSS Includes-->

    <!--BEGIN IE Specific CSS Includes and Polyfills-->
        <!--[if IE 11]>
            <link rel="stylesheet" href="css/ie/ie11.css">
        <![endif]-->
        <!--[if IE 10]>
            <link rel="stylesheet" href="css/ie/ie10.css">
        <![endif]-->
    	<!--[if gt IE 8]>
            <link rel="stylesheet" href="css/ie/gte-ie9.css">
        <![endif]-->
        <!--[if IE 9]>
            <link rel="stylesheet" href="css/ie/ie9.css">
        <![endif]-->
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="css/ie/lte-ie8.css">
        <![endif]-->
        <!--BEGIN HTML5 Shiv-->
        <!--Note: This causes Google Fonts to show up on IE8-->
            <!--[if lt IE 9]>
                <script src="js/vendor/html5shiv/trunk/html5.js"></script>
            <![endif]-->
        <!--END HTML5 Shiv-->
    <!--END IE Specific CSS Includes and Polyfills-->

    <!--BEGIN Fonts.com Include-->
        <link href='http://fonts.googleapis.com/css?family=Enriqueta:400,700|Satisfy|Rosario:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href="fonts/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="fonts/icomoon/style.css">-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="/css/ie/icomoon-ie7.css">
        <![endif]-->
    <!--END Fonts.com Include-->

    <!--BEGIN Modernizr Include-->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!--END Modernizr Include-->
    </head>

