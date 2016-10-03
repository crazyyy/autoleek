<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 pagest'); ?>>
      <h1 class="page-title inner-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php edit_post_link(); ?>
      <div class="relative-posts">
        <div class="row">
          <h6 class="populars-title col-md-12">Интересные статьи</h6>
          <?php query_posts("showposts=3"); ?>
            <?php get_template_part('loop-other'); ?>
          <?php wp_reset_query(); ?>
        </div>
      </div><!-- /.relative-posts -->
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    </article>
  <?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
