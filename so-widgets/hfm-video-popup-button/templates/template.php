<?php

  $widget_id = 'sow-hfm-popup-btn-'.getUniqueID( $instance );
  $video_type = $instance['video_type'];
  $target_url = $instance['video_id'];

  if( $video_type == 'sp-wp-video' ){
    $target_url = $instance['video_url'];
  }

  $anchor_data = 'data-behaviour="'.$video_type.'" data-video="'.$target_url.'"';
?>

<div class="hfm-video-btn-wrapper" id="<?php _e( $widget_id );?>" >
  <div class="hfm-video-btn" <?php  _e( $anchor_data ); ?> >
    <?php _e( $instance['btn_text'] );?>
  </div>
</div>

<style media="screen">
<?php _e( '#'.$widget_id );?>.hfm-video-btn-wrapper .hfm-video-btn{
  color: <?php echo( $instance['btn_text_color'] ? $instance['btn_text_color'] : "#ffffff" );?>;
  background-color: <?php echo( $instance['btn_bg_color'] ? $instance['btn_bg_color'] : "#febd30" );?>;
}

@media (min-width: 769px){
  <?php _e( '#'.$widget_id );?>.hfm-video-btn-wrapper .hfm-video-btn:hover {
    opacity: 0.9;
  }
}

</style>
