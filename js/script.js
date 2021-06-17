const INCLUDE_PATH = $('base').attr('base');

$(function(){
	$('nav.mobile').click(function(){
		var menuList = $('nav.mobile ul');
		menuList.slideToggle(150);
	});


	if ($('target').length > 0) {
		var elemento = '#' + $('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({'scrollTop':divScroll}, 1000);
	};
	
	dinamicLoad();
	function dinamicLoad(){
		$('[realTime]').click(function(){
			var page = $(this).attr('realTime');
			$('.main-content').hide();
			$('.main-content').load(INCLUDE_PATH + 'pages/' + page + '.php');

			setTimeout(function(){
				initialize();
			},200);

			$('.main-content').fadeIn(1000)

			return false;
		})
	}

	var  curSlide = 0;

	var maxSlides = $('.banner-img').length -1;

	var changeDelay = 3;

	if(maxSlides > 0){
		initSlider();
		changeSlide();
	}

	function initSlider(){
		$('.banner-img').hide();
		$('.banner-img').eq(0).show();
	}

	function changeSlide(){
		setInterval(function(){
			$('.banner-img').eq(curSlide).fadeOut(1000);
			curSlide++;
			if(curSlide > maxSlides){
				curSlide = 0;
			}
			$('.banner-img').eq(curSlide).fadeIn(1000);
		},changeDelay * 1000);
	}
})
