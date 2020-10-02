<?php
/*
	Widget Name: HFM HERO VIDEO
	Description: HFM HERO VIDEO
	Author: Stephen Anil, Sputznik
	Author URI: https://sputznik.com
	Widget URI:
	Video URI:
*/
class HFM_HERO_VIDEO extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'hfm-hero-video',
			// The name of the widget for display purposes.
			__('HFM HERO VIDEO', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __( 'HFM HERO VIDEO', 'siteorigin-widgets' ),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'video_id' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Video Id', 'siteorigin-widgets' ),
					'default' 	=> '',
				),
				'arrow_target' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Target Id', 'siteorigin-widgets' ),
					'default' 	=> '',
				),
				'video_overlay' => array(
					'type' 				=> 'slider',
					'label' 			=> __( 'Video Overlay', 'siteorigin-widgets' ),
					'default' 		=> 4,
					'min' 				=> 0,
					'max'					=> 10,
					'integer' 		=> true,
					'description'	=>	__( 'Default value 4. Max value 10', 'siteorigin-widgets' ),
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/hfm-hero-video"
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
siteorigin_widget_register('hfm-hero-video', __FILE__, 'HFM_HERO_VIDEO');
