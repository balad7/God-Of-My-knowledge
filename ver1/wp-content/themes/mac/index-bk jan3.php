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
					<div class="blog_post_list"><?php load_blog_post( 1, '', '');?></div><?php 
					//load_blog_post( 1, '', ''); 
					$i = 1;
					$row = 1;
					$total_posts = $wp_query->found_posts;
					if (have_posts()) : while (have_posts()) : the_post(); 
						/*if($i==1 ||$i%7==1){?>
                       <div class="col l12 m12 s12 blog_post_top">
                    	<div class="col l7 m7 s12 left" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/dynamic/blog_post1.jpg);">
                        	<div class="blog_info">
                            	<span class="date">12</span>
                                <span class="month">SEP</span>
                            </div>
                        </div>
                        <div class="col l5 m5 s12 right">
                        	<div class="inner_padding">
                                <h2 class="post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                <span><a href="#">iPhone Development, Mobile development, Outsource to India</a></span>
                                <p>It is two years now since  the mobile apps have already overtaken desktop apps as per ComScore report. In the US, KPCB Mobile Technology Trends report shows that mobile media time is 51% as compared to desktops..</p>
                                <div class="read_more_blog">
                                	<a href="<?php the_permalink();?>" class="btn orange_bg z-depth-1">Read More</a>
                                    <div class="comments">
                                    	<span><a href="#"><i class="fa fa-comments"></i>12</a></span>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div><?php
						$row = 1;
						}
						else{
					if($i==2 ||$i%7==2){?>
                    <!-- blog all post -->
                    <div class="blog_all_post col l12 m12 s12"><?php
					}?>
                        <div class="col l4 m4 s12">
                        	<div class="blog_all_inner">
                                <div class="blog_post_img">
                                    <div class="blog_info">
                                    <span class="date">12</span>
                                    <span class="month">SEP</span>
                                </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dynamic/blog_post2.jpg" alt="" >
                                </div>
                                <div class="blog_post_details">
                                    <h2 class="blog_post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    <span><a href="#">iPhone Development, Mobile development, Outsource to India</a></span>
                                    <p>4 SEO Habits That You Should Unlearn. You must have heard the phrase that says 'Change is Constant.' ...</p>
                                    <div class="read_more_blog">
                                        <div class="comments">
                                            <span><a href="#"><i class="fa fa-comments"></i>12</a></span>
                                        </div>	
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
						if($i==$total_posts ||$i%7==0){	?>
                    </div><?php 
						}
							
						}
						
						$row++;
					$i++;*/
				endwhile; endif; ?>
                
                <div class="load_more">
                    <a href="javascript:void(0);" class="btn orange_bg z-depth-1 blog_listing" onclick="load_blog_more_posts(1);">load more</a>
                </div>
                 
			</div>
		</div>
	</div>

<?php get_footer(); ?>
