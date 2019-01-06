<?php get_header(); ?>

	<?php 
	$post_id = array();
	if (have_posts()) : while (have_posts()) : the_post();
		
		$mobile_banner_data = get_post_meta(get_the_ID());
		$mobile_banner= '';
						if(isset($mobile_banner_data['product_banner_image'][0])) {
							$mobile_banner_arr = wp_get_attachment_image_src($mobile_banner_data['product_banner_image'][0], 'url' );
							$mobile_banner = $mobile_banner_arr[0];
						}?>
        <div class="banner product_single" style="background-image:url(<?php echo $mobile_banner_arr[0];?>);">
            <div class="overlay"></div>
            <div class="banner_heading">
                <div class="banner_inner_bg">
                	<div class="banner_text">
                          <h1><?php the_title();?></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrump -->
        <div class="breadcrumb_bg white">
        	<div class="container">
            	<div class="row">
					<div class="breadcrumbs" vocab="https://schema.org/" typeof="BreadcrumbList">
                        <!-- Breadcrumb NavXT 5.7.0 -->
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Macronimous." href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home">
                                <span property="name">Home</span>
                            </a>
                            <meta property="position" content="1">
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Resources." href="<?php echo esc_url( home_url( '/' ) ); ?>products" class="post post-page">			
                                <span property="name">Products</span>
                            </a>
                            <meta property="position" content="2">
    
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name"><?php echo get_the_title(get_the_ID());?></span>
                            <meta property="position" content="3">
                        </span>
                      </div>
				
				
                </div>
            </div>
        </div>
       <!-- blog single -->
       <div class="blog_single_content product_single white">
       		<div class="container">
            	<div class="row">
                	<div class="col s8">
                        <div class="content-format"><?php
						if ( has_excerpt(get_the_ID()) ) {?>
                        <h3>Intro</h3><?php
						the_excerpt();
						}the_content();?>
                        </div>
                    </div>
                    <div class="col s4"><?php
					$rows = get_field('product_gallery_images');
					if($rows){?>
                        <div class="bxslider"><?php
							foreach($rows as $row){
								$gallery_image = '';
								$gallery_image_arr = $row['gallery_product_images'];
								$gallery_image = wp_get_attachment_image_src( $gallery_image_arr['id'],'350_img');?>
  							<div><img src="<?php echo $gallery_image[0];?>"  width="<?php echo $gallery_image[1];?>" height="<?php echo $gallery_image[2];?>"></div><?php
							}?>
  							
						</div><?php
					}?>
                    </div>
                </div>
            </div>
       </div>
      
	   <?php
	endwhile; endif;get_footer(); ?>