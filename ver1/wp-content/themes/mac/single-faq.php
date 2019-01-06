<?php get_header(); 
	$post_id = array();
	if (have_posts()) : while (have_posts()) : the_post();
		$post_id[]=get_the_id();
		$titan = TitanFramework::getInstance( 'mac' );
		if (has_post_thumbnail( get_the_ID() ) ){
			$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );
		}?>
		 <div class="banner blog_single" <?php if($titan->getOption( 'banner_image' )){?>style="background-image:url(<?php  echo wp_get_attachment_url( $titan->getOption( 'banner_image' ) ); ?>);"<?php }?>>
        	<div class="overlay"></div>
            <div class="banner_heading">
            	
                <div class="banner_inner_bg">
                	<div class="banner_text">
                    	<h1><?php the_title();?></h1>
                    </div>
                </div>
            </div>
            <div class="container"><?php
			$category = ' ';
			$category = get_the_terms( $post->ID, 'category' );
			if($category){?>
                 <?php /*?><div class="post_category">
                    <ul><?php
						$list = array();
						foreach ( $category as $cat ){
							$list[] = $cat->term_id;?>
                        	<li><a href="<?php echo get_term_link( $cat->term_id );?>"><?php echo $cat->name;?> </a></li><?php
						}?>
                        
                    </ul>
                 </div><?php */?>	<?php
			}?>
            </div>
        </div>
        <!-- breadcrump -->
        <div class="breadcrumb_bg white">
        	<div class="container">
            	<div class="row"><?php
				 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bread-crumb') ) : endif;?>
                	 <?php /*?><nav>
                        <div class="nav-wrapper">
                          <div class="col s12">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb">Home</a>
                            <a href="<?php echo get_permalink_by_slug('blog'); ?>" class="breadcrumb">Blog</a>
                            <span class="breadcrumb"><?php the_title();?></span>
                          </div>
                        </div>
                      </nav><?php */?>
                </div>
            </div>
        </div>
       <!-- blog single -->
       <div class="blog_single_content white">
       		<div class="container">
            	<div class="row">
                	<div class="col s12">
                        	<div class="content-format">
                            
                           <?php the_content();
						  
						  //echo image_alt_tag(get_the_content(get_the_ID()));
						  //echo replace_content(get_the_content(get_the_ID()));?>
                           </div>
                    </div>
                </div>
            </div>
       </div><?php
			
	endwhile; endif; get_footer(); ?>