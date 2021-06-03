<?php

/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('barlow-google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap', array('sp-core-style'), '1.0.0' );
  wp_enqueue_style( 'hfm-css', get_stylesheet_directory_uri().'/assets/css/hfm-twenty-twenty.css', array('sp-core-style'), '1.0.6' );
	wp_enqueue_style( 'extra-css', get_stylesheet_directory_uri().'/assets/css/extra.css', array('sp-core-style', 'hfm-css'), '1.0.1' );
  wp_enqueue_script( 'hfm-js', get_stylesheet_directory_uri().'/assets/js/hfm-twenty-twenty.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'sow-sliding-navigation', get_stylesheet_directory_uri().'/assets/js/sliding-navigation.js', array( 'jquery' ), '1.0.0', true );
},99);

//Include Files
$inc_files = array(
  'lib/custom-header/header-functions.php',
  'lib/cpt/cpt.php',
  'lib/custom-fields/custom-fields.php',
  'lib/widgets/widgets.php'
);

foreach( $inc_files as $inc_file ){ require_once( $inc_file ); }

//Add google fonts
add_filter( 'sp_list_google_fonts', function( $fonts ){
  $fonts[] =array(
    'slug'	=> 'barlow',
    'name'	=> 'Barlow',
    'url'	  => 'Barlow'
  );
  return $fonts;
});


/* ADD SOW FROM THE THEME */
add_action('siteorigin_widgets_widget_folders', function( $folders ){
  $folders[] = get_stylesheet_directory() . '/so-widgets/';
  return $folders;
});


// Override parent themes footer template
add_action('sp_pre_footer',function(){
  include('partials/footer-template.php');
},15);

//Override parent themes footer-class
add_filter( 'sp_prefooter_class', function(){ return 'container-fluid hfm-footer-wrapper'; });

// RETURNS UNIQUE ID
function getUniqueID( $data ){
	return substr( md5( json_encode( $data ) ), 0, 8 );
}

// REDIRECT ARCHIVE PAGE
function archive_to_custom_hfm_archive() {

  if( is_post_type_archive( 'videos' ) ) {
      wp_redirect( home_url( '/our-work/' ), 301 );
      exit();
  }

}
add_action( 'template_redirect', 'archive_to_custom_hfm_archive' );
