<?php
 $overlay = !empty( $instance['video_overlay'] ) ? $instance['video_overlay']/10 : '0.4';
?>
<!-- HFM HERO VIDEO -->
<div class="vimeo-wrapper-container hfm-hero-video">
  <div class="vimeo-wrapper">
    <iframe src="https://player.vimeo.com/video/<?php _e( $instance['video_id'] );?>?background=1&autoplay=1&loop=1&byline=0&title=0"
           frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
  <div class="overlay"></div>
  <!-- Bounce-up-down Button -->
  <div class="bounce-wrapper">
    <a class="bounce-in-btn" href="<?php _e( $instance['arrow_target'] );?>">
      <img src="<?php _e( get_stylesheet_directory_uri().'/assets/images/hero-arrow-down.png' );?>">
    </a>
  </div>
  <!-- Bounce-up-down Button -->
</div><!-- HFM HERO VIDEO  ends -->
<style media="screen">
.hfm-hero-video .overlay{
  background: rgba(0,0,0,<?php _e( $overlay );?>);
}
</style>
