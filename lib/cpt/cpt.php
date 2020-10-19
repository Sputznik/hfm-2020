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
		'supports'	=> array( 'title', 'editor','thumbnail', 'excerpt' )
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

/* PUSH INTO THE GLOBAL VARS OF ORBIT TAXNOMIES */
add_filter( 'orbit_taxonomy_vars', function( $orbit_tax ){

	$orbit_tax['video_category']	= array(
    'label'			  => 'Video Category',
    'slug' 			  => 'video_category',
    'post_types'	=> array( 'videos' )
  );

  return $orbit_tax;

} );
