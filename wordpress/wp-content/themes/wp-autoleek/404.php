<?php get_header(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 error-page'); ?>>

    <h1 class="error-title">К сожалению такой страницы не существует</h1>
    <div class="row">
      <div class="col-md-6 error-container">
        <p>Неправильно набран адрес или такой страницы на сайте больше не существует. Возможно, ее удалили, перенесли, или вы просто опечатались.</p>
      </div>
      <div class="col-md-6 error-container">
        <p>Вы можете воспользоваться поиском, перейти на <a href="<?php echo home_url(); ?>">главную</a> или <a href="javascript:void()" onclick="goBack()">вернуться назад</a>. А ещё посмотреть актуальные материалы.</p>
      </div>
    </div>
    <div class="relative-posts">
      <div class="row">
        <h6 class="populars-title col-md-12">Популярные статьи</h6>
        <?php query_posts("showposts=3"); ?>
          <?php get_template_part('loop-other'); ?>
        <?php wp_reset_query(); ?>
      </div>
    </div><!-- /.relative-posts -->

  </article>
<?php get_footer(); ?>
