<?php /* Template Name: Contacts Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 article-cat'); ?>>
      <h1 class="contacts-title inner-title"><span><?php the_title(); ?></span></h1>

      <?php the_content(); ?>
      <?php echo do_shortcode('[contact-form-7 id="1310" title="Contact Form"]'); ?>
      <p>Мы ценим наших посетителей и отвечаем на все сообщения в максимально короткие сроки.</p>

    </article>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>
