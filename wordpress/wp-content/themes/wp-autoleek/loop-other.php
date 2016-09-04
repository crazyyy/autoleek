<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="populars-item col-md-4">
    <a href="<?php the_permalink(); ?>">
      <?php  if ( has_post_thumbnail()) { the_post_thumbnail('small'); } else { ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } ?>
      <h3><?php the_title(); ?></h3>
    </a>
  </div><!-- populars-item -->
<?php endwhile; endif; ?>
