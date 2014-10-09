// Add PDF icon
jQuery("a[href$='pdf']").addClass("link-pdf").prepend('<i class="fa fa-file-text-o"></i>&nbsp;');

// Highlight external links
jQuery('.entry-content a:not(:has(img))').filter(function() { 
	return this.hostname && this.hostname !== location.hostname; 
}).addClass("link-external").append( '&nbsp;<i class="fa fa-external-link"></i>');

// Add icon to blockquotes within posts and pages
jQuery('.pullquote, .pullquote-alt, .rte blockquote').prepend('<i class="fa fa-quote-left"></i>');


// Add icon to language selector
//jQuery('#lang_sel > li').prepend('<i class="fa fa-caret-down"></i>');



// Fitvids
//jQuery(".entry-content").fitVids(); 

// Responsive menu
jQuery(document).ready(function($) {
  $('body').addClass('js');
  var $menu = $('#site-navigation'),
  $menulink = $('.menu-link');
  
	$menulink.click(function() {
  	$menulink.toggleClass('active');
  	$menu.toggleClass('active');
  	return false;
	});
}); 