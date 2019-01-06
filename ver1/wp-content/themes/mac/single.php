<?php get_header(); 
	$post_id = array();
	if (have_posts()) : while (have_posts()) : the_post();
		$post_id[]=get_the_id();
		$banner_image = '';
		if (has_post_thumbnail( get_the_ID() ) ){
			$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );
		}?>
		 <div class="banner blog_single" style="background-image:url(<?php echo $banner_image[0];?>);background-color:<?php echo get_field('banner_background_color'); ?>;background-size:<?php echo get_field('banner_background_image_size'); ?>;">
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
                <?php comments_template(); ?>
            </div>
       </div><?php
	  $args = array(
		'post_type' 		=> 'post',
		'posts_per_page' 	=> 3,
		'post_status' 		=> 'publish',
 		'orderby'			=> 'rand',
		'category__in'		=> $list,
		'post__not_in' =>$post_id
		
 	);
			
    $loop = new WP_Query( $args );
	$total_page = $loop->max_num_pages;
  	$post_count = $loop->found_posts;
	if($loop->found_posts > 0) {?>
       <div class="blog_post blog_equal white">
       		<div class="container">
            	<div class="row">
                	<div class="col s12">
                    	<h2 class="section_title">Related posts</h2>
                    </div>
                    <!-- blog all post -->
                    <div class="blog_all_post col l12 m12 s12"><?php
						while ( $loop->have_posts() ) : $loop->the_post(); global $post;
							?>
                            <div class="col l4 m4 s12">
                                <div class="blog_all_inner">
                                    <div class="blog_post_img">
                                        <div class="blog_info">
                                        	<span class="date"><?php the_time('j') ?></span>
                                        	<span class="month"><?php the_time('M') ?></span>
                                   	 	</div><?php
										$terms = get_the_terms( $post->ID, 'category' );
										if($terms){
											$cat_link = array();
											foreach ( $terms as $term ){
												//echo get_term_link($term->term_id);
												 $cat_link[]='<a href="' . get_term_link( $term->term_id ) . '" ">' . $term->name .'</a>';
	;
											}
										}
										$image = '';
										if (has_post_thumbnail($post->ID) ){
											$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '354_195_img' );?>
											<img src="<?php echo $image[0];?>" alt="<?php echo get_the_title(get_the_ID());?>" ><?php
										}
										else{?>
												<a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_empty_img.jpg" alt="<?php echo get_the_title(get_the_ID());?>" ></a><?php
											}?>
                                    </div>
                                    <div class="blog_post_details">
                                        <h2 class="blog_post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2><?php
										if($cat_link){?>
                                        	<span><?php echo implode(', ',$cat_link);?></span><?php
										}?>
                                        <?php the_excerpt();?>
                                        <div class="read_more_blog">
                                            <div class="comments">
                                                 <span><?php comments_popup_link('No Comments &#187;', '<i class="fa fa-comments"></i> 1 ', '<i class="fa fa-comments"></i> %  '); ?></span>
                                            </div>	
                                        </div>
                                    </div>
                                </div>
                            </div><?php
						endwhile;wp_reset_query();?>
                        
                    </div>
                </div>
            </div>
       </div><?php
	}
	endwhile; endif; get_footer(); ?>