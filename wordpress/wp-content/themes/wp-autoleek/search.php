<?php get_header(); ?>
  <article class="col-md-8 article-searchresult">

    <h1 class="search-title inner-title">Результаты поиска </h1>
    <form method="get" name="searchform" class="searchresult-form" action="<?php bloginfo('url'); ?>/">
      <input type="text" name="s" value="<?php echo get_search_query(); ?>" />
      <span class="btn-clear"><i class="fa fa-times" aria-hidden="true"></i></span>
      <button class="btn-search">найти</button>
    </form>

    <?php $count_results = sprintf( $wp_query->found_posts );
      if ( $count_results > 0 ) {
    ?>
      <p class="search-result-count">
        По запросу найдено <?php echo $count_results; ?> результатов
      </p><!-- /.search-result-count -->
      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>
    <?php } else { ?>

      <p class="search-result-count">
        К сожалению, на ваш поисковый запрос ничего не найдено
      </p><!-- /.search-result-count -->
      <p class="search-result-count">
        Возможно вас заинтересуют следующие статьи:
      </p><!-- /.search-result-count -->
      <div class="relative-posts">
        <div class="row">
          <h6 class="populars-title col-md-12">Популярные статьи</h6>
          <?php query_posts("showposts=6"); ?>
            <?php get_template_part('loop-other'); ?>
          <?php wp_reset_query(); ?>
          <h6 class="populars-title col-md-12">Свежие публикации</h6>
          <?php query_posts("showposts=6"); ?>
            <?php get_template_part('loop-other'); ?>
          <?php wp_reset_query(); ?>
        </div>
      </div><!-- /.relative-posts -->
    <?php } ?>


  </article><!-- article-searchresult -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>


