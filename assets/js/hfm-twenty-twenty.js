/* SOW HERO NAVIGATION */
jQuery.fn.hfm_hero_navigation = function() {

	return this.each(function() {

		var $el = jQuery(this);

		/* ACTIVATE TARGET */
		$el.activateTarget = function(){

      var tabParent = $el.parent();
      var heroPane = $el.attr('href');

			$el.activateTargetPane( heroPane );			/* ACTIVATE TARGET PANE */

      jQuery('.hfm-hero-navigation').find('.hero-tab.active').removeClass('active'); 		/* REMOVE ACTIVE CLASS FROM TAB */

      jQuery(tabParent).addClass('active'); 		/* ADD ACTIVE CLASS TO TAB */
		};
		/* ACTIVATE TARGET */

    /* ACTIVATE TARGET PANE */
    $el.activateTargetPane = function( heroPane ){

      var targetSlideIndex = jQuery(heroPane).data('slick-index');

			/* SLIDES TO THE SELECTED TARGET PANE */
      if ( jQuery('[data-behaviour~=hero-navigation-slick]').slick('slickCurrentSlide') !== targetSlideIndex ){
        jQuery('[data-behaviour~=hero-navigation-slick]').slick('slickGoTo', targetSlideIndex );
			}

    };
    /* ACTIVATE TARGET PANE */

    // SHOWS TAB PANE BASED ON THE SELECTED TAB
		$el.on( 'click', function(e) {
      e.preventDefault();
			e.stopPropagation();
      $el.activateTarget();
		});


	}); //End each()

}; /* SOW HERO NAVIGATION */

jQuery(document).ready(function(){

  /* FOR SIDE NAVIGATION */
  jQuery('[data-toggle="collapse"]').on('click', function() {

    $togglerTarget = jQuery(jQuery(this).data('target'));

    $togglerTarget.animate({
      'width': 'toggle'
    }, 350 );

  });
  /* FOR SIDE NAVIGATION */

  jQuery('a[data-behaviour~=hfm-hero-navigation]').hfm_hero_navigation(); /* SOW HERO NAVIGATION */

  jQuery('[data-behaviour~=hero-navigation-slick]').each( function(){

		var $el = jQuery( this );

		$el.slick({
			infinite				: false,
			slidesToShow		: 1,
			slidesToScroll	: 1,
			speed						: 10,
      variableWidth		: true,
			arrows					: false,
			dots						: false,
			pauseOnHover		: false,
			focusOnSelect		: false,
      accessibility   : false,
      adaptiveHeight	: true,
      swipe           : false,
      swipeToSlide    : false,
      touchMove       : false,
      draggable       : false,
			responsive		: [{
				breakpoint	: 960,
				settings	: { slidesToShow: 1 }
			}, {
				breakpoint: 768,
				settings: { slidesToShow: 1 }
			},{
        breakpoint: 520,
				settings: { slidesToShow: 1 }
      }]
		});

	});

	jQuery('[data-behaviour~=hero-navigation-slick]').slick("refresh");

	/* CHANGE THE SLIDING SPEED AFTER THE SLICK INITIALIZED */
	jQuery('[data-behaviour~=hero-navigation-slick]').on('afterChange', function( event, slick, currentSlide, nextSlide ){
    jQuery('[data-behaviour~=hero-navigation-slick]').slick('slickSetOption', 'speed', '600');
	});

	/* SINGLE VIDEOS TEMPLATE */
	jQuery('.single-post-videos .btn-play').click();

});
