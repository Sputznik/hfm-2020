<?php $img_path = get_stylesheet_directory_uri().'/assets/images';?>

<div class="hfm-footer">

	<div class="section-one">

		<div class="left-column">

			<div class="hfm-logo">
				<a href="<?php _e( get_bloginfo('url') );?>">
					<img src="<?php _e( "$img_path/hfm-logo.png" );?>">
				</a>
			</div>
			<div class="contact">
				<h6>One Nashville Place</h6>
				<p>150 4TH AVENUE NORTH 20th Floor NASHVILLE <br/> TN 37219</p>
			</div>
			<div class="contact">
				<h6>Brooklyn</h6>
				<p>155 Water Street Suite 3-16 Brooklyn, NY 11201</p>
			</div>

		</div> <!-- Left-column ends.. -->

		<div class="right-column hfm-main-menu">

			<div class="hfm-navbar-wrapper">
		    <nav class="navbar navbar-default side-navigation">
	    		<div class="navbar-header">
	    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
	    				<span class="sr-only">Toggle navigation</span>
	    				<span class="icon-bar top-bar "></span>
	    				<span class="icon-bar middle-bar"></span>
	    				<span class="icon-bar bottom-bar"></span>
	    			</button>
	  			</div>
		    	<?php do_action('sp_nav_menu');?>
		    </nav>
			</div>

		</div> <!-- Right-column ends.. -->

	</div> <!-- Section-one ends.. -->

	<div class="section-two">
		<span class="copyright">© Copyright 2020 Human Factor Media, LLC. All rights reserved. Various trademarks held by their respective owners.</span>
		<?php get_template_part( 'partials/social', 'media' );?>
	</div> <!-- Section-two ends.. -->

</div> <!-- Footer ends.. -->
