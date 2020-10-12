<?php

$icons = array(
	'fb'  => array(
		'title'	=> 'Facebook',
		'icon'  => 'fa fa-facebook',
		'url'   => "https://www.facebook.com/TheHumanFactorMEDIA/?modal=admin_todo_tour"
	),
	'youtube'  => array(
		'title'	=> 'Youtube',
		'icon'  => 'fa fa-youtube-play',
		'url'   => "https://www.youtube.com/channel/UCzpEIH1XeCBhlw54TDjiOOQ?view_as=subscriber"
	),
	'li'  => array(
		'title'	=> 'Linkedin',
		'icon'	=> 'fa fa-linkedin-square',
		'url'   => "https://www.linkedin.com/company/13007724/admin/"
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
