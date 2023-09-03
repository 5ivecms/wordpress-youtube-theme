$(document).ready(function(){
	$('body').append('<div class="close-overlay" id="close-overlay"></div><ul class="side-panel" id="side-panel"></ul>');
	$('.h-menu, .nav-in').each(function() {
		$($(this).html()).appendTo('#side-panel');
	});	
	$(".btn-menu").click(function(){
		$('#side-panel').addClass('active');
		$("#close-overlay").fadeIn(200);
		$('body').addClass('opened-menu');
	});
	$(".close-overlay").click(function(){
		$('#side-panel').removeClass('active');
		$('#close-overlay').fadeOut(200);
		$('body').removeClass('opened-menu');
	}); 
	
	$('body').append('<div id="gotop"><span class="fa fa-arrow-up"></span></div>');
	var $gotop=$('#gotop'); 
	$(window).scroll (function () {
		if ($(this).scrollTop () > 300) {$gotop.fadeIn(200);
		} else {$gotop.fadeOut(200);}
	});	
	$gotop.click(function(){
		$('html, body').animate({ scrollTop : 0 }, 'slow');
	});
});