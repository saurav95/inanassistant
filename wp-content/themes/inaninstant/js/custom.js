var $ = jQuery.noConflict(),win_h,win_w;

var Blank ={
	
	win_prop : function(){
		win_h = $(window).height();
		win_w = $(window).width();
	},
	
	Single_sider : function(){
		$('.slider').bxSlider({
			infiniteLoop:false,
			auto:true
		});
	},
	
	home_slide_hit : function(){
		Blank.win_prop();
		$('.mhth').css({"height":win_h - 100});
	},
	
	menu_open : function(){
		$('.menu-bar').click(function(){
			$('#navigation').addClass('menu-open');
		})
	},
	
	menu_close : function(){
		$('.cross').click(function(){
			$('#navigation').removeClass('menu-open');
		})		
		
	}
	

	
}


$(document).ready(function(){
	Blank.menu_open();
	Blank.menu_close();
	Blank.home_slide_hit();
});

$(window).load(function(){
	Blank.Single_sider();	
});

$(window).resize(function(){
	Blank.home_slide_hit();
});
