/* 
 * Custom Jquery for this theme
 */
 jQuery(function(){
		  jQuery('.bxslider').bxSlider({
			mode: 'horizontal',
			infiniteLoop:true,
			pager: false,
			auto:true,
			controls:'true'
			
		  });
		});
jQuery(function($){
	
	
	
	var winwidth = jQuery(window).width();
	
	jQuery('header').addClass('menu_closed');
		if(winwidth > 980) {
			
			 var elementHeights = jQuery('.sub_menu_bg').map(function() {
					return jQuery(this).height();
			});
			var maxHeight = Math.max.apply(null, elementHeights);
			//jQuery('.sub_menu_bg').height(maxHeight);
			
			var c = jQuery('.sub_menu_bg').height();
			
			var d = jQuery('header').outerHeight();
			jQuery('.body_bg').css('height', c+94);
			
			jQuery('ul.menu > li > a').mouseover(function(){
				var $this = jQuery(this);
				jQuery(this).parent().siblings().find('.sub-menu').slideUp('300');
				jQuery(this).parent().siblings().find('.sub_menu_bg').slideUp('300');
				
				if(jQuery('header').hasClass('sub_menu_open')) {
					setTimeout(function(){
						$this.next().slideDown('300');
						//alert();
					},300);
				}else {
					setTimeout(function(){
						$this.next().slideDown('300');
						//alert();
					},0);
				}
				jQuery('header').addClass('sub_menu_open');
				jQuery(this).next().find('.sub-menu').slideDown();
				jQuery('body').removeClass('inspect_opend');
				
				return false;
				
			});
			
				jQuery('header ul.menu > li.menu-has-children').mouseover(function(){
					if(jQuery('header').hasClass('sub_menu_open')) {
							//jQuery(this).removeClass('menu_open');
							//jQuery('.body_bg').addClass('body_bg_add');
							jQuery(this).siblings().find('.sub_menu_bg').fadeOut();
							jQuery(this).find('.sub_menu_bg').fadeIn();
							jQuery(this).find('.sub_menu_bg .sub-menu').fadeIn();
							//jQuery(this).siblings().find('.sub_menu_bg .sub-menu').hide();
					}		
				});
				jQuery('.header_menu > ul.menu > li').not('.menu-has-children').mouseover(function(){
						//jQuery(this).siblings().find('.sub_menu_bg .sub-menu').hide();
				});
				jQuery('.page_wrapper').mouseover(function(){
					jQuery('header').removeClass('sub_menu_open');
					jQuery('.sub_menu_bg').slideUp();
					 
				});
			
			jQuery('.menu_close').click(function(){
				mouseleaves();
			});
			
			
			
			var e = jQuery('header').outerHeight();
			var f = winheight - e;
			jQuery('#header').height(e);
			jQuery('.page_wrapper_new, .section, .section_left, .section_right ').height(f);
			//jQuery('.splitlayout, .page ').height(winheight);
			jQuery('.move_layout').css('top',e);
			jQuery('.ms-tableCell').css('padding-top',e);
		
		}
	
	linkClicked = false; 	
	
	jQuery(".section_nav ul li a, .mobile_section_nav a, .list_design li a").click(function() {
		var target = this.getAttribute('href');
		linkClicked = true;
		//alert(target);
		jQuery('html, body').animate({
			scrollTop: jQuery(target).offset().top-94},
			'1000', function(){
				linkClicked = false;
		});		
		return false;
	});		
	/*jQuery('.relative').each(function (event) {
		jQuery(this).addClass('lksndflskdfjndlasndlandlaskndlansdl');
		id = jQuery(this).attr('href');
		alert(id);
		jQuery(window).scroll(function(){
			
		});	
	});*/
	jQuery(window).scroll(function(){
		 var sticky = jQuery('header'),
		scroll = jQuery(window).scrollTop();
		jQuery('.section_nav ul li a').each(function (event) {
			//event.preventDefault();
			id = jQuery(this).attr('href');
			
			//alert(id);
			if (scroll >= jQuery(id).offset().top - 220) {
			  //if (!linkClicked) {
				  jQuery('.section_nav ul li a').not(this).removeClass('active');
				  jQuery(this).addClass('active');
			 // }
			}else {
				jQuery(this).removeClass('active');
			}
		 });
		 
		  if (scroll > 0) {
			  sticky.addClass('bg_color');
			  jQuery('.body_bg').removeClass('body_bg_add');
		  }
		  else sticky.removeClass('bg_color');
		  
		  if(scroll > 200) {
			  jQuery('.scrolltop_top').fadeIn();
		  }else {
			  jQuery('.scrolltop_top').fadeOut()
		  }
		  
	});
	
	jQuery('.scrolltop_top a').click(function(){
		var body = jQuery("html, body");
		body.stop().animate({scrollTop:0}, '500', 'swing', function() { 
		  /// alert("Finished animating");
		});
		return false;
	});
   
	lightbox.option({
      'resizeDuration': 500,
      'wrapAround': true,
	  'showImageNumberLabel':false,
    })
	
	
			
	var winwidth = jQuery(window).width();
	var winheight = jQuery(window).height();
		
		jQuery('.counter').counterUp({
            delay: 20,
            time: 1000
        });
		
  		new AnimOnScroll( document.getElementById( 'grid' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		});

		
		jQuery('.collapsible').collapsible({
		  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
		});
		
		
		if(jQuery('.filter_title').length > 0) {
			var k = jQuery('.filter_title').offset().top
			var fh = jQuery('.filter_title').height();
			var hh = jQuery('header').height();
			var th = fh+hh
			
			jQuery('.tech_port ul li a, .menu_port ul li a').click(function(){
				setTimeout(function(){
					var o = jQuery('.portfolio_bg_main').offset().top
					//alert(o);
					jQuery('html, body').animate({
						scrollTop:o-th
					});	
				},10);
			});
			
			
			
			//alert(th)
			if(winwidth > 767) {
				jQuery(window).scroll(function(){
				  var sticky = jQuery('.filter_title'),
					  scroll = jQuery(window).scrollTop();
				
				  if (scroll > k - 94) {
					  sticky.addClass('filter_fixed');
					  jQuery('.portfolio .gu.grid').addClass('margin_filter');
					  jQuery('.portfolio_bg_main').css('margin-top', th-70);
				}
				  else { 
					sticky.removeClass('filter_fixed'); 
					jQuery('.portfolio_bg_main').css('margin-top', '20px');
				  }
				  
				});
			}
		}
			
	/* For iOS touch hover effect */
	document.addEventListener("touchstart", function() {},false);
	
});

