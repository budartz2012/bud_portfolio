<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="port" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?> | 
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
      <?php wp_title(); ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500 &display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
    <style>

      .hi{
        background:url(<?php echo get_theme_mod('hi_image', get_bloginfo('template_url').'/img/lisbon.jpg'); ?>)no-repeat center center; 

      }

      .album{
        background:url(<?php echo get_theme_mod('gallery_image', get_bloginfo('template_url').'/img/lisbon.jpg'); ?>)no-repeat center center; 

      }

      .footer{
        background:url(<?php echo get_theme_mod('footer_image', get_bloginfo('template_url').'/img/lisbon.jpg'); ?>)no-repeat center center; 

      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <script src="https://kit.fontawesome.com/e59807ba01.js"></script>
    <link href="<?php bloginfo('stylesheet_url') ?>"rel="stylesheet" >
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">  
          <nav class="navbar navbar-default">
            <nav class="navbar navbar-expand-md navbar-dark">
            <?php         
            wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
          </nav> 
        </nav>
        </div>
      </header>
     