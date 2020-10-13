<!-- HFM HERO NAVIGATION -->
<div class="hfm-hero-navigation">
  <div class="fullwidth">
    <div class="slider" data-infinite="false" data-behaviour="hero-navigation-slick" data-items="1" >
      <?php foreach ( $instance['tab_items'] as $i => $tab ) :?>
        <?php $image = wp_get_attachment_url( $tab['tab_image'] );?>
        <div class="hero-pane" id="target-<?php echo getUniqueID( $tab );?>">
          <div class="hero-image" style="background-image:url(<?php _e( $image );?>);"></div>
          <div class="overlay"></div>
        </div>
      <?php endforeach;?>
    </div>
  </div>
	<div class="hfm-hero-content">
		<h6 class="section-title"><?php _e( $instance['title'] );?></h6>
	  <ul class="hero-nav-tabs list-unstyled">
	    <?php foreach ( $instance['tab_items'] as $i => $tab ) :?>
	      <li class="hero-tab<?php echo $i == 0 ? ' active' : ''; ?>">
					<a href="#target-<?php echo getUniqueID( $tab );?>" data-behaviour="hfm-hero-navigation">
						<?php _e( $tab['tab_title'] );?>
					</a>
	        <span class="tab-content">
	          <?php _e( $tab['tab_content'] );?>
	        </span>
				</li>
	    <?php endforeach;?>
	  </ul> <!-- NAV TABS end.. -->
	</div>
</div> <!-- HFM HERO NAVIGATION ends.. -->
