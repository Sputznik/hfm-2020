jQuery(document).ready(function(){

	jQuery('[data-behaviour~=videos-slick]').each( function(){

		var $el = jQuery( this );

		$el.slick({
			slidesToShow		: $el.data('items'),
			slidesToScroll	: 1,
			autoplay				: false,
			autoplaySpeed		: 1500,
			arrows					: true,
			nextArrow     	: '<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',
			prevArrow     	: false,
			dots						: false,
			pauseOnHover		: true,
			responsive			: [
				{
					breakpoint	: 1300,
					settings	: { slidesToShow: 3}
				},
				{
					breakpoint: 769,
					settings: {slidesToShow: 2}
				},
				{
	        breakpoint: 520,
					settings: { slidesToShow: 1 }
      }
		]
		});

	});


});
