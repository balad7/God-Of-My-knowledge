<?php 
/**
 * Template Name: Resource Archive
 *
 * @package WordPress
 * @subpackage project name
 */
get_header(); 
	$data = get_post_meta($page_id); ?>
       <?php include (TEMPLATEPATH . '/modules/page-title.php' ); ?>
      <input type="hidden" name="hidden_event_cat" id="hidden_event_cat" value="" />
        
       <div class="blog_post blog_equal white">
       		<div class="container">
            	<div class="row rec_section">
					<div class="rec_post_list">
                   <?php $args = array(
					'post_type' 		=> 'resources',
					'posts_per_page' 	=> -1,
					'post_status' 		=> 'publish',
 					'orderby'			=> 'date',
					'order'				=> 'DESC',
					'meta_query' => array(
						array(
							'key' => 'move_to_archive', 
							'value' => 'yes', 
							'compare' => 'LIKE' ) )
	
 					);
			
    $loop = new WP_Query( $args );
	//echo '<pre>';print_r($loop);
	$total_page = $loop->max_num_pages;
   $post_count = $loop->found_posts;
	if($loop->found_posts > 0) {
		$i = 1;
		$row = 1;
		$total_posts = $loop->found_posts;
		$count = $loop->post_count;
		while ( $loop->have_posts() ) : $loop->the_post(); global $post;
			$category = ' ';
			$category = get_the_terms( get_the_ID(), 'resources-category' );
			if($category){
				$cat_arr = ' ';
				$cat_arr = array();
				$cat_link = array();
				foreach ( $category as $cat ){
					//print_r($cat);
					//$cat_arr[] = $cat->name;
					 $cat_link[]='<a href="' . get_term_link( $cat->term_id ) . '" ">' . $cat->name .'</a>';
					
				}
            }
			if($i==1 && $page == 1){
				if (has_post_thumbnail( $post->ID ) ){
					$featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
					$featured_img_box = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '354_195_img' );
				}?>
                <div class="col l12 m12 s12 blog_post_top"><?php
				if (has_post_thumbnail( $post->ID ) ){?>
                    <div class="col l7 m7 s12 left" <?php if($featured_img[0]){?>style="background-image:url(<?php echo $featured_img[0];?>);"<?php }?>><?php
				}
				else{?>
						<div class="col l7 m7 s12 left" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/blog_empty_img_large.jpg);"><?php
					}?>
					
                    	<?php /*?><div class="blog_info">
                    		<span class="date"><?php the_time('j') ?></span>
                    		<span class="month"><?php the_time('M') ?></span>
                    	</div><?php */?>
                    </div>
                    <div class="col l5 m5 s12 right">
                        <div class="inner_padding">
                        	<h2 class="post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <?php
							
							if($cat_link){?>
                        	<span><?php echo implode(", ",$cat_link);?><!--<a href="#"><?php //echo implode(", ",$cat_arr);?></a>--></span><?php
							}?>
                        		 <br /><?php the_excerpt();
								//print_r($cat_link);?>
                            <div class="read_more_blog">
                            	<a href="<?php the_permalink();?>" class="btn orange_bg z-depth-1">Read More</a>
                            		
                            </div>
                        </div>
                    </div>
                </div><?php
				$row = 1;
			}
			else{
					if($page== 1 && $i==2){?>
                    	<!-- blog all post -->
                    	<div class="blog_all_post col l12 m12 s12 resource_blog_post"><?php
                    }?>
                    <div class="col l4 m4 s12">
                        <div class="blog_all_inner">
                            <div class="blog_post_img">
                               <?php /*?> <div class="blog_info">
                                	<span class="date"><?php the_time('j') ?></span>
                                	<span class="month"><?php the_time('M') ?></span>
                                </div><?php */?><?php
								$category = ' ';
								$category = get_the_terms( get_the_ID(), 'resources-category' );
								if($category){
									$cat_arr = ' ';
									$cat_arr = array();
									$cat_link = array();
									foreach ( $category as $cat ){
										//print_r($cat);
										//$cat_arr[] = $cat->name;
										 $cat_link[]='<a href="' . get_term_link( $cat->term_id ) . '" ">' . $cat->name .'</a>';
										
									}
								}
								if (has_post_thumbnail( get_the_ID() ) ){
									$featured_img_box = wp_get_attachment_image_src( get_post_thumbnail_id(  get_the_ID() ), '354_195_img' );?>
                            		<a href="<?php the_permalink();?>"><img src="<?php echo $featured_img_box[0];?>" width ="<?php echo $featured_img_box[1];?>" height="<?php echo $featured_img_box[2];?>" alt="<?php echo get_the_title(get_the_ID());?>" ></a><?php
								}
								else{?>
								<a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_empty_img.jpg" alt="<?php echo get_the_title(get_the_ID());?>" ></a>
								<?php
								}?>
                            </div>
                            <div class="blog_post_details">
                            	<h2 class="blog_post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2><?php
								
								if($cat_link){?>
                            		<span><?php echo implode(", ",$cat_link);?></span><?php
								}?>
                            	<p><?php echo littlecontent(10);?></p>
                               
                            </div>
                        </div>
                    </div><?php
                    if($page == 1 && $i == $count){		?>
                    	</div><?php 
					}
							
			}
			
			$row++;
			$i++;
		endwhile; ?>
		<input type="hidden" name="max" id="max" value="<?php echo $total_page;?>"/><?php
		wp_reset_query();
	} else {
		echo '<h3>Nothing found!</h3>';	
	}?>
                    </div>
               
                 
			</div>
		</div>
	</div>

<?php get_footer(); ?>
