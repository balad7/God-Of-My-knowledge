

//Blog Filter
function rec_page_main_post_filter(tis) {
		
		option_value = tis.value;
		if( option_value == 'all_cat_post' ) {
			jQuery("#hidden_event_cat").val('');
		}
		else{
			jQuery("#hidden_event_cat").val(option_value);
		}
		
		hidden_field_value = jQuery("#hidden_event_cat").val();
		var data = {
			action: "filter_rec_main_post",
			paged: 1,
			filtering_1: hidden_field_value,
			type : 'filter'
		};
		
	jQuery.post(ajaxurl, data, function(response) {
		if(response) {
				//alert(response);
				jQuery(".main_rec_section").html(response);
				var total_page = jQuery("#hidden_total_page").val();
				if( total_page == 1 ) {
					jQuery(".load_more").hide();
				} else {
					jQuery(".load_more").show();
				}
				blog_equal();
		}
	});
}

function load_rec_more_posts( page ) {
	new_page = parseInt(page + 1);
	jQuery(".rec_main_listing").attr("onclick", "load_rec_more_posts("+new_page+");");
	jQuery(".rec_main_listing").addClass('post_loading');
	filter = jQuery("#hidden_event_cat").val();
	var data = {
		action: "load_rec_main_post",
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
			jQuery(".blog_all_post").append(content);
			if( total_page == "hide" ) {
					jQuery(".load_more").hide();
			} else {
					jQuery(".load_more").show();	
			}
			jQuery(".rec_main_listing").removeClass('post_loading');
			blog_equal();
		}
	});
	return false;
}

// __________________________ARCHIVE_________________________

/*function load_resource_more_posts(page){
	new_page = parseInt(page + 1);
	jQuery(".resource_listing").attr("onclick", "load_archive_more_posts("+new_page+");");
	jQuery(".resource_listing").addClass('post_loading');
	cat = jQuery("#hidden_resource_cat").val();
	var data = {
		action: "rec_archive_post",
		paged: new_page,
		type : 'load_more',
		category_slug : cat
	};
	
	jQuery.post(ajaxurl, data, function(response) {
		if(response) {
			jQuery(".load_more_bg").show();
			data = response.split('{load_more_status}=');
			var content = data[0];
			var total_page = data[1];
			jQuery(".blog_all_post").append(content);
			if( total_page == "hide" ) {
					jQuery(".load_more").hide();
			} else {
					jQuery(".load_more").show();	
			}
			jQuery(".resource_listing").removeClass('post_loading');
			blog_equal();
		}
	});
	return false;
}

//__________________________________TUTORIAL SECTION_________________________

function load_tutorial(page) {
	new_page = parseInt(page + 1);
	jQuery(".tutorial_listing").attr("onclick", "load_tutorial("+new_page+");");
	jQuery(".tutorial_listing").addClass('post_loading');
	filter = jQuery("#hidden_event_cat").val();
	var data = {
		action: "load_tutorial_post",
		paged: new_page,
		//filtering_1:filter ,
		type : 'load_more'
	};
	
	jQuery.post(ajaxurl, data, function(response) {
		if(response) {
			
			jQuery(".load_more_bg").show();
			data = response.split('{load_more_status}=');
			var content = data[0];
			var total_page = data[1];
			jQuery(".blog_all_post").append(content);
			if( total_page == "hide" ) {
					jQuery(".load_more").hide();
			} else {
					jQuery(".load_more").show();	
			}
			jQuery(".tutorial_listing").removeClass('post_loading');
			blog_equal();
		}
	});
	return false;
	
}


//__________________________________SCRIPT SECTION_________________________

// FILTER
function scr_page_post_filter(tis) {
		
		option_value = tis.value;
		if( option_value == 'all_cat_post' ) {
			jQuery("#hidden_script_cat").val('');
		}
		else{
			jQuery("#hidden_script_cat").val(option_value);
		}
		
		hidden_field_value = jQuery("#hidden_script_cat").val();
		var data = {
			action: "filter_scr_post",
			paged: 1,
			filtering_1: hidden_field_value,
			type : 'filter'
		};
		
	jQuery.post(ajaxurl, data, function(response) {
		if(response) {
				//alert(response);
				jQuery(".rec_section").html(response);
				var total_page = jQuery("#hidden_total_page").val();
				//alert(total_page);
				if( total_page == 1 ) {
					jQuery(".load_more").hide();
				} else {
					jQuery(".load_more").show();
				}
				blog_equal();
		}
	});
}
//LOAD MORE
function load_scr_post( page ) {
	
	new_page = parseInt(page + 1);
	jQuery(".scr_listing").attr("onclick", "load_scr_post("+new_page+");");
	jQuery(".scr_listing").addClass('post_loading');
	filter = jQuery("#hidden_script_cat").val();
	var data = {
		action: "load_scr_post",
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
			jQuery(".blog_all_post").append(content);
			if( total_page == "hide" ) {
					jQuery(".load_more").hide();
			} else {
					jQuery(".load_more").show();	
			}
			jQuery(".scr_listing").removeClass('post_loading');
			blog_equal();
		}
	});
	return false;
}

// __________________________SCRIPT ARCHIVE_________________________

function load_scr_archive(page){
	new_page = parseInt(page + 1);
	jQuery(".scr_archive_listing").attr("onclick", "load_scr_archive("+new_page+");");
	jQuery(".scr_archive_listing").addClass('post_loading');
	cat = jQuery("#hidden_resource_cat").val();
	var data = {
		action: "src_archive_post",
		paged: new_page,
		type : 'load_more',
		category_slug : cat
	};
	
	jQuery.post(ajaxurl, data, function(response) {
		if(response) {
			jQuery(".load_more_bg").show();
			data = response.split('{load_more_status}=');
			var content = data[0];
			var total_page = data[1];
			jQuery(".blog_all_post").append(content);
			if( total_page == "hide" ) {
					jQuery(".load_more").hide();
			} else {
					jQuery(".load_more").show();	
			}
			jQuery(".scr_archive_listing").removeClass('post_loading');
			blog_equal();
		}
	});
	return false;
}
jQuery(document).ready(function(){
		max_page = jQuery("#max").val();
		if(max_page == 1){
			jQuery(".load_more").hide();
		}
	
});*/