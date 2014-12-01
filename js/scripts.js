jQuery(function($) {
	$('div.toc-content').TableOfContents();
  
  $('.toc-container').waypoint('sticky', {
    offset: 32 // Apply "stuck" when element 30px from top
  });

  $('.footer').waypoint({
    offset: $('.sticky-wrapper').height()+64, //calculate menu's height and margin before footer
    handler: function(direction) {
      $('.toc-container').toggleClass('sticky-bottom'); //change position to absolute for the wrapper
    }
  });


});

