jQuery(function($) {
	$('div.toc-content').TableOfContents();
  
  $('.toc-container').waypoint('sticky', {
    offset: 32 // Apply "stuck" when element 30px from top
  });

});

