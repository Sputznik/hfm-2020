<?php get_header();?>
  <div class="container-fluid single-post-template">
    <?php if( have_posts() ): while ( have_posts() ): the_post();?>
      <div class="header">
        <div class="vertical-line"></div>
        <!-- <a href="javascript:history.back()" class="btn-nav-back">Back to Series</a> -->
        <span class="btn-nav-back"><?php the_title();?></span>
      </div>
      <div class="post-content"><?php the_content();?></div>
      <?php _e( do_shortcode( '[orbit_query style="video" post_type="videos" posts_per_page="4"]' ) );?>
    <?php endwhile;endif;?>
  </div>
<?php get_footer();?>
