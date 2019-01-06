/* 
 * Custom Jquery for this theme
 */

jQuery(function($){
	
	var winwidth = jQuery(window).width();
	var winheight = jQuery(window).height();
	
		if (jQuery(window).width() <= 767) {

			jQuery('.ms-right .ms-section').unwrap().appendTo('.ms-left');

			var ul = jQuery('.ms-left').find('.ms-section').sort(function (a, b) {
			  return jQuery(a).data('id') - jQuery(b).data('id')
			});

			jQuery('.ms-left').empty().append(ul);
			
				//jQuery('.ms-section.section_right').css('min-height',winheight/2);
				jQuery('.ms-section.section_left').css('height',(winheight/2) + 25);
			
			jQuery('.modal-trigger').leanModal({
					starting_top: '0%',   
					ending_top: '50%',
					 opacity: .8,
			   });
		} else {
		  jQuery('#myContainer').multiscroll({
				//sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE'],
				keyboardScrolling: true,
				//normalScrollElements: '#left1,#right1',
				afterLoad: function(anchorLink, index){
					//using index
					if(index > 0){
						//jQuery('.page-right').addClass('page_new_'+rowcount);
					}
		
					
				}
			});
		}
	
		var g = jQuery('.page-right').length;
		
			jQuery('.page_up').click(function(){
				jQuery.fn.multiscroll.moveSectionUp();
			});
	
			jQuery('.page_down').click(function(){
				jQuery.fn.multiscroll.moveSectionDown();
			});
			
		if(winwidth < 768) {
			//jQuery('.move_layout').removeClass('mCustomScrollbar content')
		}
		
		
		
			
	/* For iOS touch hover effect */
	document.addEventListener("touchstart", function() {},false);
	
});


jQuery(window).on('load', function () {
	
		var winwidth = jQuery(window).width();
		var winheight = jQuery(window).height();
	
		jQuery('.read_more').click(function(){
			jQuery('.move_layout').addClass('open_layout');
			jQuery('.page_wrapper_new, .section_right_bottom').addClass('layout_right');
			jQuery('.close_layout').addClass('close_active');
			var m = jQuery(this).attr('data-index')
			jQuery('#left-'+m+ '.load_page').show();
			
			if(winwidth < 768) {
				/*setTimeout(function(){
				jQuery('#myContainer').css({'overflow':'hidden','max-height':winheight});
				},600);
				var s = jQuery(this).closest('.section_right').offset().top
				jQuery('.close_layout').attr('data-value', s);*/
			}
			if(winwidth > 767) {
				var k = jQuery('.section_left.active').attr('data-index');
				jQuery('#left-'+k+ '.load_page').show();
				jQuery.fn.multiscroll.destroy();
				jQuery.fn.multiscroll.setKeyboardScrolling(false);
			}
			return false;
		});
		jQuery('.close_layout').click(function(){
				if(winwidth < 768) {
					/*var s = jQuery(this).data('value');
					jQuery('html, body').animate({
						scrollTop: s - 100
					}, 650);
					jQuery('#myContainer').css({'overflow':'inherit','max-height':'auto'});*/
				}
				jQuery('.page_wrapper_new, .section_right_bottom').removeClass('layout_right');
				jQuery('.move_layout').removeClass('open_layout');
				setTimeout(function(){
					jQuery('.load_page').hide();
				},1000);
				jQuery('.close_layout').removeClass('close_active');
				if(winwidth > 767) {
					jQuery.fn.multiscroll.build();
					jQuery.fn.multiscroll.setKeyboardScrolling(true);
				}
				
				return false;
			
		});
		
	
});
	