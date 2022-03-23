jQuery(function(){
	
	var _h = window.innerHeight ? window.innerHeight: $(window).height();


	/* scroll
	------------------------------------------------------------*/

	$(document).on('click', 'a[href^="#"]', function(){
		var _speed	= 1400;
		var _href	= $(this).attr("href");
		var _tgt	= $(_href == "#" || _href == "" ? 'html' : _href);
		var _pos	= _tgt.offset().top;
		$("html, body").animate({scrollTop:_pos}, _speed, 'easeOutExpo');
		return false;
	});
	
	
	/* visual pos
	------------------------------------------------------------*/
	
	var _visual_slider_h = $('#visual__slider img').height(),
		_visual_illust_h = $('#visual__illust').height(),
		_visual_h = _visual_slider_h + _visual_illust_h + 30;
		
	var _visual_slider_h_sp = $('#visual__slider__sp img').height(),
		_visual_illust_h_sp = $('#visual__illust__sp').height(),
		_visual_h_sp = _visual_slider_h_sp + _visual_illust_h_sp + 10;
	
	if (window.matchMedia('(max-width:768px)').matches) {
		$('#visual__inner').height(_visual_h_sp);
		$('#visual__obj').height(_visual_h_sp);
	} else {
		$('#visual__inner').height(_visual_h);
		$('#visual__obj').height(_visual_h);
	}
		
		
	if($('.visual').length) {
		if (window.matchMedia('(max-width:768px)').matches) {
			
			//$('#visual__obj__1').css({opcity:0}).animate({ opacity:1, bottom:'10%', marginLeft:'32%' },2500,'easeOutExpo');
			$('#visual__obj__2').css({opcity:0}).animate({ opacity:1, bottom:'8%', marginRight:'40%' },2700,'easeOutExpo');
			$('#visual__obj__3').css({opcity:0}).animate({ opacity:1, bottom:'25%', marginRight:'45%' },2200,'easeOutExpo');
			$('#visual__obj__4').css({opcity:0}).animate({ opacity:1, bottom:'27%', marginLeft:'45%' },2200,'easeOutExpo');
			$('#visual__obj__5').css({opcity:0}).animate({ opacity:1, bottom:'18%', marginRight:'39%' },2500,'easeOutExpo');
			$('#visual__obj__6').css({opcity:0}).animate({ opacity:1, bottom:'20%', marginLeft:'40%' },2200,'easeOutExpo');
			$('#visual__obj__7').css({opcity:0}).animate({ opacity:1, bottom:'35%', marginRight:'42%' },2600,'easeOutExpo');
			$('#visual__obj__8').css({opcity:0}).animate({ opacity:1, bottom:'10%', marginLeft:'41%' },2400,'easeOutExpo');
			
		} else {
			
			$('#visual__obj__1').css({opcity:0}).animate({ opacity:1, bottom:'10%', marginLeft:'32%' },2500,'easeOutExpo');
			$('#visual__obj__2').css({opcity:0}).animate({ opacity:1, bottom:'21%', marginRight:'40%' },2700,'easeOutExpo');
			$('#visual__obj__3').css({opcity:0}).animate({ opacity:1, top:'18%', marginRight:'40%' },2200,'easeOutExpo');
			$('#visual__obj__4').css({opcity:0}).animate({ opacity:1, top:'12%', marginLeft:'40%' },2200,'easeOutExpo');
			$('#visual__obj__5').css({opcity:0}).animate({ opacity:1, marginRight:'37%' },2500,'easeOutExpo');
			$('#visual__obj__6').css({opcity:0}).animate({ opacity:1, marginLeft:'35%' },2200,'easeOutExpo');
			$('#visual__obj__7').css({opcity:0}).animate({ opacity:1, marginRight:'42%' },2600,'easeOutExpo');
			$('#visual__obj__8').css({opcity:0}).animate({ opacity:1, bottom:'15%', marginRight:'31%' },2400,'easeOutExpo');
		}
	}
	
	
	$(window).delay(1000).queue(function() {
	    _visual_slider_h = $('#visual__slider img').height(),
		_visual_illust_h = $('#visual__illust').height(),
		_visual_h = _visual_slider_h + _visual_illust_h + 30;
		
		_visual_slider_h_sp = $('#visual__slider__sp img').height(),
		_visual_illust_h_sp = $('#visual__illust__sp').height(),
		_visual_h_sp = _visual_slider_h_sp + _visual_illust_h_sp + 10;
		
		if (window.matchMedia('(max-width:768px)').matches) {
			$('#visual__inner').height(_visual_h_sp);
			$('#visual__obj').height(_visual_h_sp);
		} else {
			$('#visual__inner').height(_visual_h);
			$('#visual__obj').height(_visual_h);
		}
	});

	$(window).on('resize', function() {  
		_visual_slider_h = $('#visual__slider img').height(),
		_visual_illust_h = $('#visual__illust').height(),
		_visual_h = _visual_slider_h + _visual_illust_h + 30;
		
		_visual_slider_h_sp = $('#visual__slider__sp img').height(),
		_visual_illust_h_sp = $('#visual__illust__sp').height(),
		_visual_h_sp = _visual_slider_h_sp + _visual_illust_h_sp + 10;
		
		if (window.matchMedia('(max-width:768px)').matches) {
			$('#visual__inner').height(_visual_h_sp);
			$('#visual__obj').height(_visual_h_sp);
		} else {
			$('#visual__inner').height(_visual_h);
			$('#visual__obj').height(_visual_h);
		}
	});
	
	
	/* slide
	------------------------------------------------------------*/
	
	$('.visual__slider').not('.slick-initialized').slick({
		autoplay: true,
		arrows: false,
		fade: true,
		easing: 'swing',
		speed: 3000,
		dots: false,
		autoplaySpeed: 5000
	});
	
	$('.slider').not('.slick-initialized').slick({
		autoplay: true,
		arrows: true,
		easing: 'swing',
		speed: 1000,
		dots: true,
		autoplaySpeed: 6000
	});
	
	
	/* item fade
	------------------------------------------------------------*/
	
	$('.fade').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView) {
			$(this).stop().addClass('fade__on');
		}
	});
	
	$('.fade__late').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView) {
			$(this).delay(700).queue(function() {
				$(this).addClass('fade__late__on').dequeue();
			});
		}
	});
	
	$('.fade__alpha').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView) {
			$(this).addClass('fade__alpha__on').dequeue();
		}
	});
	
	
	/* slick-arrow
	------------------------------------------------------------*/

	$('.slick-arrow').height($('.slider__item').height());
	$(window).on('resize', function() {  
		$('.slick-arrow').height($('.slider__item').height());
	});
	

	/* header
	------------------------------------------------------------*/
	
	$(window).scroll(function () {
	    if ($(this).scrollTop() > 200) {
		    $('#header').addClass('header__s');
	    } else {
		    $('#header').removeClass('header__s');
	    }
	});
	
	
	/* menu
	------------------------------------------------------------*/
	
	var _menu_flg = 0;

	$(document).on('click', '.menu__trigger', function(){
		if(_menu_flg == 0) {
			_menu_flg = 1;
			$(this).addClass('active');
			$('.menu__txt').addClass('active');
			$('.nav').fadeIn('slow');
		} else {
			_menu_flg = 0;
			$(this).removeClass('active');
			$('.menu__txt').removeClass('active');
			$('.nav').fadeOut('slow');
		}
	});	
	
	
	/* cover
	------------------------------------------------------------*/
	
	$('.cover').delay(500).fadeOut('slow');
	
	
	/* faq
	------------------------------------------------------------*/
	
	$('.faq__box a').on('click', function() {
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			$(this).parents('dl').find('dd').fadeOut('fast');
		} else {
			$(this).addClass('active');
			$(this).parents('dl').find('dd').fadeIn('slow');
		}
	});
	

});


/* instagram
------------------------------------------------------------*/

axios.get("instagram.php").then(instagram_data=>{	
	const gallery_data = instagram_data["data"]["media"]["data"];
	var _length = gallery_data.length;
	let photos = "";
	if(_length > 8) {
		var photo_length = 9;
	} else {
		var photo_length = _length;
	}
	for(var i = 0; i < photo_length ;i++){
		photos += '<li class="instagram__item"><a href="' + gallery_data[i].permalink + '" target="_blank"><img src="' + gallery_data[i].media_url + '"></a></li>';
	} 
	document.querySelector("#instagram").innerHTML = photos;
}).catch(error=>{
	console.log(error);
});