<?php

  if( !isset( $instance['show_tabs'] ) ){
    $instance['show_tabs'] = 2;
  }

  $infinite = $instance['infinite'] ? "true" : "false";

?>

<!-- HFM SLIDING NAVIGATION -->
<div class="hfm-sliding-navigation">
  <!-- TABS REPEATER -->
  <div class="fullwidth">
    <div class="vertical-line"></div>
  	<div class="container-navigation">
      <ul class="sliding-nav-tabs list-unstyled slider" data-infinite="<?php _e( $infinite );?>" data-behaviour="sliding-navigation-slick" data-items="<?php _e( $instance['show_tabs'] );?>" >
        <?php foreach ( $instance['tab_items'] as $i => $tab ) :?>
          <li class="sliding-tab">
            <a href="#sliding-<?php echo getUniqueID( $tab );?>" data-behaviour="hfm-sliding-navigation">
              <?php _e( $tab['tab_title'] );?>
            </a>
            <!-- <span class="tab-subtitle">
              <?php //_e( $tab['tab_subtitle'] );?>
            </span> -->
          </li>
        <?php endforeach;?>
      </ul> <!-- NAV TABS end.. -->

  	</div>
  </div>
  <!-- TABS REPEATER ends -->


  <div class="sliding-pane-wrapper">
    <?php foreach ( $instance['tab_items'] as $i => $tab ) :?>
      <div class="sliding-pane<?php echo $i == 0 ? ' active' : ''; ?>" id="sliding-<?php echo getUniqueID( $tab );?>">
        <?php echo siteorigin_panels_render( 'tab-desc-'.$i, true, $tab['tab_content'] );?>
      </div>
    <?php endforeach;?>
  </div>

</div> <!-- HFM SLIDING NAVIGATION ends.. -->

<style media="screen">

  /* SOW SLIDING NAVIGATION */
  .hfm-sliding-navigation .vertical-line{
    border-color: <?php _e( $instance['tab_item_color'] );?>;
    background-color: <?php _e( $instance['tab_item_color'] );?>;
  }
  .hfm-sliding-navigation .sliding-tab > a{
    color: <?php _e( $instance['tab_item_color'] );?>;
  }
  /* SOW SLIDING NAVIGATION */

</style>
