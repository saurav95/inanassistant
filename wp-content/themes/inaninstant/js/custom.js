var $ = jQuery.noConflict(),win_h,win_w,userFeed;

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
		
	},
	
	instagram_slider : function(){
			if(jQuery('.instagram-wrapper').length){
			userFeed = new Instafeed({
			get: 'user',
			limit:30,
			userId: '2285661877',
			accessToken: '2285661877.0fe4f3d.bf0b644e3e494bd5b0bf4ccc8ebac9d2',
			resolution: 'low_resolution',
			after: function () {
				var owl = jQuery(".owl2row-plugin");
				owl.owlCarousel({
				margin:10,
				dots:false,
				autoplay:false,
				autoplaySpeed:800,
				autoplayTimeout:1000,
				autoplayHoverPause:true,
				loop:true,
				responsive:{
						0:{
							items:2
						},
						480:{
							items:3
						},
						1000:{
							items: 4
						}
					}

				});
				// Custom Navigation Events
				jQuery(".next").click(function(){
				owl.trigger('next.owl.carousel');
				})
				jQuery(".prev").click(function(){
				owl.trigger('prev.owl.carousel');
				});
			},	
	  filter: function(image) {
		if (image.type == 'image') {
		  image.template = '<img src="' + image.images.standard_resolution.url + '" />';
		} else {
		  image.template = '<video width="" height="" controls loop autoplay><source src="' + image.videos.standard_resolution.url + '" type="video/mp4"/></video>';
		}
		return true;
	  },
	  	 template: '<div class="item"><a href="{{link}}" target="_blank"><span>{{model.template}}</span></a></div>',
		});
		userFeed.run();	
		}
	}
	


	
}


$(document).ready(function(){
	Blank.menu_open();
	Blank.menu_close();
	Blank.home_slide_hit();
	Blank.instagram_slider();
});

$(window).load(function(){
	Blank.Single_sider();	
});

$(window).resize(function(){
	Blank.home_slide_hit();
});
