<?php
  global $youtube;
  $video_id = $youtube->get_video_id( get_post_meta( get_the_ID(), 'video_url', true ) );
  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
?>
<div class="video-thumb" style="background-image: url( <?php _e( $image_url );?> );"></div>
<div class="video-meta">
  <h4 class="title"><?php echo( ( $i < 10 ) ? "0".$i.": " : $i.": " ); the_title();?></h4>
  <div class="desc"><?php the_content();?></div>
  <div class="btn-play" data-video="<?php _e( $video_id );?>" data-behaviour="sp-ytube-video">
    <span class="play-icon"></span>
    <span>Play</span>
  </div>
</div>
