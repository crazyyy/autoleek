<?php /* Template Name: Home Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>

      <div class="home-carousel">
        <?php if( have_rows('slider') ): while ( have_rows('slider') ) : the_row(); ?>
          <div>
            <?php $image = get_sub_field('image');
              if( $image ) { ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php } else if ( has_post_thumbnail()) { the_post_thumbnail('slider'); } else { ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } ?>
            <h6><?php the_sub_field('title'); ?></h6>
            <a href="<?php the_sub_field('link'); ?>" class="know-more">Узнать больше</a>
          </div>
        <?php endwhile; endif; ?>

        <?php query_posts("showposts=7"); ?>
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
        <?php wp_reset_query(); ?>
      </div><!-- home-carousel -->

      <div class="subscribe-block">
        <h6>Подпишитесь и узнайте первыми о новых публикациях на сайте<span>Мы не рассылаем спам и не передаём адреса наших подписчиков третим лицам</span></h6>
        <form action="">
          <input type="text" placeholder="Ваш e-mail">
          <button>Подписка</button>
        </form>
      </div><!-- /.subscribe-block -->

      <div class="pools-block" style="background-image: url(<?php $pool_bg = get_field('pool_bg'); echo $pool_bg['url']; ?>);">
        <?php if (function_exists('vote_poll') && !in_pollarchive()): ?>
          <ul>
            <li><?php get_poll();?></li>
          </ul>
        <?php endif; ?>
      </div><!-- /.pools-block -->

      <div class="populars-block">
        <div class="row">
          <h6 class="populars-title col-md-12">Популярные статьи</h6>
          <?php $popularpost = new WP_Query( array( 'posts_per_page' => 6, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) ); while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
            <div class="populars-item col-md-4 col-sm-6 col-xs-6">
              <a href="<?php the_permalink(); ?>">
                <?php  if ( has_post_thumbnail()) { the_post_thumbnail('small'); } else { ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } ?>
                <h3><?php the_title(); ?></h3>
              </a>
            </div><!-- populars-item -->
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
        </div>
      </div><!-- /.populars-block -->
    </article>
  <?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
