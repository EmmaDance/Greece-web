$(document).ready(function(){
	$('.main').css('min-height', $(window).height() - $('footer').outerHeight() - $('.top').outerHeight() - $('.navbar').outerHeight()-1);
	
		$(window).on('resize',function(){
			$('.main').css('min-height', $(window).height() - $('footer').outerHeight() - $('.top').outerHeight() - $('.navbar').outerHeight()-1);
		})
});



