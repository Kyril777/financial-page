/* Provides timing for carousel slide. */
$('.carousel_left_upper').carousel({
  interval: 1300 * 10
});

$('.carousel_left_lower').carousel({
  interval: 1800 * 10
});


$(document).ready(function(){
	$(function() {
	// Closes bootstrap's dropdown menu after clicking
		$('div.collapse ul.nav li a').each(function() {
			$(this).on("click", function () {
				var $obj = $($(this).parents('.in')[0]);
				$obj.animate({'height': '1px'}, function() {
					$obj.removeClass('in').addClass('collapse');
				});
			});
		});
	});
})