/* SOW HERO NAVIGATION */
$.fn.hfm_hero_navigation = function() {

	return this.each(function() {

		var $el = $(this);


		$el.activateTarget = function(){

      var tabParent = $el.parent();
      var heroPane = $el.attr('href');

      // REMOVE ACTIVE CLASS FROM TAB AND TAB PANE
      $('.hfm-hero-navigation').find('.hero-pane.active').removeClass('active');
      $('.hfm-hero-navigation').find('.hero-tab.active').removeClass('active');

      // ADD ACTIVE CLASS TO TAB AND TAB PANE
      $('.hero-pane'+heroPane).addClass('active');
      $(tabParent).addClass('active');
		};

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

});
