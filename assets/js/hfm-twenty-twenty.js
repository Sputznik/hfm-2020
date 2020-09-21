$(document).ready(function(){

  /* FOR SIDE NAVIGATION */
  $('[data-toggle="collapse"]').on('click', function() {

    $togglerTarget = $($(this).data('target'));

    $togglerTarget.animate({
      'width': 'toggle'
    }, 350 );

  });
  /* FOR SIDE NAVIGATION */

});
