<!doctype html>
<!--[if IE 8]> <html lang="en" class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('-', '-', right); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/img/touch/favicon.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/library/img/touch/chrome-touch-icon-196x196.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Cygnet Outdoors">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/img/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <header>
      <div class="container">

        <div class="row">
          <div class="span12">
            <nav class="nav nav-social">
              <ul>
                <li>Connect</li>
                <li><a href="https://www.facebook.com/cygnetoutdoors" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/CygnetOutdoors" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="http://www.pinterest.com/CygnetOutdoors/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="http://instagram.com/cygnetoutdoors" target="_blank"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </nav>
            <nav class="nav nav-main">
              <?php wp_nav_menu(array(
                'container' => false,
                'container_class' => '',
                'menu' => __( 'The Main Menu', 'bonestheme' ),
                'menu_class' => '',
                'theme_location' => '',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'depth' => 0,
                'items_wrap' => '<ul>%3$s</ul>'
              )); ?>
            </nav>
          </div>
        </div>

        <div class="row text-center">
          <div class="span12">
            <a href="<?php echo home_url(); ?>" class="logo">
              <?php if ( is_post_type_archive( 'portfolio' ) ) : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/logos/cygnet-outdoors-light.png" alt="Cygnet Outdoors" width="208" height="125">
              <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/logos/cygnet-outdoors.png" alt="Cygnet Outdoors" width="208" height="125">
              <?php endif; ?>
            </a>
          </div>
        </div>

      </div>
    </header>

