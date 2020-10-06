/* SOW SLIDING NAVIGATION */
$.fn.hfm_sliding_navigation = function() {


	return this.each(function() {

  	var $el = jQuery(this);

    /* SELECTED TAB */
    $el.getTarget = function(){
      var selectedTab = jQuery($el).attr('href');
      var slidingPane = jQuery('.sliding-pane-wrapper').find(selectedTab);
			$el.showActivePane( slidingPane );
		};
    /* SELECTED TAB */

		/* SHOWS SLIDING PANE BASED ON THE SELECTED TAB */
		$el.showActivePane = function( slidingPane ){

			jQuery('.sliding-pane-wrapper').find('.sliding-pane.active').animate({ opacity: 0 }, 800, "swing").removeClass('active');    /* REMOVE ACTIVE CLASS FROM SLIDING PANE */
      jQuery(slidingPane).animate({ opacity: 1 }, 800, "swing").addClass('active'); 		/* ADD ACTIVE CLASS FROM SLIDING PANE */
		};
		/* SHOWS SLIDING PANE BASED ON THE SELECTED TAB */

    /* SELECTED TAB'S PARENT */
    $el.getTargetParent = function( $tabParent ){

      var tabParentIndex = $tabParent.data("slick-index");

      if ( $('.slick-slider').slick('slickCurrentSlide') !== tabParentIndex ){
        $('.slick-slider').slick('slickGoTo', tabParentIndex);
      }

    };
    /* SELECTED TAB'S PARENT */


    /* ON CLICK EVENT HANDLER  */
    $el.on('click', function (e) {

        e.preventDefault();

        $el.getTargetParent( $(this).parent() );

        $el.getTarget();


    });
    /* ON CLICK EVENT HANDLER  */



  });



};

$(document).ready(function(){

  $('a[data-behaviour~=hfm-sliding-navigation]').hfm_sliding_navigation(); /* SOW SLIDING NAVIGATION */

  $('[data-behaviour~=sliding-navigation-slick]').each( function(){

		var $el = $( this );

		// console.log( $el.data('items'), $el.data('infinite') );

		$el.slick({
			infinite				: $el.data('infinite'),
			slidesToShow		: $el.data('items'),
			slidesToScroll	: 1,
			speed						: 10,
      // slidesPerRow		: $el.data('items'),
      variableWidth		: true,
			arrows					: false,
			dots						: false,
			pauseOnHover		: false,
			focusOnSelect		: true,
      accessibility: true,
      adaptiveHeight	: true,
      centerMode			: true,
      centerPadding		: '0px',
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

	$(".slider").slick("refresh");

	/* CHANGE THE SLIDING SPEED AFTER THE SLICK INITIALIZED */
	$(".slider").on('afterChange', function( event, slick, currentSlide, nextSlide ){
    $(".slider").slick('slickSetOption', 'speed', '800');
	});

});