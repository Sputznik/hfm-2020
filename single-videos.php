<?php get_header();?>
<?php
  global $youtube;
  $client_name = get_post_meta( get_the_ID() ,'client_name', true );
  $video_id = $youtube->get_video_id( get_post_meta( get_the_ID(), 'video_url', true ) );
  $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
  $arrow = get_stylesheet_directory_uri().'/assets/images/';
?>
  <div class="horizontal-decoration">
    <div class="container-fluid">
      <?php do_action('sp_logo'); ?>
    </div>
  </div>
  <div class="container-fluid single-post-template single-post-videos">
    <!-- <a href="javascript:history.back()" class="btn-nav-back">
      <span class="back-icon"></span>
      <span>All Originals</span>
    </a> -->
    <a href="<?php _e( home_url( '/our-work/' ) ); ?>" class="btn-nav-back">
      <span class="back-icon"></span>
      <span>Back</span>
    </a>
    <?php if( have_posts() ): while ( have_posts() ): the_post();?>
      <div class="post-meta">
        <h4 class="client-name"><?php _e( $client_name );?></h4>
        <h2 class="title"><?php the_title();?></h2>
        <div class="desc"><?php the_content();?></div>
      </div>
      <div class="post-nav">
        <span class="pull-left"><?php previous_post_link('%link', '<img src="'.$arrow.'arrow-brown-left.png'.'">'); ?></span>
        <span class="pull-right"><?php next_post_link('%link', '<img src="'.$arrow.'arrow-brown-right.png'.'">'); ?></span>
      </div>
      <div class="featured-image" style="background-image: url( <?php _e( $image_url );?> );">
        <div class="overlay"></div>
          <div class="btn-play" data-video="<?php _e( $video_id );?>" data-behaviour="sp-ytube-video">
            <span class="play-icon"></span>
            <span>Play</span>
          </div>
      </div>
    <?php endwhile;endif;?>
  </div>
<?php get_footer();?>
