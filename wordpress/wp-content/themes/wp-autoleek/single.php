<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>
      <h1 class="page-title inner-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php edit_post_link(); ?>
      <?php wpb_set_post_views(get_the_ID()); ?>
      <div class="relative-posts">
        <div class="row">
          <h6 class="populars-title col-md-12">Статьи по теме</h6>
          <?php $orig_post = $post; global $post; $categories = get_the_category($post->ID); if ($categories) { $category_ids = array(); foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
            $args=array(
              'category__in' => $category_ids,
              'post__not_in' => array($post->ID),
              'posts_per_page'=> 3, // Number of related posts that will be shown.
              'caller_get_posts'=>1
            );
            $my_query = new wp_query( $args );
          if( $my_query->have_posts() ) { while( $my_query->have_posts() ) { $my_query->the_post();?>
            <div class="populars-item col-md-4">
              <a href="<?php the_permalink(); ?>">
                <?php  if ( has_post_thumbnail()) { the_post_thumbnail('small'); } else { ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } ?>
                <h3><?php the_title(); ?></h3>
              </a>
            </div><!-- populars-item -->
          <? } } } $post = $orig_post; wp_reset_query(); ?>
          <h6 class="populars-title col-md-12">Интересные статьи</h6>

          <?php $popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) ); while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
            <div class="populars-item col-md-4">
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
      </div><!-- /.relative-posts -->
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    </article>
  <?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>





