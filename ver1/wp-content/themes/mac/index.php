<?php get_header(); 
	$page_slug ='blog';
	$page_data = get_page_by_path($page_slug);
	$page_id = $page_data->ID;
	$banner_image = '';
	if (has_post_thumbnail( $page_id ) ){
		$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), '' );
	}
	$data = get_post_meta($page_id); ?>
    
     <div class="banner about_us_banner" <?php if($banner_image){?>style="background-image:url(<?php echo $banner_image[0];?>);"<?php }?>>
                <input type="hidden" name="hidden_event_cat" id="hidden_event_cat" value="" />
        	<div class="overlay"></div>
            <div class="container">
                <div class="row"><?php
					if($data['h_page_title'][0]){?>
                        <div class="banner_inner_bg">
                            <div class="banner_text">
                             <?php echo '<'.$data['page_title_h_tag'][0].'>'.$data['h_page_title'][0].'</'.$data['page_title_h_tag'][0].'>';?>
                            </div>
                        </div><?php
					}?>
                </div>
            </div>
        </div>
        <div class="blog_filter">
            <div class="container">
                <div class="row">
                	<div class="blog_filter_right">
                    	<label>Select Category:</label>
                    	<div class="custom_select"><?php
							$categories = get_categories(); ?>
                            <select  class="" onchange="blog_page_post_filter(this);">
                                <option value="all_cat_post">ALL</option><?php
								foreach ( $categories as $category ) {
									//print_r($category);?>
                                	<option value="<?php echo $category->slug;?>"><?php echo $category->name;?></option><?php
								}?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <div class="blog_post blog_equal white">
            <div class="container">
                <div class="row eventlist_post_section">
                    <div class="blog_post_list">
                    	<?php load_blog_post( 1, '', '');?>
                    </div>
                    <div class="load_more">
                    	<a href="javascript:void(0);" class="btn orange_bg z-depth-1 blog_listing" onclick="load_blog_more_posts(1);">load more</a>
                    </div>
                </div>
            </div>
        </div>
    
<!--</div>-->
<?php get_footer(); ?>
