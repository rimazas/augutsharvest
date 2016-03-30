
$(document).ready(function() {

	var	aboutPos = $('#about').offset().top;
	var	reasonsPos = $('#three-steps').offset().top;
	var	contactsPos = $('#contacts').offset().top;
	var	socialPos = $('#inspiration').offset().top;

	function recalculate() {
		aboutPos = $('#about').offset().top;
		reasonsPos = $('#three-steps').offset().top;
		contactsPos = $('#contacts').offset().top;
		socialPos = $('#inspiration').offset().top;
	}

	function addOverlay() {
			var overlay = '<div class="page-overlay" />';
			$('body').append(overlay);
	}

	function removeOverlay() {
			$(document).find('.page-overlay').remove();
	}	

	recalculate();	


	
	// $('.service-title').on('click', function(e) {
	// 	e.preventDefault();

	// 	var block = $(this).data('open-block');
	// 	if ($(this).hasClass('open')) {
	// 		$(block).slideUp();
	// 		$(this).removeClass('open');
	// 	} else {
	// 		$('.service-title').removeClass('open');
	// 		$('.service-block').slideUp();
	// 		$(block).slideDown();
	// 		$(this).addClass('open');
	// 	}		
	// });

	$('.service-block').on('click','.close',function() {
			$(this).parent().slideUp();
			$(this).hide();
			$('.service-title').removeClass('open');
	});

	$('.scroll').on('click', function(e) {
		e.preventDefault();
		removeOverlay();
		var block = $(this).data('scrollto');
		var openBlock = $(this).data('open-block');
		if (typeof openBlock != 'undefined') {
				if ($(this).hasClass('open')) {
					$(openBlock).prev().removeClass('open');
					$(openBlock).slideUp(300);
					$(openBlock).find('.close').hide();
				} else {
					$('.service-title').removeClass('open');
					$('.service-block').slideUp(300);	
					$('.services .close').hide();				
					$(openBlock).prev().addClass('open');
					$(openBlock).find('.close').show();
					$(openBlock).slideDown(300, function() {
						$("html, body").animate({ scrollTop: $(block).offset().top - 70 }, 800, "easeOutQuad" );
					});	
				}			
		} else {
				if ($('.service-title').hasClass('open')) {
						$('.services .close').hide();
						$('.service-title.open')
						.parent()
						.find('.service-block')
						.slideUp(300, function() {
							$("html, body").animate({ scrollTop: $(block).offset().top }, 800, "easeOutQuad" );	
					  });
				} else {
						$("html, body").animate({ scrollTop: $(block).offset().top }, 800, "easeOutQuad" );	
				}
		}
		$('#mobmenu').removeClass('in');
		$('.toggler').removeClass('opened');
		recalculate();
	});

	$( window ).resize(function() {
		recalculate();
	});

	var stop = false;

	$(document).scroll(function() {
			recalculate();
	    var scrollPos = $(document).scrollTop();
	    if (scrollPos >= aboutPos - (aboutPos*0.7) ) {
	    		$('#menu i').removeClass('white');
	    		$('.navbar-collapse').removeClass('open');
	    		$('.mobmenu, .nav-header').addClass('open');
	    } else {
	    	$('.navbar-collapse').addClass('open');
	    	$('.mobmenu, .nav-header').removeClass('open');
	    	$('#menu i').addClass('white');
	    }

	    if (scrollPos >= contactsPos -10 ) {
	    	$('#touch,#touch-mob').hide();
	    } else {
	    	$('#touch,#touch-mob').show();
	    }

			var pos2 = reasonsPos - (aboutPos*0.6);
			var diff2 =  scrollPos - pos2;
			var top2 = parseInt(-diff2*1.1 - 140);
			var left2 = parseInt(82 - diff2*0.1);
			var textHeight = $('.text2').height();

			var posEnd = reasonsPos - aboutPos*0.7 + textHeight + 50;

			if (scrollPos >= pos2 && scrollPos < posEnd && stop == false) {
	    		$('.title2').css({
	    				'bottom': top2,
	    				'left': left2
	    		});
	    } 

	    if ( scrollPos > posEnd -200 ) {
	    		$('.text1').addClass('show');
	    }	    

	    if ( scrollPos > posEnd ) {
	    		$('.title2').css({
	    				'top': textHeight + 40,
	    				'left': 55
	    		});
	    		stop = true;
	    }

	    if ( scrollPos > posEnd - 100 ) {
	    		$('.text2').addClass('show');
	    }

	    if ( scrollPos > posEnd ) {
					$('.text3').addClass('show');
	    }	    

	    var number1 = parseInt(diff2/10);
	    var number2 = parseInt(diff2/10 - 80);
	    var number3 = parseInt(diff2/10 - 60);  

	    if ( scrollPos > posEnd + 50 ) {
	    		$('.number').eq(0).css('left',number1);
	    		$('.number').eq(1).css('left',number2);
	    		$('.number').eq(2).css('right',number3);
	    }

	});

	$('.menu i').on('click', function() {
		$(this).toggleClass('open');
		if ($(this).hasClass('open')) {
			$(this).parent().addClass('on');	
			addOverlay();
		} else {
			$(this).parent().removeClass('on');		
			removeOverlay();
		}
	});

	$('.menu a').on('click', function() {
		$('.menu').removeClass('on');
		$('.menu i').removeClass('open');	
	});

	$(document).on('click', '.page-overlay', function() {
		removeOverlay();
		$('.menu').removeClass('on');
		$('.menu i').removeClass('open');	
		$('.service-block').slideUp(300);	
		$('.service-title').removeClass('open');
	});	

	$('.toggler').on('click', function() {
			var target = $(this).data('target');

			if (!$(this).hasClass('opened')) {
				$(target).addClass('in');
				$(this).addClass('opened');
			} else {
				$(target).removeClass('in');
				$(this).removeClass('opened');
			}


	});

	$('.mobmenu .close').on('click', function() {
			var target = $(this).data('target');
				$('.toggler').removeClass('opened');
				$(this).parent().removeClass('in');
	});	

	// var width = $(document).width();
	// $('.size').text(width);
	
			
});

