<?php get_header(); 
	$page_slug ='resource';
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
					<div class="breadcrumbs" vocab="https://schema.org/" typeof="BreadcrumbList">
                        <!-- Breadcrumb NavXT 5.7.0 -->
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Macronimous." href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home">
                                <span property="name">Home</span>
                            </a>
                            <meta property="position" content="1">
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Resources." href="<?php echo esc_url( home_url( '/' ) ); ?>resources" class="post post-page">			
                                <span property="name">Resources</span>
                            </a>
                            <meta property="position" content="2">
    
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name"><?php single_cat_title(); ?></span>
                            <meta property="position" content="5">
                        </span>
                      </div>
				
				
				<?php
					 	 //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bread-crumb') ) : endif;?>
                	 <?php /*?><nav>
                        <div class="nav-wrapper">
                          <div class="col s12">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb">Home</a>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/tutorials" class="breadcrumb">Tutorials</a>
                            <span class="breadcrumb"><?php the_title();?></span>
                          </div>
                        </div>
                      </nav><?php */?>
                </div>
            </div>
        </div>
       <div class="blog_post blog_equal white">
       		<div class="container">
            	<div class="row eventlist_post_section">
				<div class="resource-category-section"><?php 
					rec_archive_post(1);?>
                </div><?php
				 $qobj = $wp_query->get_queried_object();
			
				$cat_name = $cat->name;
				$cat_slug = $qobj->term_id;
				$total_posts = $wp_query->found_posts;
					
					
				if($total_posts>7){?>
                
                <div class="load_more">
                    <a href="javascript:void(0);" class="btn orange_bg z-depth-1 resource_listing" onclick="load_resource_more_posts(1);">load more</a>
                </div><?php
				}?>
                <input type="hidden" name="hidden_resource_cat" id="hidden_resource_cat" value="<?php echo $cat_slug;?>" />
                 
			</div>
		</div>
	</div>

<?php get_footer(); ?>
