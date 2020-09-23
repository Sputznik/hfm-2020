<!-- Carousel -->
<div id="hfm-carousel-sow" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $slide=0; foreach( $instance['carousel_items'] as $item ):?>
      <?php $indicator=" "; if( $slide==0 ){ $indicator= "active"; } ?>
      <li data-target="#hfm-carousel-sow" data-slide-to="<?php _e( $slide );?>" class="<?php _e( $indicator );?>"></li>
    <?php  $slide++; endforeach;?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

	<?php $i=0; foreach( $instance['carousel_items'] as $item ):?>
  	<?php $class=" ";if( $i==0 ){ $class= "active"; }
      $image = wp_get_attachment_url( $item['carousel_image'] );
    ?>
		<div class="item <?php _e( $class );?>">
      <div class="item-body">
        <img src="<?php _e( $image );?>" alt="carousel-image">
        <div class="item-content">
          <?php echo siteorigin_panels_render( 'carousel-desc-'.$i, true, $item['carousel_content'] );?>
        </div>
      </div>
		</div>
	<?php $i++; endforeach;?>
  </div> <!-- Wrapper ends.. -->
</div> <!-- Carousel ends.. -->
