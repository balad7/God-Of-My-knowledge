<?php get_header(); 

	$titan = TitanFramework::getInstance( 'mac' );
	$data = get_post_meta($page_id); ?>
     <div class="banner about_us_banner" <?php if($titan->getOption('banner_image')){?>style="background-image:url(<?php echo wp_get_attachment_url( $titan->getOption( 'banner_image' ) );?>);"<?php }?>>
        	<div class="overlay"></div>
            <div class="container">
                <div class="row"><?php
					//if($data['h_page_title'][0]){?>
                        <div class="banner_inner_bg">
                            <div class="banner_text">
                             <h1>Free Scripts - Code Snippets</h1>
                            </div>
                        </div><?php
					//}?>
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
                            <a property="item" typeof="WebPage" title="Go to <?php echo get_the_title(747);?>." href="<?php echo get_the_permalink(747); ?>" class="post post-page">			
                                <span property="name"><?php echo get_the_title(747);?></span>
                            </a>
                            <meta property="position" content="3">
    
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
					src_archive_post(1);?>
                </div><?php
				 $qobj = $wp_query->get_queried_object();
			
				$cat_name = $cat->name;
				$cat_slug = $qobj->term_id;
				$total_posts = $wp_query->found_posts;
					
					
				if($total_posts>7){?>
                
                <div class="load_more">
                    <a href="javascript:void(0);" class="btn orange_bg z-depth-1 scr_archive_listing" onclick="load_scr_archive(1);">load more</a>
                </div><?php
				}?>
                <input type="hidden" name="hidden_resource_cat" id="hidden_resource_cat" value="<?php echo $cat_slug;?>" />
                 
			</div>
		</div>
	</div>

<?php get_footer(); ?>
