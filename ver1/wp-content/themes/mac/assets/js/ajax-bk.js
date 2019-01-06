

//Blog Filter
function blog_page_post_filter(tis) {
		filtering_option_value = tis.value;
		if( filtering_option_value == 'all_cat_post' ) {
			jQuery("#hidden_event_cat").val('');
		}
		else{
			jQuery("#hidden_event_cat").val(filtering_option_value);
		}
		
		hidden_field_value = jQuery("#hidden_event_cat").val();
		var data = {
			action: "filter_blog_post",
			paged: 1,
			filtering_1: hidden_field_value,
			type : 'filter'
		};
		
	jQuery.post(ajaxurl, data, function(response) {
		if(response) {
				jQuery(".eventlist_post_section").html(response);
				var total_page = jQuery("#hidden_total_page").val();
				if( total_page == 1 ) {
					jQuery(".load_more").hide();
				} else {
					jQuery(".load_more").show();
				}
		}
	});
}

function load_blog_more_posts( page ) {
	new_page = parseInt(page + 1);
	jQuery(".blog_listing").attr("onclick", "load_blog_more_posts("+new_page+");");
	jQuery(".blog_listing").addClass('post_loading');
	filter = jQuery("#hidden_event_cat").val();
	var data = {
		action: "load_blog_post",
		paged: new_page,
		filtering_1:filter ,
		type : 'load_more'
	};
	
	jQuery.post(ajaxurl, data, function(response) {
		if(response) {
			jQuery(".load_more_bg").show();
			data = response.split('{load_more_status}=');
			var content = data[0];
			var total_page = data[1];
			jQuery(".blog_post_list").append(content);
			if( total_page == "hide" ) {
					jQuery(".load_more").hide();
			} else {
					jQuery(".load_more").show();	
			}
			jQuery(".blog_listing").removeClass('post_loading');
		}
	});
	return false;
}