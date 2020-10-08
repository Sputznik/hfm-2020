<?php get_header();?>
  <div class="container-fluid single-post-template">
    <div class="header">
      <div class="vertical-line"></div>
      <a href="javascript:history.back()" class="btn-nav-back">Back to Series</a>
    </div>
    <?php _e( do_shortcode( '[orbit_query style="video" post_type="videos" posts_per_page="4"]' ) );?>
  </div>
<?php get_footer();?>
