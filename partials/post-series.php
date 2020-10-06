<?php
  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
?>
<div class="series-wrapper" style="background-image: url( <?php _e( $image_url );?> );">
  <div class="overlay"></div>
  <div class="content">
    <h2 class="title"><?php the_title();?></h2>
    <div class="desc"><?php the_content();?></div>
    <a href="#" class="btn-view">View Project</a>
  </div>
</div>
