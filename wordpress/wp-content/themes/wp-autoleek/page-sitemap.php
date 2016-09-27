<?php /* Template Name: Sitemap Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 article-sitemap'); ?>>
      <h1 class="sitemap-title inner-title"><span><?php the_title(); ?></span></h1>
      <?php the_content(); ?>
    </article>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
