<?php $bg_image='';?>
<div class="image-grid-wrapper">
  <h4 class="text-align"><?php _e( $instance['title'] );?></h4>
  <div class="image-grid-container">
    <?php foreach ( $instance['grid_items'] as $item ) :  ?>
    <?php $bg_image = wp_get_attachment_url( $item['image'] );
      if( !( $item['image'] ) ){ $bg_image = $item['image_fallback']; } ?>
    <div class="grid-img">
      <img src="<?php _e( $bg_image );?>"/>
    </div>
    <?php endforeach;?>
  </div>
</div>
