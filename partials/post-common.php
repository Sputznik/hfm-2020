<?php
  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
  $post_type = get_post_type();
  $client_name = get_post_meta( get_the_ID() ,'client_name', true );
  $wrapper_class = ( $post_type == 'series' ) ? 'series-wrapper': 'videos-wrapper';
?>
<div class="<?php _e( $wrapper_class );?>" style="background-image: url( <?php _e( $image_url );?> );">
  <div class="overlay"></div>
  <div class="content">
    <?php if( $post_type == 'videos' ):?>
      <h4><?php _e( $client_name );?></h4>
    <?php endif;?>
    <h2 class="title"><?php the_title();?></h2>
    <?php if( $post_type == 'series' ):?>
      <div class="desc"><?php the_excerpt();?></div>
    <?php else: ?>
      <div class="desc"><?php the_content();?></div>
    <?php endif; ?>
    <?php if( $post_type == 'series' ):?>
      <a href="<?php the_permalink();?>" class="btn-view">View Project</a>
    <?php else:?>
      <a href="<?php the_permalink();?>" class="btn-play">
        <span class="play-icon"></span>
        <span>Play</span>
      </a>
    <?php endif;?>
  </div>
</div>
