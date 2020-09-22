<?php

/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style( 'hfm-css', get_stylesheet_directory_uri().'/assets/css/hfm-twenty-twenty.css', array('sp-core-style'), time() );
  wp_enqueue_script( 'hfm-js', get_stylesheet_directory_uri().'/assets/js/hfm-twenty-twenty.js', array( 'jquery' ), time(), true );
},99);

//Include Files
include('lib/custom-header/header-functions.php');

//Add google fonts
add_filter( 'sp_list_google_fonts', function( $fonts ){
  $fonts[] =array(
    'slug'	=> 'barlow',
    'name'	=> 'Barlow',
    'url'	  => 'Barlow'
  );
  return $fonts;
});

// Override parent themes footer template
add_action('sp_pre_footer',function(){
  include('partials/footer-template.php');
},15);

//Override parent themes footer-class
add_filter( 'sp_prefooter_class', function(){ return 'container-fluid hfm-footer-wrapper'; });
