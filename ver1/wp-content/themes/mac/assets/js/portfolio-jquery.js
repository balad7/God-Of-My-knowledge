jQuery(function($){
		jQuery('#grid .menu_port a').click(function(e) {
			e.preventDefault();
			if (jQuery(this).hasClass('selected'))
				return;
			jQuery('#grid .menu_port .selected').removeClass('selected');
			var href = jQuery(this).attr('href').replace("#", ""),
				feed = jQuery('.grid > div'),
				i = 0,
				j = 0,
				len = feed.length,
				delay = 20;
			jQuery(this).addClass('selected');
			for (i = len - 1; i > -1; i--) {
				var target = jQuery(feed[i]);
				if (jQuery(target).hasClass(href) || href == 'all') {
					setTimeout(function(target) {
						jQuery(target).removeClass('back')
					}, j * delay + i * delay, target);
				} else {
					setTimeout(function(target) {
						jQuery(target).addClass('back');
					}, j * delay + i * delay, target);
				};
			};
			
		});
		
		
});