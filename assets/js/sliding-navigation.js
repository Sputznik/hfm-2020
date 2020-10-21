/* SOW SLIDING NAVIGATION */
jQuery.fn.hfm_sliding_navigation = function() {


	return this.each(function() {

  	var $el = jQuery(this);

    /* SELECTED TAB */
    $el.getTarget = function(){
      var selectedTab = jQuery($el).attr('href');
      var slidingPane = jQuery('.sliding-pane-wrapper').find(selectedTab);
			/* SHOW SLIDING PANE ONLY IF NOT ACTIVE */
			if( !slidingPane.hasClass('active') ){ $el.showActivePane( slidingPane ); }
		};
    /* SELECTED TAB */

		/* SHOWS SLIDING PANE BASED ON THE SELECTED TAB */
		$el.showActivePane = function( slidingPane ){

			jQuery('.sliding-pane-wrapper').find('.sliding-pane.active').animate({ opacity: 0 }, 1000, "swing").removeClass('active');    /* REMOVE ACTIVE CLASS FROM SLIDING PANE */
      jQuery(slidingPane).animate({ opacity: 1 }, 1000, "swing").addClass('active'); 		/* ADD ACTIVE CLASS FROM SLIDING PANE */
		};
		/* SHOWS SLIDING PANE BASED ON THE SELECTED TAB */

    /* SELECTED TAB'S PARENT */
    $el.getTargetParent = function( $tabParent ){

      var tabParentIndex = $tabParent.data("slick-index");

      if ( jQuery('.slick-slider').slick('slickCurrentSlide') !== tabParentIndex ){
        jQuery('.slick-slider').slick('slickGoTo', tabParentIndex);
      }

    };
    /* SELECTED TAB'S PARENT */


    /* ON CLICK EVENT HANDLER  */
    $el.on('click', function (e) {

        e.preventDefault();

				e.stopPropagation();

        $el.getTargetParent( jQuery(this).parent() );

        $el.getTarget();


    });
    /* ON CLICK EVENT HANDLER  */



  });



};

jQuery(document).ready(function(){

  jQuery('a[data-behaviour~=hfm-sliding-navigation]').hfm_sliding_navigation(); /* SOW SLIDING NAVIGATION */

  jQuery('[data-behaviour~=sliding-navigation-slick]').each( function(){

		var $el = jQuery( this );

		// console.log( $el.data('items'), $el.data('infinite') );

		$el.slick({
			infinite				: $el.data('infinite'),
			slidesToShow		: $el.data('items'),
			slidesToScroll	: 1,
			speed						: 10,
			initialSlide    : $el.data('initial'),
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

	jQuery("[data-behaviour~=sliding-navigation-slick]").slick("refresh");

	/* CHANGE THE SLIDING SPEED AFTER THE SLICK INITIALIZED */
	jQuery("[data-behaviour~=sliding-navigation-slick]").on('afterChange', function( event, slick, currentSlide, nextSlide ){
    jQuery("[data-behaviour~=sliding-navigation-slick]").slick('slickSetOption', 'speed', '800');
	});

	// On Swipe Event
	jQuery('[data-behaviour~=sliding-navigation-slick]').on('swipe', function(event, slick, direction){
		var currentTabIndex = jQuery('.slick-slider').slick('slickCurrentSlide'); /* Gets Current Active Tab Index */
		jQuery('.sliding-tab[data-slick-index="'+currentTabIndex+'"]').children().click(); /* Triggers click event */
	});

	jQuery('.sliding-tab.slick-current').on('click', function(e){
		e.preventDefault();
	});

});
