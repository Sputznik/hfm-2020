<?php
	if( !isset( $instance['show_slides'] ) ){
		$instance['show_slides'] = 4;
	}
	$video_design = $instance['design'];
	$widget_id = 'sow-hfm-video-slider'.getUniqueID( $instance );

?>

<!-- Video Slider -->
<div class="fullwidth">
	<div class="hfm-videos-container" id="<?php _e( $widget_id );?>" >
		<section data-behaviour="videos-slick" data-items="<?php _e( $instance['show_slides'] );?>" class="hfm-video-slider">
			<?php
				foreach( $instance['slides'] as $slide ):
				$image = wp_get_attachment_url( $slide['thumbnail'] );
				$video_type = $slide['video_type'];
			  $target_url = $slide['video_id'];

			  if( $video_type == 'sp-wp-video' ){
			    $target_url = $slide['video_url'];
			  }

			  $anchor_data = 'data-behaviour="'.$video_type.'" data-video="'.$target_url.'"';
			?>
			<div class="slide">
				<div class="video-thumbnail-wrapper" <?php  _e( $anchor_data );?>>
					<div class="video-thumbnail" <?php if( $image ):?>style="background-image:url(<?php _e( $image ); ?>);" <?php endif;?> ></div>
					<span class="video-play-btn">
						<i class="fa fa-play"></i>
					</span>
				</div>
				<h5><?php _e($slide['video_title']);?></h5>
			</div>
			<?php endforeach;?>
		</section>
	</div>
</div>
<!-- End Video Slider -->

<style>

<?php _e( '#'.$widget_id );?> .hfm-video-slider .slide h5{
color: <?php echo( $video_design['title_color'] ? $video_design['title_color'] : "#000000" );?>;
 font-size: <?php echo( $video_design['title_size'] ? $video_design['title_size'].'px' : '24px');?>
}

/* Arrows */
<?php _e( '#'.$widget_id );?> .hfm-video-slider button.slick-next {
 color: <?php echo( $video_design['btn_text_color'] ? $video_design['btn_text_color'] : "#ffffff" );?>;
 background: <?php echo( $video_design['btn_bg_color'] ? $video_design['btn_bg_color'] : "#313131" );?>;
}

</style>
