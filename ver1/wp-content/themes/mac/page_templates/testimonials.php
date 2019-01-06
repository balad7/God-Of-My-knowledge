<?php
/**
 * Template Name: Testimonials
 *
 * @package WordPress
 * @subpackage project name
 */

get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();
		$data = get_post_meta($post->ID); ?>
		<!-- banner -->
       <?php include (TEMPLATEPATH . '/modules/page-title.php' ); ?>
    	<div class="container">
            <div class="row"><?php
				$args = array(
					'post_type' => 'testimonial',
					'posts_per_page' => -1,
					'post_status' => 'publish',
					'orderby' => 'menu_order',
					'order' => 'ASC',
				);
				$loop = new WP_Query( $args );
				if($loop->found_posts > 0) {?>
                    <ul class="grid effect-2 testimonial_bg" id="grid" ><?php
                    	while ( $loop->have_posts() ) : $loop->the_post();
                   	 		$testimonial_data = get_post_meta($post->ID);?>
                            <li>
                                <div class="testimonial_text ">
                                   <?php the_content();?>
                                    <span>- <?php the_title(); if($testimonial_data['designation_company_location'][0]){?>,<?php echo $testimonial_data['designation_company_location'][0]; }?> </span>
                                </div>
                            </li><?php
                        endwhile; wp_reset_query();?>
                    </ul><?php
				}?>
            </div>
         </div><?php 
endwhile; endif; 
get_footer(); ?>