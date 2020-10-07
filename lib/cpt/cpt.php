<?php

// CREATES CUSTOM POST TYPE
add_filter( 'orbit_post_type_vars', function( $orbit_types ){

	$orbit_types['series'] = array(
		'slug' 		=> 'series',
		'labels'	=> array(
			'name' 					=> 'Series',
			'singular_name' => 'Series',
		),
		'menu_icon'	=> 'dashicons-album',
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','thumbnail' )
	);

	$orbit_types['videos'] = array(
		'slug' 		=> 'videos',
		'labels'	=> array(
			'name' 					=> 'Videos',
			'singular_name' => 'Video',
		),
		'menu_icon'	=> 'dashicons-video-alt3',
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','thumbnail' )
	);

	return $orbit_types;
} );
