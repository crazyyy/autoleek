<aside class="sidebar col-md-4" role="complementary">
  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php endif; ?>

  <?php
    // check if the repeater field has rows of data
    if( have_rows('video') ):
      echo '<div class="widget widget-video-post">';

      while ( have_rows('video') ) : the_row();
        the_sub_field('iframe');
      endwhile;

      echo '</div><!-- /.widget widget-video-post -->';
    endif; ?>


</aside><!-- /sidebar -->
