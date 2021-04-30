<?php
  $nav_arrow = get_stylesheet_directory_uri().'/assets/images/';
?>
<!-- Carousel -->
<div id="hfm-ig-sow" class="carousel slide" data-ride="carousel" data-interval="false">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $slide=0; foreach( $instance['slider_items'] as $item ):?>
      <?php $indicator=" "; if( $slide==0 ){ $indicator= "active"; } ?>
      <li data-target="#hfm-ig-sow" data-slide-to="<?php _e( $slide );?>" class="<?php _e( $indicator );?>"></li>
    <?php  $slide++; endforeach;?>
    <!-- Indicators -->
    <a class="left carousel-control" data-target="#hfm-ig-sow" role="button" data-slide="prev">
      <span>
        <img src="<?php _e($nav_arrow.'cara-arrow-left.png')?>" alt="Left Arrow" />
      </span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" data-target="#hfm-ig-sow" role="button" data-slide="next">
      <span>
        <img src="<?php _e($nav_arrow.'cara-arrow.png')?>" alt="Right Arrow" />
      </span>
      <span class="sr-only">Next</span>
    </a>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

	<?php $i=0; foreach( $instance['slider_items'] as $item ):?>
  	<?php $class=" ";if( $i==0 ){ $class= "active"; } ?>
		<div class="item <?php _e( $class );?>">
      <div class="item-body">
				<div class="ig-wrapper">
          <?php _e( $item['embed_code'] );?>
        </div>
        <div class="item-content">
          <?php echo siteorigin_panels_render( 'instagram-slider-content-'.$i, true, $item['slider_content'] );?>
        </div>
      </div>
		</div>
	<?php $i++; endforeach;?>
  </div> <!-- Wrapper ends.. -->


</div> <!-- Carousel ends.. -->