function mouseleaves() {
	jQuery('header').removeClass('sub_menu_open');
		//jQuery('.page_wrapper').css({'top':'0'});
		jQuery('nav ul li.menu-has-children').css('height','auto');
		jQuery('header').addClass('menu_first');
		  setTimeout(function() {
			jQuery('.body_bg').removeClass('body_bg_add');
		 },500);
}
function blog_equal() {
	var byRow = jQuery('.blog_post').hasClass('blog_equal');
		
			// apply matchHeight to each item container's items
		jQuery('.blog_post_top').each(function() {
			jQuery(this).children('.col').matchHeight({
				byRow: byRow
			});
		});
		
		jQuery('.blog_all_post').each(function() {
			jQuery(this).find('.blog_post_details').matchHeight({
				byRow: byRow
			});
		});
		
}

var l = jQuery('.relative').length;
function fndown(down) {
	down = down+1;
	up_id = down;
	if(down<=l) {
		var target = jQuery('.relative_'+down).attr('id');
		jQuery('.sec_next').attr('onclick', 'fndown('+down+')');
		jQuery('.sec_prev').attr('onclick', 'fnup('+up_id+')');
		jQuery('html, body').animate({
						scrollTop: jQuery('#'+target).offset().top-94},
						'1000', function(){
							//linkClicked = false;
		});	
	}
}
//var l = jQuery('.relative').length;
jQuery('.sec_prev').attr('onclick', 'fnup('+l+')');
function fnup(up) {
	up = up-1;
	down_id = up;
	if(up>=0) {
		var target = jQuery('.relative_'+up).attr('id');
		jQuery('.sec_prev').attr('onclick', 'fnup('+up+')');
		jQuery('.sec_next').attr('onclick', 'fndown('+down_id+')')
		jQuery('html, body').animate({
						scrollTop: jQuery('#'+target).offset().top-94},
						'1000', function(){
							//linkClicked = false;
		});	
	}
}




