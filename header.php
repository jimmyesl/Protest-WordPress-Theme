<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title><?php bloginfo('name') ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
      
    
    <!-- Custom styles for this template -->
    <!--<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

<!--<body <?php body_class(); ?>>-->
  <div id="wrapper">
      <div class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url('/') ?>">
            <?php if(get_theme_mod('branding_logo')) : ?>
              <img class="logo" src="<?php echo get_theme_mod('branding_logo'); ?>" height="100px">
            <?php else : ?>
              <?php bloginfo('name'); ?>
            <?php endif; ?>
          </a>
       </div>
    <div class="navbar-collapse collapse">
    <?php
             wp_nav_menu( array( 
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
             );
          ?>
         </div><!--/.navbar-collapse -->
      </div>
      </div>
    
    