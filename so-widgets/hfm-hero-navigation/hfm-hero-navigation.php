<?php
/*
	Widget Name: HFM HERO NAVIGATION
	Description: HFM HERO NAVIGATION
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class HFM_HERO_NAVIGATION extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'hfm-hero-navigation',
			// The name of the widget for display purposes.
			__('HFM HERO NAVIGATION', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('HFM HERO NAVIGATION', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'title' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Section Title', 'siteorigin-widgets' ),
					'default' 	=> '',
				),
				'tab_items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Tabs Repeater' , 'siteorigin-widgets' ),
					'item_label' => array(
						'selector' => "[id*='tab_title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields' => array(
						'tab_title' => array(
							'type' 			=> 'text',
							'label' 		=> __( 'Tab Title', 'siteorigin-widgets' ),
							'default' 	=> '',
						),
						'tab_image' => array(
							'type' 		=> 'media',
							'label' 	=> __( 'Background Image', 'siteorigin-widgets' ),
							'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),
						'tab_content' => array(
							'type' 		=> 'textarea',
							'label' 	=> __( 'Tab Content', 'siteorigin-widgets' ),
        			'default' => '',
        			'rows' 		=> 5
						),
						'image_overlay' => array(
							'type' 				=> 'slider',
							'label' 			=> __( 'Image Overlay', 'siteorigin-widgets' ),
							'default' 		=> 4,
							'min' 				=> 0,
							'max'					=> 10,
							'integer' 		=> true,
						),
					)
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/hfm-hero-navigation"
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
siteorigin_widget_register('hfm-hero-navigation', __FILE__, 'HFM_HERO_NAVIGATION');
