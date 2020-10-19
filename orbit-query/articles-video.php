<ul id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.orbit-article');?>" data-url="<?php _e( $atts['url'] );?>" class="list-unstyled articles-video grid-2">
  <?php $i=1; while( $this->query->have_posts() ) : $this->query->the_post();?>
    <li class="orbit-article">
      <?php include( get_stylesheet_directory().'/partials/video-popup.php' ); ?>
    </li>
  <?php $i++; endwhile;?>
</ul>
