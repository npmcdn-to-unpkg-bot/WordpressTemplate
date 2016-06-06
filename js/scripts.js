	var wp = {}

wp.init = function() {
	wp.setNavMenuColor();
	wp.setCurrentMenuSelectionColor();
	$('.gallery.grid').show();
	wp.productIsotope();
	wp.set404SearchColors();
	wp.mobileNav();
	wp.closeMobileNav();
}

wp.setNavMenuColor = function() {
	wp.navColor = $('.navcontainer').css("color");
	$('.menu-item a').css('color', wp.navColor);
}

wp.setCurrentMenuSelectionColor = function() {
	wp.currentNavColor = $('.logo').css('color');
	// console.log(wp.currentNavColor);
	$('.current-menu-item a').css('color', wp.currentNavColor);
}

wp.set404SearchColors = function() {
	wp.accentColor = $('.logo').css('color');
	$('.searchsubmit').css('color', wp.accentColor);
	$('.searchsubmit').css('border-color', wp.accentColor);
	$('input[type=search]').css('color', wp.accentColor);
	$('input[type=search]').css('border-color', wp.accentColor);
}

wp.productIsotope = function() {
	$('.grid').isotope({
		// options...
		itemSelector: '.grid-item',
		percentPosition: true,
		layoutMode: 'masonry',
		masonry: {
			columnWidth: '.grid-item',
			gutter: 20
		}
	});
	var $grid = $('.grid').isotope({
		// options
		stagger: 0,
	});
	// filter items on button click
	$('.filter-button-group').on( 'click', 'button', function() {
		var filterValue = $(this).attr('data-filter');
		$grid.isotope({ filter: filterValue });
	});
}

wp.contactForm = function() {
	on_sent_ok: "alert('sent ok');"
	on_submit: "alert('submit');"
}

wp.mobileNav = function() {
	$(".hamburger").on('click',function(){
		$('ul.menu').toggleClass('showMobileNav');
	})
}

// wp.closeMobileNav = function() {
// 	$(".fa-times").on('click',function(){
// 		$('ul.menu').removeClass('showMobileNav');
// 		setTimeout(function(){
// 			$('.fa-times').hide();
// 			$('.fa-bars').show();
// 		},250);
// 	})
// }

$(function(){
	wp.init();
});
