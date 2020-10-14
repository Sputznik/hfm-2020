<?php
  $wrapper_class = 'grid-2';
  // $posts_count = $atts['posts_per_page'];
  // if( $posts_count > 4 ){ $wrapper_class = 'grid-2-3'; }
?>
<ul id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.orbit-article');?>" data-url="<?php _e( $atts['url'] );?>" class="list-unstyled articles-video <?php _e( $wrapper_class );?>">
  <?php $i=1; while( $this->query->have_posts() ) : $this->query->the_post();?>
    <li class="orbit-article">
      <?php include( get_stylesheet_directory().'/partials/video-popup.php' ); ?>
    </li>
  <?php $i++; endwhile;?>
</ul>
