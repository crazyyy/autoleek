<?php /* Template Name: Ad Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 article-cat pagest'); ?>>
      <h1 class="cat-title inner-title"><?php the_title(); ?></h1>

      <?php the_content(); ?>
      <?php edit_post_link(); ?>
    </article>
  <?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
