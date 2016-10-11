<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="hidden-block"></div>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="container">
      <div class="row">

        <div class="logo col-md-4 col-sm-4 col-xs-8">
          <?php if ( is_front_page() && is_home() ){ } else { ?>
            <a href="<?php echo home_url(); ?>">
              <?php  } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
              <?php if ( is_front_page() && is_home() ){
              } else { ?>
            </a>
          <?php } ?>
        </div><!-- /logo -->

        <nav class="nav__header col-md-5 col-md-offset-2 col-sm-offset-2 col-sm-6 col-xs-4" role="navigation">
          <?php wpeHeadNav(); ?>
          <button class="mobile-nav"></button>
          <div class="mobile-nav-container">
            <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
              <input class="search-input" type="search" name="s" value="Поиск">
              <button class="search-submit" type="submit" role="button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form><!-- /search -->
            <h6>Меню</h6>
            <?php wpeSideNav(); ?>
            <?php wpeHeadNav(); ?>
          </div><!-- /.mobile-nav-container -->
        </nav><!-- /nav -->

        <div class="searcher col-md-1 col-sm-1 col-xs-1">
          <div class="search-from-container">
            <button class="btn-fake-search"><i class="fa fa-search" aria-hidden="true"></i></button>
            <form method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
              <input type="text" value="" name="s" placeholder="Поиск" />
              <button class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
              <span class="btn-close"><i class="fa fa-times" aria-hidden="true"></i></span>
            </form>
          </div><!-- /.search-from-container -->
        </div><!-- /.searcher col-md-1 -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /header -->

  <section role="main">
    <div class="container">
      <div class="row">
