<!-- HFM HERO NAVIGATION -->
<div class="hfm-hero-navigation">
  <h6 class="section-title"><?php _e( $instance['title'] );?></h6>
  <?php foreach ( $instance['tab_items'] as $i => $tab ) :?>
    <?php $image = wp_get_attachment_url( $tab['tab_image'] );?>
    <div class="hero-pane<?php echo $i == 0 ? ' active' : ''; ?>" id="target-<?php echo getUniqueID( $tab );?>">
      <div class="hero-image" style="background-image:url(<?php _e( $image );?>);"></div>
      <div class="overlay"></div>
    </div>
  <?php endforeach;?>

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

</div> <!-- HFM HERO NAVIGATION ends.. -->
