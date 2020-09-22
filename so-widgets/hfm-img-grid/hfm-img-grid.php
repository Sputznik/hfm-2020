<?php
/*
	Widget Name: HFM Image Grid with Title
	Description: Three column image grid with title
	Author: Stephen Anil, Sputznik
	Author URI: http://sputznik.com
	Widget URI:
	Video URI:
*/
class HFM_IMAGE_GRID_WITH_TITLE extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'hfm-img-grid',
			// The name of the widget for display purposes.
			__('HFM Image Grid with Title', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __( 'Three column image grid with title', 'siteorigin-widgets' ),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'title' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Title', 'siteorigin-widgets' ),
					'default' 	=> '',
				),
				'grid_items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Image Repeater' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Add Image', 'siteorigin-widgets' ),
					'fields' => array(
						'image' => array(
              'type' 		 => 'media',
              'label' 	 => __( 'Choose Image', 'siteorigin-widgets' ),
              'choose' 	 => __( 'Choose image', 'siteorigin-widgets' ),
              'update' 	 => __( 'Set image', 'siteorigin-widgets' ),
              'library'  => 'image',
              'fallback' => true
	          ),
					)
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/hfm-img-grid"
		);
	}
	function get_template_name($instance) {
		return 'template';
	}
	function get_template_dir($instance) {
		return 'templates';
	}
    function get_style_name($instance) {
        return '';
    }
}
siteorigin_widget_register('hfm-img-grid', __FILE__, 'HFM_IMAGE_GRID_WITH_TITLE');
