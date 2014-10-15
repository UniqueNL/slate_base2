<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/icon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:200italic,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,400' rel='stylesheet' type='text/css'>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >


<header>
    <div class="header-bg">
        <div class="u-gridContainer relative">
            <div class="Header-logo">
                <a href="/index.php">
                <img src="/files/2014/09/kluskoorts_logo.jpg"  width="170"/>
                </a>
            </div>
            
            <div class="navigation-bar"><?php include 'includes/navigation.php'; ?>
                <a class="Navigation-menuToggle" id="js-navCollapse">
                <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                    <use xlink:href="#icon-menu2"></use>
                </svg>
            </a>
                <div class="telefoonnummer">
                    <a href="tel:0639813679"><img class="tel-img" src="/files/2014/10/phoneicon1.png" />06-39813679</a>
                </div>
                                    <div class="Mob-contact-ico">
                 <a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0639813679">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                       <use xlink:href="#icon-phone"></use>
                    </svg>
                 </a>
              
                    <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@kluskoorts.nl">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-envelope"></use>
                    </svg>
                </a>
          </div>  
            </div>
           
       
            


        </div>

    </div>
    
    <nav>
        
            
    </nav>
  <div class="Bot-Nav">
	   <div class="u-gridContainer">
		  <div class="Nav-toggle u-cf">
			
		  </div>
		
		<!-- header-contact -->
	   </div>
    </div>

</header>
