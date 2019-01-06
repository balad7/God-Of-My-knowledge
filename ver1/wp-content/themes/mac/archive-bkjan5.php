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
					//load_blog_post( 1, '', ''); 
					/*$i = 1;
					$row = 1;
					$total_posts = $wp_query->found_posts;
					$category = single_term_title("", false);
					$catid = get_cat_ID( $category );
					if (have_posts()) : while (have_posts()) : the_post(); 
						
						$category = ' ';
						$category = get_the_terms( $post->ID, 'category' );
						if($category){
							$cat_arr = ' ';
							$cat_arr = array();
							$cat_link = array();
							foreach ( $category as $cat ){
								//$cat_arr[] = $cat->name;
								 $cat_link[]='<a href="' . get_term_link( $cat->term_id ) . '" ">' . $cat->name .'</a>';
								
							}
						}
						if($i==1){
							if (has_post_thumbnail( $post->ID ) ){
								$featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
								$featured_img_box = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '354_195_img' );
							}?>
                            <div class="col l12 m12 s12 blog_post_top">
                                <div class="col l7 m7 s12 left" <?php if($featured_img[0]){?>style="background-image:url(<?php echo $featured_img[0];?>);"<?php }?>>
                                    <div class="blog_info">
                                        <span class="date"><?php the_time('j') ?></span>
                                        <span class="month"><?php the_time('M') ?></span>
                                    </div>
                                </div>
                                <div class="col l5 m5 s12 right">
                                    <div class="inner_padding">
                                        <h2 class="post_title"><a href="<?php the_permalink();?>"><?php the_title(); echo $i?></a></h2>
                                        
                                        <span><?php echo implode(", ",$cat_link);?><!--<a href="#"><?php //echo implode(", ",$cat_arr);?></a>--></span>
                                            <?php the_excerpt();
                                            //print_r($cat_link);?>
                                        <div class="read_more_blog">
                                            <a href="<?php the_permalink();?>" class="btn orange_bg z-depth-1">Read More</a>
                                            <div class="comments">
                                             <span><?php comments_popup_link('No Comments &#187;', '<i class="fa fa-comments"></i> 1 ', '<i class="fa fa-comments"></i> %  '); ?></span>
                                                <!--<span><a href="#"><i class="fa fa-comments"></i>12</a></span>-->
                                            </div>	
                                        </div>
                                    </div>
                                </div>
                            </div><?php
							$row = 1;
					}
					else{
						if($i==2){?>
                    		<!-- blog all post -->
                    		<div class="blog_all_post col l12 m12 s12"><?php
                    	}?>
                        <div class="col l4 m4 s12">
                            <div class="blog_all_inner">
                                <div class="blog_post_img">
                                    <div class="blog_info">
                                        <span class="date"><?php the_time('j') ?></span>
                                        <span class="month"><?php the_time('M') ?></span>
                                    </div><?php
                                    if (has_post_thumbnail( $post->ID ) ){
                                        $featured_img_box = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '354_195_img' );?>
                                        <img src="<?php echo $featured_img_box[0];?>" width ="<?php echo $featured_img_box[1];?>" height="<?php echo $featured_img_box[2];?>" alt="" ><?php
                                    }?>
                                </div>
                                <div class="blog_post_details">
                                    <h2 class="blog_post_title"><a href="<?php the_permalink();?>"><?php the_title(); echo $i?></a></h2>
                                    <span><?php echo implode(", ",$cat_link);?></span>
                                    <?php the_excerpt();?>
                                    <div class="read_more_blog">
                                        <div class="comments">
                                         <span><?php comments_popup_link('No Comments &#187;', '<i class="fa fa-comments"></i> 1 ', '<i class="fa fa-comments"></i> %  '); ?></span>
                                            <!--<span><a href="#"><i class="fa fa-comments"></i>12</a></span>-->
                                        </div>	
                                    </div>
                                </div>
                            </div>
                        </div><?php
						if($i==$total_posts){	?>
							</div><?php 
						}
					}

			
			$row++;
			$i++;
				endwhile; endif;*/ 
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
