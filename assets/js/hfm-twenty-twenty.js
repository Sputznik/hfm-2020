/* SOW HERO NAVIGATION */
$.fn.hfm_hero_navigation = function() {

	return this.each(function() {

		var $el = $(this);

		/* ACTIVATE TARGET */
		$el.activateTarget = function(){

      var tabParent = $el.parent();
      var heroPane = $el.attr('href');

			$el.activateTargetPane( heroPane );			/* ACTIVATE TARGET PANE */

      $('.hfm-hero-navigation').find('.hero-tab.active').removeClass('active'); 		/* REMOVE ACTIVE CLASS FROM TAB */

      $(tabParent).addClass('active'); 		/* ADD ACTIVE CLASS TO TAB */
		};
		/* ACTIVATE TARGET */

    /* ACTIVATE TARGET PANE */
    $el.activateTargetPane = function( heroPane ){

      var targetSlideIndex = $(heroPane).data('slick-index');

			/* SLIDES TO THE SELECTED TARGET PANE */
      if ( $('[data-behaviour~=hero-navigation-slick]').slick('slickCurrentSlide') !== targetSlideIndex ){
        $('[data-behaviour~=hero-navigation-slick]').slick('slickGoTo', targetSlideIndex );
			}

    };
    /* ACTIVATE TARGET PANE */

    // SHOWS TAB PANE BASED ON THE SELECTED TAB
		$el.on( 'click', function(e) {
      e.preventDefault();
      $el.activateTarget();
		});


	}); //End each()

}; /* SOW HERO NAVIGATION */

$(document).ready(function(){

  /* FOR SIDE NAVIGATION */
  $('[data-toggle="collapse"]').on('click', function() {

    $togglerTarget = $($(this).data('target'));

    $togglerTarget.animate({
      'width': 'toggle'
    }, 350 );

  });
  /* FOR SIDE NAVIGATION */

  $('a[data-behaviour~=hfm-hero-navigation]').hfm_hero_navigation(); /* SOW HERO NAVIGATION */

  $('[data-behaviour~=hero-navigation-slick]').each( function(){

		var $el = $( this );

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

	$('[data-behaviour~=hero-navigation-slick]').slick("refresh");

	/* CHANGE THE SLIDING SPEED AFTER THE SLICK INITIALIZED */
	$('[data-behaviour~=hero-navigation-slick]').on('afterChange', function( event, slick, currentSlide, nextSlide ){
    $('[data-behaviour~=hero-navigation-slick]').slick('slickSetOption', 'speed', '600');
	});

});
