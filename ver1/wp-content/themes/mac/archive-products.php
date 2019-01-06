<?php get_header(); 
	$page_slug ='products';
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
        <div class="breadcrumb_bg white">
        	<div class="container">	
            	<div class="row">
					<?php
                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bread-crumb') ) : endif;?>
                </div>
            </div>
        </div>
        <?php if (have_posts()) : ?>
        <div class="product_post white">
            <div class="row product_list_content">
                <div class="product-archive-section">
                    <div class="product_top"><?php 
						while (have_posts()) : the_post(); ?>
                        	<div class="product_list_panel">
                            	<div class="container">
                                <div class="product_image_section row">
                                    <div class="product_image"><?php
                                        if (has_post_thumbnail( $post->ID ) ){
                                        $featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '317_369_img' );?>
                                        <a href="<?php the_permalink();?>"><img src="<?php echo $featured_img[0];?>" width="<?php echo $featured_img[1];?>" height="<?php echo $featured_img[2];?>"/></a><?php
                            
                                        }?>
                                        </div>
                                        <div class="product_description">
                                        <h2 class="post_title"><?php the_title();?></h2>
                                        <div class="description"><?php
                                            the_excerpt();?>
                                           
                                        </div>
                                         <a href="<?php the_permalink();?>" class="btn orange_bg z-depth-1">View Project</a>
                                    </div>
                                    </div>
                                  </div>
                            </div>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
<?php endif; ?>
<?php get_footer(); ?>
