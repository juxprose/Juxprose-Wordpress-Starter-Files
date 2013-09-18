jQuery('.entry-content a:not(:has(img))').filter(function() { 
	return this.hostname && this.hostname !== location.hostname; 
}).addClass("link-external").append( '&nbsp;<i class="icon-external-link"></i>');