jQuery(window).on('resize', function () {

	
	var winwidth = jQuery(window).width();
	
	if(winwidth < 980) {
		
		
		 //jQuery(".sub-menu").unwrap();
		
		jQuery('.menu_title.sub_menu_titles').append('<span><i class="fa fa-plus" aria-hidden="true"></span>')
		
		jQuery('.multi_column.menu_title_bg').each(function(){
			var $this = jQuery(this);
			
		})
		 jQuery('#menu').slicknav({
			label:'',
			appendTo:'.header_inner',
			allowParentLinks: true,	
			afterOpen: function () {
				var a = jQuery('.slicknav_nav').height();
				jQuery('.slicknav_nav').height(a);
			},
			
		});
		
		
		jQuery('body').on('click', 'a.slicknav_btn', function(){
			jQuery('header').toggleClass('bg_color');
			jQuery('html').toggleClass('mobile_menu_open');
		});
	}else {
		//if(jQuery('body').hasClass('inspect_opend')) {
			//jQuery(".sub-menu").wrap('<div class="sub_menu_bg">');
		//}else {
			 //jQuery(".sub-menu").unwrap();
		//}
		
		//jQuery(".sub-menu").hide();
		jQuery('body').addClass('inspect_opend');
		jQuery('.sub-menu').hide();
	}
	
	
		
});
window.onresize = function() {
    if ((window.outerHeight - window.innerHeight) > 100) {
		jQuery('body').addClass('inspect_opend')
    }else {
		jQuery('body').removeClass('inspect_opend')
	}
}
jQuery(window).on('load', function () {
		var winwidth = jQuery(window).width();
	if(winwidth < 980) {
		
		
		// jQuery(".sub-menu").unwrap();
		
		jQuery('.menu_title.sub_menu_titles').append('<span><i class="fa fa-plus" aria-hidden="true"></span>')
		
		jQuery('.multi_column.menu_title_bg').each(function(){
			var $this = jQuery(this);
			
		})
		 jQuery('#menu').slicknav({
			label:'',
			appendTo:'.header_inner',
			allowParentLinks: true,	
			afterOpen: function () {
				var a = jQuery('.slicknav_nav').height();
				jQuery('.slicknav_nav').height(a);
			},
			
		});
		
		
		jQuery('body').on('click', 'a.slicknav_btn', function(){
			jQuery('header').toggleClass('bg_color');
			jQuery('html').toggleClass('mobile_menu_open');
		});
	}
	
	jQuery('.content-format table').attr('border','1');
	
	if(jQuery('.content-format table').length > 0) {
		jQuery.responsiveTables();
	}
});

