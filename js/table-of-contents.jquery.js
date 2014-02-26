(function ( $ ) {
	$.fn.TableOfContents = function( options ) {
		var settings = $.extend({
			duration: "500",
			title: "On this page"
		}, options );
 
		return this.each(function() {
			var article = $(this);
			var container = $('aside.toc-container');
			container.prepend('<nav class="table-of-contents"><h5>' + settings.title + '</h5><ul></ul></nav>');
			var list = container.find('nav.table-of-contents:first > ul:first');
			
			article.find('h1, h2').each(function(){
				var heading = $(this);
				var tag = heading[0].tagName.toLowerCase();
				var title = heading.text();
				var id = heading.attr('id');
				
				if(typeof id === "undefined") {
					id = Math.random().toString(36).substring(7);
					heading.attr('id', id);
				}
				list.append('<li class="' + tag + '"><a href="#' + id + '" title="' + title + '">' + title + '</a></li>');
			});
			
			list.on('click', function(event){
				var target = $(event.target);
				
				if(target.is('a')){
					event.preventDefault();
					jQuery('html, body').animate({
						scrollTop: $(target.attr('href')).offset().top
					}, settings.duration);
					return false;
				}
			});
		});
 
	};
 
}( jQuery ));