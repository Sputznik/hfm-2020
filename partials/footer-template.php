<?php $img_path = get_stylesheet_directory_uri().'/assets/images';?>

<div class="hfm-footer">

	<div class="section-one">

		<div class="left-column">

			<div class="hfm-logo">
				<img src="<?php _e( "$img_path/hfm-logo.png" );?>">
			</div>
			<div class="contact">
				<h6>Manhattan</h6>
				<p>79 Madison Avenue 3rd Floor New York, NY 10016</p>
			</div>

		</div>

		<!-- <div class="right-column hfm-main-menu"></div> -->

	</div>

	<div class="section-two">
		<span class="copyright">© Copyright 2020 Human Factor Media, LLC. All rights reserved. Various trademarks held by their respective owners.</span>
		<?php get_template_part( 'partials/social', 'media' );?>
	</div>

</div>
