<?php get_header(); ?>

	<?php 
	$page_slug ='case-studies';
	$page_data = get_page_by_path($page_slug);

 $pager = get_page_by_title( 'Case Studies' );

	
	$page_id = $page_data->ID;
	$datam = get_post_meta($page_id);
	$post_id = array();
	if (have_posts()) : while (have_posts()) : the_post();
		$banner_image = '';
		if (has_post_thumbnail( get_the_ID() ) ){
			$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );
		} $post_id[] = get_the_id();?>
        <div class="banner blog_single" style="background-image:url(<?php echo $banner_image[0];?>);background-color:<?php echo get_field('banner_background_color'); ?>;">
            <div class="overlay"></div>
            <div class="banner_heading">
                <div class="banner_inner_bg">
                	<div class="banner_text">
                    <h4></h4>
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
                            <a property="item" typeof="WebPage" title="Go to Resources." href="<?php echo esc_url( home_url( '/' ) ); ?>about-us" class="post post-page">			
                                <span property="name">About Us</span>
                            </a>
                            <meta property="position" content="2">
    
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Tutorials." href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/case-studies" class="post post-page">			
                                <span property="name">Case Studies</span>
                            </a>
                            <meta property="position" content="3">
    
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name"><?php echo get_the_title(get_the_ID());?></span>
                            <meta property="position" content="3">
                        </span>
                      </div><?php
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
       <!-- blog single -->
       <div class="blog_single_content white">
       		<div class="container">
            	<div class="row">
                	<div class="col s12">
                        <div class="content-format">
                        <?php the_content();?>
                        <hr class="cs-hr"><?php
						echo apply_filters('the_content', $pager->post_content);?>
                          
                        </div>
                      
                    </div>
                </div>
                
            </div>
       </div><?php
	  	global $query;
	  $tax_queries[] = array(
		  array (
			  'taxonomy' => 'script-category',
			  'terms' => $list,
			  'field' => 'slug'
		  )
		);
	  	$args = array(
			'post_type' 		=> 'case-studies',
			'posts_per_page' 	=> 3,
			'post_status' 		=> 'publish',
			'orderby'			=> 'rand',
			//'tax_query' => $tax_queries,
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
                            <h2 class="section_title">Related Case Study</h2>
                        </div>
                        <!-- blog all post -->
                        <div class="blog_all_post col l12 m12 s12"><?php
                            while ( $loop->have_posts() ) : $loop->the_post(); global $post;?>
                                <div class="col l4 m4 s12">
                                    <div class="blog_all_inner">
                                        <div class="blog_post_img">
                                           <?php
											$image = '';
											if (has_post_thumbnail(get_the_ID()) ){
												$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), '354_195_img' );?>
												<img src="<?php echo $image[0];?>" width="<?php echo $image[1];?>" height="<?php echo $image[2];?>" alt="<?php echo get_the_title(get_the_ID());?>" ><?php
											}
											else{?>
												<a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_empty_img.jpg" alt="<?php echo get_the_title(get_the_ID());?>" ></a><?php
											}?>
                                        </div>
                                        <div class="blog_post_details">
                                            <h2 class="blog_post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2><?php
											if($cat_link){?>
                                            	<span><?php echo implode(', ',$cat_link);?></span><?php
											} 
											the_excerpt();?>
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