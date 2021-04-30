<?php
/*
	Widget Name: HFM Instagram Slider
	Description: HFM Instagram Slider
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class HFM_INSTAGRAM_SLIDER extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'hfm-insta-slider',
			// The name of the widget for display purposes.
			__('HFM Instagram Slider', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('HFM Instagram Slider', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'slider_items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Slider Items' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Item', 'siteorigin-widgets' ),
					'fields' => array(
						'embed_code' => array(
			        'type' => 'tinymce',
			        'label' => __( 'Instagram Embed Code', 'siteorigin-widgets' ),
			        'default' => '',
			        'rows' => 10,
			        'default_editor' => 'html'
				    ),
						'slider_content' => array(
							'type' 	=> 'builder',
							'label' => __( 'Slider Content', 'siteorigin-widgets'),
						),

					)
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/hfm-insta-slider"
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
siteorigin_widget_register('hfm-insta-slider', __FILE__, 'HFM_INSTAGRAM_SLIDER');
