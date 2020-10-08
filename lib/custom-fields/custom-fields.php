<?php
//CREATES META FIELDS

add_filter( 'orbit_meta_box_vars', function( $meta_box ){

	$meta_box['videos'] = array(
		array(
			'id'			=> 'video-meta-field',
			'title'		=> 'Additional Information',
			'fields'	=> array(
				'video_url'	=> array(
					'type' => 'text',
					'text' => 'Youtube Video URL'
				)
			)
		)
	);

	return $meta_box;
});
