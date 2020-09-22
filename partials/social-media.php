<?php

$icons = array(
	'tw'  => array(
		'title'	=> 'Twitter',
		'icon'  => 'fa fa-twitter',
		'url'   => "https://twitter.com/"
	),
	'fb'  => array(
		'title'	=> 'Facebook',
		'icon'  => 'fa fa-facebook',
		'url'   => "https://www.facebook.com/"
	),
	'youtube'  => array(
		'title'	=> 'Youtube',
		'icon'  => 'fa fa-youtube-play',
		'url'   => "https://www.youtube.com/"
	),
	'li'  => array(
		'title'	=> 'Linkedin',
		'icon'	=> 'fa fa-linkedin-square',
		'url'   => "https://www.linkedin.com/"
	),
);

?>

<ul class="social-icons list-unstyled">
  <?php foreach( $icons as $key => $icon ): $class = $key." social-fa-icon"; ?>
    <li>
      <a class='<?php _e( $class ); ?>' title='<?php _e( $icon['title'] );?>' target='_blank' href='<?php _e( $icon['url'] );?>'>
        <i class='<?php _e( $icon['icon'] );?>'></i>
      </a>
    </li>
  <?php endforeach;?>
</ul>
