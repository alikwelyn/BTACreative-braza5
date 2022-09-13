<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="author" content="Álik Welyn & BTA Creative">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>
  <?php $theme_options_code = 435; //$theme_options = get_fields($theme_options_code); ?>
  <?php
    $show_preloader = get_field('show_preloader', $theme_options_code);
    if($show_preloader == true){ 
  ?>
    <div class="preloader">
      <img class="preloader-logo" src="<?php bloginfo('template_url'); ?>/assets/imgs/logo.png" width="200" alt="<?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ); ?>">
      <div class="preloader-preview-area">
          <div class="ball-pulse">
              <div></div>
              <div></div>
              <div></div>
          </div>
      </div>
    </div>
  <?php 
    }
  ?>
  <?php 
    $show_wp = get_field('show_wp_button', $theme_options_code);
    if($show_wp == true){ 
  ?>
    <div>
      <a href="https://api.whatsapp.com/send/?phone=<?php the_field('whatsapp_default'); ?>&text=<?php the_field('whatsapp_msg'); ?>&app_absent=0" id="wa_button" target="_new">
        <div class="circle-fill" style="transform-origin: center;"></div>
        <div class="img-circle" style="transform-origin: center;">
          <div class="img-circleblock" style="transform-origin: center;"></div>
        </div>
      </a>
    </div>
  <?php } ?>
  <?php if ( !is_home() && is_front_page() ) { ?>
    <nav class="navbar fixed-top navbar-expand-lg">
      <div class="navbar-collapse collapse dual-nav order-2 order-md-1 justify-content-end">
        <?php
          wp_nav_menu( array(
            'menu'              => 'menu-principal-esq',
            'theme_location'    => 'menu-principal-esq',
            'depth'             => 2,
            'container'         => 'ul',
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'wp_page_menu'
          ) );
        ?>
      </div>
      <a class="navbar-brand order-0 order-md-2" href="<?php echo get_home_url(); ?>">
        <?php 
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <img id="brand-img" src="<?php echo $image[0]; ?>" width="150" alt="<?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ); ?>" alt="<?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ); ?>">
      </a>
      <div class="navbar-collapse collapse dual-nav order-3 order-md-3">
        <?php
          wp_nav_menu( array(
            'menu'              => 'menu-principal-dir',
            'theme_location'    => 'menu-principal-dir',
            'depth'             => 2,
            'container'         => 'ul',
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'wp_page_menu'
          ) );
        ?>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </nav>
<?php } ?>
<?php if ( is_blog() || is_category() || is_search() || is_page() && !is_home() && !is_front_page() ) { ?>
    <nav class="navbar fixed-top navbar-expand-lg">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-collapse collapse dual-nav order-2 order-md-1 justify-content-end">
        <?php
          wp_nav_menu( array(
            'menu'              => 'menu-principal-esq',
            'theme_location'    => 'menu-principal-esq',
            'depth'             => 2,
            'container'         => 'ul',
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'wp_page_menu'
          ) );
        ?>
      </div>
      <a class="navbar-brand mx-auto order-0 order-md-2" href="<?php echo get_home_url(); ?>">
        <?php 
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <img id="brand-img" src="<?php echo $image[0]; ?>" width="150" alt="<?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ); ?>" alt="<?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ); ?>">
      </a>
      <div class="navbar-collapse collapse dual-nav order-3 order-md-3">
        <?php
          wp_nav_menu( array(
            'menu'              => 'menu-principal-dir',
            'theme_location'    => 'menu-principal-dir',
            'depth'             => 2,
            'container'         => 'ul',
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'wp_page_menu'
          ) );
        ?>
      </div>
    </nav>
<?php } ?>
<?php if ( is_home() && !is_front_page() ) { ?>
    <nav class="navbar fixed-top navbar-expand-lg">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-collapse collapse dual-nav order-2 order-md-1 justify-content-end">
        <?php
          wp_nav_menu( array(
            'menu'              => 'menu-principal-esq',
            'theme_location'    => 'menu-principal-esq',
            'depth'             => 2,
            'container'         => 'ul',
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'wp_page_menu'
          ) );
        ?>
      </div>
      <a class="navbar-brand mx-auto order-0 order-md-2" href="<?php echo get_home_url(); ?>">
        <?php 
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <img id="brand-img" src="<?php echo $image[0]; ?>" width="150" alt="<?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ); ?>" alt="<?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ); ?>">
      </a>
      <div class="navbar-collapse collapse dual-nav order-3 order-md-3">
        <?php
          wp_nav_menu( array(
            'menu'              => 'menu-principal-dir',
            'theme_location'    => 'menu-principal-dir',
            'depth'             => 2,
            'container'         => 'ul',
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'wp_page_menu'
          ) );
        ?>
      </div>
    </nav>
<?php } ?>