<?php

/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style( 'hfm-css', get_stylesheet_directory_uri().'/assets/css/hfm-twenty-twenty.css', array('sp-core-style'), time() );
},99);
