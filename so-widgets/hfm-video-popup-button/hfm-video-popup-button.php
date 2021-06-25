<?php
/*
  Widget Name: HFM Video Popup Button
  Description: Button widget that can be used to open a video popup.
  Author: Stephen Anil, Sputznik
  Author URI: https://sputznik.com
  Widget URI:
*/
class HFM_VIDEO_POPUP_BUTTON extends SiteOrigin_Widget{

  function __construct(){
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'hfm-video-popup-button',
      // The name of the widget for display purposes.
      __( 'HFM Video Popup Button', 'siteorigin-widgets' ),
      // The $widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __( 'Button widget that can be used to open a video popup.', 'siteorigin-widgets' ),
        'help'        => '',
      ),
      //The $control_options array, which is passed through to WP_Widget
      array(),
      //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
      array(
        'video_type' => array(
          'type'    => 'select',
          'label'   => __( 'Choose video type', 'siteorigin-widgets' ),
          'options' => array(
            'sp-wp-video'	    => 'Self Hosted',
            'sp-ytube-video'	=> 'Youtube',
            'sp-vimeo-video' => 'Vimeo'
          ),
          'state_emitter' => array(
            'callback' 	=> 'select',
            'args' 			=> array( 'video_type' )
          ),
        ),
        'video_id' => array(
          'type' 		=> 'text',
          'label' 	=> __( 'Video ID', 'siteorigin-widgets' ),
          'state_handler' => array(
            'video_type[sp-wp-video]'     => array('hide'),
            'video_type[sp-ytube-video]'  => array('show'),
            'video_type[sp-vimeo-video]' => array('show'),
          ),
        ),
        'video_url' => array(
          'type' 		=> 'link',
          'label' 	=> __( 'Video URL', 'siteorigin-widgets' ),
          'state_handler' => array(
            'video_type[sp-wp-video]'     => array('show'),
            'video_type[sp-ytube-video]' 	=> array('hide'),
            'video_type[sp-vimeo-video]'  => array('hide'),
          ),
        ),
        'btn_text' => array(
          'type'    => 'text',
          'label'   => __('Button Text','siteorigin-widgets'),
          'default' => '',
        ),
        'btn_text_color' => array(
          'type' => 'color',
          'label' => __( 'Button Text Colour', 'siteorigin-widgets' ),
          'default' => '#ffffff'
        ),
        'btn_bg_color' => array(
          'type' => 'color',
          'label' => __( 'Button Background Colour', 'siteorigin-widgets' ),
          'default' => '#febd30'
        ),
      ),
      plugin_dir_path(__FILE__).'/widgets/hfm-video-popup-button'
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

siteorigin_widget_register( 'hfm-video-popup-button', __FILE__, 'HFM_VIDEO_POPUP_BUTTON' );
