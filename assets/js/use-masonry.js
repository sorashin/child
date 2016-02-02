jQuery(function(){
	jQuery(window).load(function(){
		console.log('samplejs_is_working');
		jQuery('.masonry-wrapper').masonry({
			itemSelector: '.masonry-grid',
			isAnimated:true
		});
		
	});
});