var wp = {}

wp.init = function() {
	wp.setNavMenuColor();
	wp.setCurrentMenuSelectionColor();
	wp.productIsotope();
}

wp.setNavMenuColor = function() {
	wp.navColor = $('.navcontainer').css("color");
	$('.menu-item a').css('color', wp.navColor);
}

wp.setCurrentMenuSelectionColor = function() {
	wp.currentNavColor = $('.logo').css('color');
	console.log(wp.currentNavColor);
	$('.current-menu-item a').css('color', wp.currentNavColor);
}

wp.productIsotope = function() {
	$('.grid').isotope({
		// options...
		itemSelector: '.grid-item',
		percentPosition: true,
		// layoutMode: 'fitRows',
		masonry: {
			columnWidth: '.grid-item',
			gutter: 20
		}
	});
	var $grid = $('.grid').isotope({
		// options
		stagger: 100,
	});
	// filter items on button click
	$('.filter-button-group').on( 'click', 'button', function() {
		var filterValue = $(this).attr('data-filter');
		$grid.isotope({ filter: filterValue });
	});
}

$(function(){
	wp.init();
});
