<?php
  global $post;
  $bg_class = '';
  $logos = get_stylesheet_directory_uri().'/assets/images/';
  $navbar_close_btn = $logos.'arrow-right.png';
  $is_sticky_page = get_post_meta( $post->ID, $key = 'sticky_transparent', true );

  // Change header styles for sticky and single pages
  if( is_single() || $is_sticky_page ){
    $bg_class = 'hfm-brown-header';
    $navbar_close_btn = $logos.'arrow-right-sticky.png';
  }

?>
<div class="container-fluid hfm-navbar-wrapper <?php _e( $bg_class );?>">
  <?php if( is_single() || $is_sticky_page ){ do_action('sp_sticky_logo'); } else{ do_action('sp_logo'); } ?>
    <nav class="navbar navbar-default side-navigation">
      <!-- <div class="container-fluid"> -->
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar top-bar "></span>
    				<span class="icon-bar middle-bar"></span>
    				<span class="icon-bar bottom-bar"></span>
    			</button>
  			</div>
    		<?php do_action('sp_nav_menu');?>
      <!-- </div> -->
    </nav>
</div>

<style media="screen">
.navbar-toggle::before { content: url(<?php echo $navbar_close_btn; ?>); }
.hfm-footer .navbar-toggle::before { content: url(<?php echo $logos.'arrow-right.png'; ?>); }
</style>
