// Add PDF icon
jQuery("a[href$='pdf']").addClass("link-pdf").prepend('<i class="fa fa-file-text-o"></i>&nbsp;');

// Highlight external links
jQuery('.entry-content a:not(:has(img))').filter(function() { 
	return this.hostname && this.hostname !== location.hostname; 
}).addClass("link-external").append( '&nbsp;<i class="fa fa-external-link"></i>');

// Add icon to blockquotes within posts and pages
jQuery('.entry-content blockquote').prepend('<i class="fa fa-quote-left"></i>');

// Fitvids
jQuery(".entry-content").fitVids();

// Flexslider
jQuery('.flexslider').flexslider();