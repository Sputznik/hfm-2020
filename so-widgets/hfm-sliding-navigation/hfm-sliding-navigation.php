<?php
/*
	Widget Name: HFM SLIDING NAVIGATION
	Description: HFM SLIDING NAVIGATION
	Author: Stephen Anil, Sputznik
	Author URI:	https://sputznik.com
	Widget URI:
	Video URI:
*/
class HFM_SLIDING_NAVIGATION extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'hfm-sliding-navigation',
			// The name of the widget for display purposes.
			__('HFM SLIDING NAVIGATION', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('HFM SLIDING NAVIGATION', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
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
						// 'tab_subtitle' => array(
						// 	'type' 			=> 'text',
						// 	'label' 		=> __( 'Tab Subtitle', 'siteorigin-widgets' ),
						// 	'default' 	=> '',
						// ),
						'tab_content' => array(
							'type' 	=> 'builder',
							'label' => __( 'Tab Content', 'siteorigin-widgets'),
						),
					)
				),
				'show_tabs' => array(
					'type' 			=> 'number',
					'label' 		=> __( 'Show number of tabs', 'siteorigin-widgets' ),
					'default' 	=> 3,
				),
				'tab_item_color' => array(
					'type' 		=> 'color',
					'label' 	=> __( 'Tab Text Color', 'siteorigin-widgets' ),
					'default' => '#ffffff'
				),
				'infinite' => array(
					'type' 		=> 'checkbox',
					'label' 	=> __( 'Infinite scroll ?', 'siteorigin-widgets' ),
					'default' => false
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/hfm-sliding-navigation"
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
siteorigin_widget_register('hfm-sliding-navigation', __FILE__, 'HFM_SLIDING_NAVIGATION');
