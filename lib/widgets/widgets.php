<?php

add_action( 'widgets_init', function(){

  register_sidebar( array(
    'name'          => 'Footer Contact Column 1',
    'id'            => 'hfm-footer-contact-one',
    'description'   => 'Appears in the footer',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer Contact Column 2',
    'id'            => 'hfm-footer-contact-two',
    'description'   => 'Appears in the footer',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

});


/* HFM SIDEBAR HOOK */
add_action( 'hfm_sidebar', function( $hfm_sidebar_id ){

	if( is_active_sidebar( $hfm_sidebar_id ) && $hfm_sidebar_id ){
		dynamic_sidebar( $hfm_sidebar_id );
	}

});
