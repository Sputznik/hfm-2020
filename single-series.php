<?php get_header();?>
  <div class="container-fluid single-post-template">
    <?php if( have_posts() ): while ( have_posts() ): the_post();?>
      <div class="header">
        <div class="vertical-line"></div>
        <a href="https://orbit1.sitehub.in/hfm2020/our-work/" class="btn-nav-back">Back to Series</a>
      </div>
      <div class="post-content">
        <h6 class="title"><?php the_title();?></h6>
        <?php the_content();?>
      </div>
      <?php _e( do_shortcode( '[orbit_query style="video" post_type="videos" posts_per_page="4"]' ) );?>
    <?php endwhile;endif;?>
  </div>
<?php get_footer();?>
