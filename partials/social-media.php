<?php

$image = get_stylesheet_directory_uri().'/assets/images/ig-icon.png';

$icons = array(
	'ig'  => array(
		'title'	=> 'Instagram',
		'icon'  => $image,
		'url'   => "https://www.instagram.com/humanfactormedia/"
	),
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
	<li class="privacy-policy">
		<a href="https://humanfactormedia.co/privacy-policy/">Privacy</a>
		<span class="vertical-line"></span>
	</li>
  <?php foreach( $icons as $key => $icon ): $class = $key." social-fa-icon"; ?>
    <li>
      <a class='<?php _e( $class ); ?>' title='<?php _e( $icon['title'] );?>' target='_blank' href='<?php _e( $icon['url'] );?>'>
				<?php if( $key === 'ig' ):?>
					<img style="margin-bottom:8px;" src="<?php _e( $icon['icon'] );?>" alt="<?php _e( $icon['title'] );?>" >
				<?php else:?>
					<i class='<?php _e( $icon['icon'] );?>'></i>
				<?php endif;?>

      </a>
    </li>
  <?php endforeach;?>
</ul>
