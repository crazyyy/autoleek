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
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="container">
      <div class="row">

        <div class="logo col-md-4">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" title="">
        </div><!-- /logo -->

        <nav class="nav__header col-md-4 col-md-offset-3" role="navigation">
          <?php wpeHeadNav(); ?>
        </nav><!-- /nav -->

        <div class="searcher col-md-1">
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
