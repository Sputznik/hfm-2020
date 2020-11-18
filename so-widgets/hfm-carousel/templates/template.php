<?php

  $timeout  = !empty( $instance['timeout'] ) ?  $instance['timeout'] : '5000';
  $arr_next = get_stylesheet_directory_uri().'/assets/images/cara-arrow.png';
?>
<!-- Carousel -->
<div id="hfm-carousel-sow" class="carousel slide" data-ride="carousel" data-interval="<?php _e( $timeout );?>">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $slide=0; foreach( $instance['carousel_items'] as $item ):?>
      <?php $indicator=" "; if( $slide==0 ){ $indicator= "active"; } ?>
      <li data-target="#hfm-carousel-sow" data-slide-to="<?php _e( $slide );?>" class="<?php _e( $indicator );?>"></li>
    <?php  $slide++; endforeach;?>
    <span class="next-icon">
      <a href="#hfm-carousel-sow" role="button" data-slide="next">
        <img src="<?php _e( $arr_next );?>" alt="Next">
      </a>
    </span>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

	<?php $i=0; foreach( $instance['carousel_items'] as $item ):?>
  	<?php $class=" ";if( $i==0 ){ $class= "active"; }
      $image = wp_get_attachment_url( $item['carousel_image'] );
    ?>
		<div class="item <?php _e( $class );?>">
      <div class="item-body">
				<div class="item-image">
        	<img src="<?php _e( $image );?>" alt="carousel-image">
				</div>
        <div class="item-content">
          <?php echo siteorigin_panels_render( 'carousel-desc-'.$i, true, $item['carousel_content'] );?>
        </div>
      </div>
		</div>
	<?php $i++; endforeach;?>
  </div> <!-- Wrapper ends.. -->
</div> <!-- Carousel ends.. -->
