$(document).ready(function(){
	

$('.owl-1').owlCarousel({
	stagePadding: 10,
	loop: true,
	dots: true,
	nav: false,
	items: 1
});
$('.owl-2').owlCarousel({
	loop: true,
	responsive:{
		0:{
			items:2,
			dots: true,
			nav: false
		},
		600:{
			items:3,
			dots: false,
			nav: false
		},
		1000:{
			items:5,
			dots: false,
			nav: true
		}
	}
});
$('.owl-3').owlCarousel({
	loop: true,
	dots: true,
	nav: false,
	responsive:{
		0:{
			items:2
		},
		600:{
			items:4
		},
		1000:{
			items:6
		}
	}
});
$('.owl-4').owlCarousel({
	loop: true,
	responsive:{
		0:{
			items: 1,
			nav: false,
			dots: true
		},
		600:{
			items: 2,
			nav: true,
			dots: false
		},
		1000:{
			items: 3,
			nav: true,
			dots: false
		}
	}
});

// product quantity up-down funtions
var $qty_up = $('.qty_up');
var $qty_down = $('.qty_down');
// $input = $('.qty_input');

$qty_up.click(function(e) {
	let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
	if($input.val() >= 1 && $input.val() < 10) {
		$input.val((i, oldval)=> {
			return ++oldval;
		});
	}
});
$qty_down.click(function(e) {
	let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
	if($input.val() > 1 && $input.val() <= 10) {
		$input.val((i, oldval)=> {
			return --oldval;
		});
	}
});
// ___product quantity up-down funtions___


});