<?php get_header(); ?>

	<?php 
	$post_id = array();
	if (have_posts()) : while (have_posts()) : the_post();
		$banner_image = '';
		if (has_post_thumbnail( get_the_ID() ) ){
			$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );
		} $post_id[] = get_the_id();?>
        <div class="banner blog_single" style="background-image:url(<?php echo $banner_image[0];?>);background-color:<?php echo get_field('banner_background_color'); ?>;background-size:<?php echo get_field('banner_background_image_size'); ?>;">
            <div class="overlay"></div>
            <div class="banner_heading">
                <div class="banner_inner_bg">
                	<div class="banner_text">
                     <h4>Resources</h4>
                    	 <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <div class="container"><?php
                $category = ' ';
                $category = get_the_terms(get_the_ID(), 'resources-category' );
                if($category){?>
                    <div class="post_category">
                        <ul><?php
                            $list = array();
							$name = array();
							$link = array();
                            foreach ( $category as $cat ){
                                $list[] = $cat->slug;
								$name[] = $cat->name;
								$link[] = get_term_link( $cat->term_id );?>
                              <!--  <li><a href="<?php echo get_term_link( $cat->term_id );?>"><?php echo $cat->name;?> </a></li>--><?php
                            }?>
                        </ul>
                    </div>	<?php
                }?>
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
                            <a property="item" typeof="WebPage" title="Go to Resources." href="<?php echo esc_url( home_url( '/' ) ); ?>resources" class="post post-page">			
                                <span property="name">Resources</span>
                            </a>
                            <meta property="position" content="2">
    
                        </span><?php
						if($category){?>
                         <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to <?php echo $name[0];?>." href="<?php echo $link[0]; ?>" class="post post-page">			
                                <span property="name"><?php echo $name[0];?></span>
                            </a>
                            <meta property="position" content="3">
    
                        </span><?php
						}?>
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name"><?php echo get_the_title(get_the_ID());?></span>
                            <meta property="position" content="5">
                        </span>
                      </div>
				
				
				
				
				
				<?php
				 //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bread-crumb') ) : endif;?>
                	 <?php /*?><nav>
                        <div class="nav-wrapper">
                          <div class="col s12">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb">Home</a>
                            <a href="<?php echo get_permalink_by_slug('resource'); ?>" class="breadcrumb">Resources</a>
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
                        
                        <?php the_content();?>
                        </div>
                    </div>
                </div>
                
            </div>
       </div><?php
	  global $query;
		$tax_queries[] = array(
    	array (
    		'taxonomy' => 'resources-category',
    		'terms' => $list,
    		'field' => 'slug'
    	)
		);
	  $args = array(
			'post_type' 		=> 'resources',
			'posts_per_page' 	=> 3,
			'post_status' 		=> 'publish',
			'orderby'			=> 'rand',
			'tax_query' => $tax_queries,
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
                            <h2 class="section_title">Related Resources</h2>
                        </div>
                        <!-- blog all post -->
                        <div class="blog_all_post col l12 m12 s12"><?php
                            while ( $loop->have_posts() ) : $loop->the_post(); global $post;?>
                                <div class="col l4 m4 s12">
                                    <div class="blog_all_inner">
                                        <div class="blog_post_img">
                                            <?php /*?><div class="blog_info">
                                            	<span class="date"><?php the_time('j') ?></span>
                                            	<span class="month"><?php the_time('M') ?></span>
                                        	</div><?php */?><?php
                                        	$terms = get_the_terms( $post->ID, 'resources-category' );
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
												<img src="<?php echo $image[0];?>" width="<?php echo $image[1];?>" height="<?php echo $image[2];?>" alt="<?php echo get_the_title(get_the_ID());?>" ><?php
											}
											else{?>
												<a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_empty_img.jpg" alt="<?php echo get_the_title(get_the_ID());?>" ></a>
											<?php
											}?>
                                        </div>
                                        <div class="blog_post_details">
                                            <h2 class="blog_post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2><?php
											if($cat_link){?>
                                            	<span><?php echo implode(', ',$cat_link);?></span><?php
											}?>
                                            <?php the_excerpt();?>
                                        </div>
                                    </div>
                                </div><?php
                            endwhile;wp_reset_query();?>
                        </div>
                    </div>
                </div>
           </div><?php
	   }
	endwhile; endif;get_footer(); ?>