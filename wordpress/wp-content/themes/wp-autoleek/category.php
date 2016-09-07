<?php get_header(); ?>
  <article class="col-md-8 article-cat">
    <?php $terms = get_the_terms( get_the_ID(), 'category');
    // we will use the first term to load ACF data from
    if( !empty($terms) ) {
      $term = array_pop($terms);
      $description = get_field('description', $term );
      // do something with $custom_field
    }
    ?>

    <h1 class="cat-title inner-title" style="background-image: url(<?php $title_bg = get_field('title_bg', $term); if ($title_bg) { $cat_img = $title_bg['url']; } else { $cat_img = get_template_directory_uri().'/img/bg/cat-title.jpg'; }; echo $cat_img; ?>);"><?php the_category(', '); ?></h1>

    <?php if( $description ): ?>
      <div class="cat-description">
        <?php echo $description; ?>
      </div><!-- /.cat-description -->
    <?php endif; ?>

    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

  </article><!-- article-cat -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
