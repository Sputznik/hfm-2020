<?php
/*
	Widget Name: HFM Video Slider
	Description: HFM SOW for using Video Slider with SLICK.JS within the page builder
	Author: Stephen Anil, Sputznik
	Author URI:	https://sputznik.com
	Widget URI:
	Video URI:
*/
class HFM_VIDEO_SLIDER extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'hfm-video-slider',
			// The name of the widget for display purposes.
			__('HFM Video Slider', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('HFM SOW for using Slider Revolution plugin within the page builder.', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'show_slides' => array(
					'type' 			=> 'number',
					'label' 		=> __( 'Show number of slides', 'siteorigin-widgets' ),
					'default' 		=> 4,
				),
				'slides' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Slider Videos' , 'siteorigin-widgets' ),
					'item_label' => array(
						'selector' => "[id*='video_title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
					'fields' => array(
						'video_title' => array(
							'type' 			=> 'text',
							'label' 		=> __( 'Video Title', 'siteorigin-widgets' ),
							'default' 		=> '',
						),
						'thumbnail' => array(
							'type' 			=> 'media',
							'label' 		=> __( 'Choose Thumbnail', 'siteorigin-widgets' ),
							'choose' 		=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 		=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),
						'video_type' => array(
              'type'    => 'select',
              'label'   => __( 'Choose video type', 'siteorigin-widgets' ),
              'options' => array(
                'sp-wp-video'	    => 'Self Hosted',
      					'sp-ytube-video'	=> 'Youtube',
                'sp-vimeo-video' 	=> 'Vimeo'
              ),
      				'state_emitter' => array(
              	'callback' 	=> 'select',
              	'args' 			=> array( 'video_type_{$repeater}' )
          		),
            ),
      			'video_id' => array(
              'type' 		=> 'text',
              'label' 	=> __( 'Video ID', 'siteorigin-widgets' ),
      				'state_handler' => array(
                'video_type_{$repeater}[sp-wp-video]'     => array('hide'),
      	        'video_type_{$repeater}[sp-ytube-video]'  => array('show'),
                'video_type_{$repeater}[sp-vimeo-video]' 	=> array('show'),
      	    	),
            ),
      			'video_url' => array(
              'type' 		=> 'link',
              'label' 	=> __( 'Video URL', 'siteorigin-widgets' ),
      				'state_handler' => array(
                'video_type_{$repeater}[sp-wp-video]'     => array('show'),
      	        'video_type_{$repeater}[sp-ytube-video]' 	=> array('hide'),
                'video_type_{$repeater}[sp-vimeo-video]' 	=> array('hide'),
      	    	),
            ),
					)
				),
				'design' => array(
          'type'    => 'section',
          'label'   => __( 'Design', 'siteorigin-widgets' ),
          'hide'    => true,
          'fields'  => array(
						'title_size' => array(
							'type'    => 'number',
							'label'   => __( 'Font Size', 'siteorigin-widgets' ),
							'default'    	=> '24',
							'description' => 'Default Font Size 24px',
						),
						'title_color' => array(
		          'type' => 'color',
		          'label' => __( 'Title Colour', 'siteorigin-widgets' ),
		          'default' => '#000000'
		        ),
						'btn_text_color' => array(
		          'type' => 'color',
		          'label' => __( 'Next Button Arrow', 'siteorigin-widgets' ),
		          'default' => '#ffffff'
		        ),
		        'btn_bg_color' => array(
		          'type' => 'color',
		          'label' => __( 'Next Button Colour', 'siteorigin-widgets' ),
		          'default' => '#313131'
		        ),
					)
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/hfm-video-slider"
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
siteorigin_widget_register('hfm-video-slider', __FILE__, 'HFM_VIDEO_SLIDER');
