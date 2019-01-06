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
       <div class="blog_post blog_equal white">
       		<div class="container">
            	<div class="row eventlist_post_section">
				<div class="archive-section"><?php 
					load_archive_post(1);?>
                </div><?php
				$cat = get_category( get_query_var( 'cat' ) );
				$cat_id = $cat->cat_ID;
				$cat_name = $cat->name;
				$cat_slug = $cat->slug;
				$total_posts = $wp_query->found_posts;
				$category = single_term_title("", false);
				$catid = get_cat_ID( $category );
				if($total_posts>7){?>
                
                <div class="load_more">
                    <a href="javascript:void(0);" class="btn orange_bg z-depth-1 blog_listing" onclick="load_archive_more_posts(1);">load more</a>
                </div><?php
				}?>
                <input type="hidden" name="hidden_archive_cat" id="hidden_archive_cat" value="<?php echo $cat_slug;?>" />
                 
			</div>
		</div>
	</div>

<?php get_footer(); ?>
