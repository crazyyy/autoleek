<?php /* Template Name: Home Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>

      <?php query_posts("showposts=7"); ?>
        <div class="home-carousel">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php $show = get_field('show'); if ($show) { ?>
              <div>
                <?php $image = get_field('image');
                  if( $image ) { ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php } else if ( has_post_thumbnail()) { the_post_thumbnail('slider'); } else { ?>
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } ?>
                <h6><?php the_title(); ?></h6>
                <a href="<?php the_permalink(); ?>" class="know-more">Узнать больше</a>
              </div>
            <?php } ?>
          <?php endwhile; endif; ?>
        </div><!-- home-carousel -->
      <?php wp_reset_query(); ?>

      <div class="subscribe-block">
        <h6>Подпишитесь и узнайте первыми о новых публикациях на сайте<span>Мы не рассылаем спам и не передаём адреса наших подписчиков третим лицам</span></h6>
        <form action="">
          <input type="text" placeholder="Ваш e-mail">
          <button>Подписка</button>
        </form>
      </div><!-- /.subscribe-block -->



      <h1 class="page-title inner-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php edit_post_link(); ?>

    </article>
  <?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
