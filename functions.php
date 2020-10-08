<?php

/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('barlow-google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap', array('sp-core-style'), '1.0.0' );
  wp_enqueue_style( 'hfm-css', get_stylesheet_directory_uri().'/assets/css/hfm-twenty-twenty.css', array('sp-core-style'), time() );
  wp_enqueue_script( 'hfm-js', get_stylesheet_directory_uri().'/assets/js/hfm-twenty-twenty.js', array( 'jquery' ), time(), true );
  wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js', array('jquery'), null, true);
  wp_enqueue_script( 'sow-sliding-navigation', get_stylesheet_directory_uri().'/assets/js/sliding-navigation.js', array( 'jquery' ), time(), true );
},99);

//Include Files
include('lib/custom-header/header-functions.php');
include('lib/cpt/cpt.php');
include('lib/custom-fields/custom-fields.php');

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