jQuery(window).on('load', function () {
		var winwidth = jQuery(window).width();
		var winheight = jQuery(window).height();
		
		jQuery('.close_form').click(function(){
			jQuery('#modal-service').removeClass('open');
			jQuery('#modal-service').fadeOut();
			jQuery('.lean-overlay').remove();
			jQuery('body').css('overflow','auto');
			return false;
		});
	
	  jQuery('select').material_select();
	  		
	  jQuery('article.expandcontent_section').readmore({speed: 500});
	  jQuery('article.home_section').readmore({speed: 500});
		
		jQuery(".button-collapse").sideNav({menuWidth: 300, activationWidth: 70, edge: 'left'});
      // Dropdown
     jQuery('.dropdown-button').dropdown({
           inDuration: 300,
           outDuration: 225,
           constrain_width: false, // Does not change width of dropdown to that of the activator
           hover: true, // Activate on hover
           gutter: 0, // Spacing from edge
           belowOrigin: true, // Displays dropdown below the button
		  
           }
      );
	  
	   jQuery('.modal-trigger').leanModal({
			starting_top: '0%',   
			ending_top: '50%',
			 opacity: .8,
	   });
	   
	   jQuery('.modal-trigger2').leanModal({
			starting_top: '0%',   
			ending_top: '50%',
			 opacity: .8,
	   });
		
		
		jQuery('.collapsible').collapsible({
		  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
		});
		setInterval(function(){
		jQuery('.portfolio_bg_main .gu_shuffle').css('min-height', '');
		var gu_height = jQuery('.portfolio_bg_main .gu_shuffle').height();
		//alert(gu_height)
		
		jQuery('.portfolio_bg_main .gu_shuffle').css('min-height', gu_height);
		},10)
		
		
		jQuery('.expertise_text_expand').hide();
		jQuery('.divider .arrow_icon, .service_top_read_more a').click(function(){
			jQuery('.expertise_text_expand').slideToggle();
			
			if(jQuery('.home_section').length > 0){
				if(jQuery('.expand_open').length > 0) {
					var s = jQuery('.expertise_bg').offset().top;
					
						jQuery('html, body').animate({
								scrollTop: s - 150
						}, 1000);
				}
			}
			
			jQuery(this).toggleClass('expand_open');
			//jQuery('body').toggleClass('read_more_expand');
			var s = jQuery(this).find('.textsss').text();
			
			jQuery('.section_title.content-format').toggleClass('expand_content_height');
			
			if(s == 'READ MORE') {
				jQuery(this).find('.textsss').text('READ LESS');
			}else {
				//alert();
				jQuery(this).find('.textsss').text('READ MORE');
				//var k = jQuery('.service_top').offset().top;
				var s = jQuery('.service_top').offset().top;
				
					jQuery('html, body').animate({
							scrollTop: s - 150
					}, 1000);
				
				
			}
			
			
		});
		
		
		if(winwidth > 767) {
			jQuery('.slider').slider({
				full_width: true, 
				height: 568,
			});
		}else {
			jQuery('.slider').slider({
				full_width: true, 
				height: 328,
			});
		}
		
		if(winwidth > 767) {
			jQuery('.our_clients_logo .carousel').carousel({
				full_width: true,
				 dist:0,
				shift:0,
				padding:120,
				time_constant:100
				//no_wrap:true,
			}); 
		}else {
			jQuery('.our_clients_logo .carousel').carousel({
				full_width: true,
				 dist:0,
				shift:0,
				padding:200,
				time_constant:100
				//no_wrap:true,
			});
		 
		}
		
		jQuery('.services_recent_project .carousel').carousel({
			full_width: true,
			 dist:0,
			shift:0,
			padding:0,
			time_constant:100,
			indicators:true,
			//no_wrap:true,
		}); 
		
		jQuery('.recent_work .slider_arrow .prev').click(function(){
			jQuery('.slider').slider('prev');
			return false;
		});
		 jQuery('.recent_work .slider_arrow .next').click(function(){
			jQuery('.slider').slider('next');
			return false;
		});
		
		 jQuery('.our_clients_logo .slider_arrow .prev').click(function(){
			jQuery('.carousel').carousel('prev');
			return false;
		});
		 jQuery('.our_clients_logo .slider_arrow .next').click(function(){
			jQuery('.carousel').carousel('next');
			return false;
		});
		
		jQuery('.service_recent_middle .slider_arrow .prev').click(function(){
			jQuery('.carousel').carousel('prev');
			return false;
		});
		 jQuery('.service_recent_middle .slider_arrow .next').click(function(){
			jQuery('.carousel').carousel('next');
			return false;
		});
		var z = jQuery('.carousel.lightbx').length;
		
		function lightbox(b) {
			//alert(b);
			
			jQuery('.carousel.lightbx'+b).carousel({
				full_width: true,
				 dist:0,
				shift:0,
				padding:0,
				time_constant:100,
				indicators:false,
				duration:1000,
				//no_wrap:true,
			}); 
			/*jQuery('.carousel.lightbx2').carousel({
				full_width: true,
				 dist:0,
				shift:0,
				padding:0,
				time_constant:100,
				indicators:false,
				duration:1000,
				//no_wrap:true,
			}); */
		}
		
		jQuery('.prev_light').click(function(){
			jQuery('.carousel.lightbx').carousel('prev');
			return false;
		});
		 jQuery('.next_light').click(function(){
			jQuery('.carousel.lightbx').carousel('next');
			return false;
		});
		
		/*jQuery('.prev_light2').click(function(){
			jQuery('.carousel.lightbx2').carousel('prev');
			return false;
		});
		 jQuery('.next_light2').click(function(){
			jQuery('.carousel.lightbx2').carousel('next');
			return false;
		});*/
		
  			
        jQuery('.g a').click(function(){
			var a = jQuery(this).attr('data-id');
			
			if(jQuery('#lightbox-'+a).length > 0) {
				jQuery('#lightbox-'+a).show();
				var b = jQuery('#lightbox-'+a).find('.carousel').attr('data-value');
				jQuery('.port_lightbox').fadeIn(100);
				lightbox(b)
			}
		});
		
		jQuery('.close_light').click(function(){
			jQuery('.lightbox_div').hide(50);
			jQuery('.port_lightbox').fadeOut(100);
			
			
			jQuery('.carousel.lightbx').carousel('destroy');
		});
		
		
		
		if(winwidth > 767) {
			var slider_width = jQuery('.slider').width();
			var a =( winwidth - slider_width) / 4;
			var b = a - 10;
			//alert(b);
			jQuery('.recent_work .slider_arrow .prev').css('left', -b);
			jQuery('.recent_work .slider_arrow .next').css('right', -b);
		}
		
   			
		setTimeout(function(){
			jQuery('.load_page').hide();
		},1000);
		
		
		
		if(winwidth > 600) {	
			// setTimeout(function() {
				 var elementHeights = jQuery('.blog_resource_inner .blog_resource_text').map(function() {
					return jQuery(this).outerHeight();
				});
				var maxHeight = Math.max.apply(null, elementHeights);
				jQuery('.blog_resource_inner .blog_resource_text').height(maxHeight);
			//},500);
		}
		setTimeout(function(){
			var elementHeights = jQuery('.header_menu li ul.cols3 li').map(function() {
				return jQuery(this).outerHeight();
			});
			var maxHeight = Math.max.apply(null, elementHeights);
			jQuery('.header_menu li ul.cols3 li').height(maxHeight);
		},1000)
		
		if(winwidth > 600) {	
			 var elementHeights = jQuery('.equal_height').map(function() {
				return jQuery(this).innerHeight();
			});
			var maxHeight = Math.max.apply(null, elementHeights);
			jQuery('.equal_height').height(maxHeight);
		}
		
		var byRow = jQuery('.about_our_clients').hasClass('equal_heights');

		// apply matchHeight to each item container's items
		jQuery('.about_client_logo').each(function() {
			jQuery(this).children('.col').matchHeight({
				byRow: byRow
			});
		});
		
		//setInterval(function(){
			var byRow = jQuery('.gu_shuffle').hasClass('grid_shuffle');

			// apply matchHeight to each item container's items
			jQuery('.portfolio-items').each(function() {
				jQuery(this).children('.g').matchHeight({
					byRow: byRow
				});
			});
		//},100)
		
		var byRow = jQuery('.multi_column').hasClass('heights_cols');

			// apply matchHeight to each item container's items
			jQuery('.heights_cols').each(function() {
				jQuery(this).children('li').matchHeight({
					byRow: byRow
				});
			});

		
		var byRow = jQuery('.services_middle').hasClass('services_middle_height');
		
			// apply matchHeight to each item container's items
		jQuery('.service_middle_info').each(function() {
			jQuery(this).children('.col').find('.service_middle_info_inner').matchHeight({
				byRow: byRow
			});
		});
		
		var byRow = jQuery('.service_main').hasClass('services_middle_height');
		
			// apply matchHeight to each item container's items
		jQuery('.service_middle_info').each(function() {
			jQuery(this).children('.col').find('.service_middle_info_inner').matchHeight({
				byRow: byRow
			});
		});
		
		var byRow = jQuery('.case_studies').hasClass('case_studies_height');
		
			// apply matchHeight to each item container's items
		jQuery('.case_studies_inner').each(function() {
			jQuery(this).children('.col').matchHeight({
				byRow: byRow
			});
		});
		
		var byRow = jQuery('.blog_post').hasClass('blog_equal');
		
			// apply matchHeight to each item container's items
		jQuery('.blog_post_top').each(function() {
			jQuery(this).children('.col').matchHeight({
				byRow: byRow
			});
		});
		
		var byRow = jQuery('.blog_post').hasClass('blog_equal');
		
			// apply matchHeight to each item container's items
		jQuery('.blog_all_post').each(function() {
			jQuery(this).children('.col').find('.blog_post_details').matchHeight({
				byRow: byRow
			});
		});
		
		
		
		if(winwidth > 767) {	
		var byRow = jQuery('body').hasClass('.page-template-contact');
		
			// apply matchHeight to each item container's items
		jQuery('.map_section').each(function() {
			jQuery(this).children('div').matchHeight({
				byRow: byRow
			});
		});
		}
		if(winwidth > 767) {	
			var byRow = jQuery('body').hasClass('.page-template-contact');
			
				// apply matchHeight to each item container's items
			jQuery('.contact_bottom_middle').each(function() {
				jQuery(this).children('div').matchHeight({
					byRow: byRow
				});
			});
		}
		
		if(winwidth > 767) {
			var l = jQuery('.section_nav').innerHeight();
			var m = jQuery('header').outerHeight();
			
			var z = winheight - l;
			jQuery('.home .banner').not('.banner.services_banner').css({'height':z, 'padding-bottom':0});
			if(jQuery('.section_nav').length > 0) {
			var k = jQuery('.section_nav').offset().top;
				jQuery(window).scroll(function(){
				
					  scroll = jQuery(window).scrollTop();
				
				  
				  if(scroll > k - m ) {
					 jQuery('.section_nav').addClass('section_nav_fixed').animate({'top':m});
					 jQuery('.expertise_bg, .service_top').addClass('sticky_padding');
					 jQuery('header').addClass('sec_nav_stick');
					 //alert('1000');
				  }		
				  else {
					  jQuery('.section_nav').removeClass('section_nav_fixed');
					  jQuery('.expertise_bg, .service_top').removeClass('sticky_padding');
					  jQuery('header').removeClass('sec_nav_stick');
				  }
				});
			}
		}
		
		
		
		
		
		
		
		jQuery('#grid .proj_port .reset a').click(function(){
			jQuery('.grid .g').each(function(){
				var a = jQuery(this).attr('data-background');
				jQuery(this).children().find('figcaption ').css('background-color', '');
				jQuery(this).children().find('figcaption ').css('background-color', a);
				jQuery(this).children().find('hr ').css('background-color', a);
			});
		});
		
		jQuery('#grid .grid > div a').click(function(){
			var a = jQuery(this).children().find('figcaption').attr('data-background');
			//alert(a);
			setTimeout(function(){
				jQuery('.lb-details').css('background-color', '');
				jQuery('.lb-details').css('background-color', a);
			}, 100)
		});
		
		var con = jQuery('.container').width();
		var p = jQuery( ".breadcrumb_bg" );
		var offset = p.offset();
		
		/*if(jQuery('.gu.grid').length > 0) {
			var s = jQuery('.gu.grid').offset().top;
			jQuery('#grid .menu_port a').click(function() {
				jQuery('html, body').animate({
						scrollTop: s - 100
				}, 1000);
				
				var a = jQuery(this).attr('data-index');
				jQuery('.grid figcaption').css('background-color', a);
				jQuery('.grid hr').css('background-color', a);
			});
		}*/
		
		if(jQuery('.single .blog_post').length > 0) {
			var blog = jQuery('.single .blog_post').offset().top	
			//alert(blog)
			//alert(offset.top);
			var o = winwidth - con;
			
			jQuery('.social_share').css('right', o);
			
			if(winwidth > 767) {
				jQuery(window).scroll(function(){
			
					  scroll = jQuery(window).scrollTop();
				
				  
				  if(scroll > blog -320 ) {
					 jQuery('.social_share').removeClass('fixed_share');
					 //alert('1000');
				  }
				 else  if (scroll > offset.top - 80) {
					 jQuery('.social_share').addClass('fixed_share');
				  }
				  
				  else {
					  jQuery('.social_share').removeClass('fixed_share');
				  }
				});
			}
		}
		
		
		jQuery('body').on('click','.lean-overlay',function(){
			/*alert('s');*/
		});
		
		
	
});
function video(){
	
		jQuery("video").get(0).play();
		setTimeout(function(){
		jQuery('.lean-overlay').attr('onClick','close_video()');
		},500);
}
function close_video() {
	//alert('s');
	jQuery("video").get(0).pause();
}

