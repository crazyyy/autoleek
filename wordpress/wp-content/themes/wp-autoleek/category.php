<?php get_header(); ?>
  <article class="col-md-8 article-cat">

    <h1 class="cat-title inner-title"><?php the_category(', '); ?></h1>

    <?php
    // load all 'category' terms for the post
    $terms = get_the_terms( get_the_ID(), 'category');
    // we will use the first term to load ACF data from
    if( !empty($terms) ) {
      $term = array_pop($terms);
      $description = get_field('description', $term );
      // do something with $custom_field
    }
    if( $description ): ?>
      <div class="cat-description">
        <?php echo $description; ?>
      </div><!-- /.cat-description -->
    <?php endif; ?>

    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

  </article><!-- article-cat -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
