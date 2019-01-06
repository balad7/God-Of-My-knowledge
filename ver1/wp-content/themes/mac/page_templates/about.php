<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage project name
 */

get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();
		$data = get_post_meta($post->ID); ?>
		<!-- banner -->
       <?php include (TEMPLATEPATH . '/modules/page-title.php' ); ?>
         <?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
    	  <!-- about content text -->
        <div class="about_content white">
        	<div class="container">
            	<div class="row">
                	<div class="col l12">
                    	<div class="about_content_text content-format">
                        	<?php the_content();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our team -->
        <?php include (TEMPLATEPATH . '/modules/team-stats.php' ); ?>
        <!-- about content text --><?php
		if($data['about_additional_content_description'][0]){?>
            <div class="about_content white">
                <div class="container">
                    <div class="row">
                        <div class="col l12">
                            <div class="about_content_text"><?php 
								echo apply_filters(the_content,$data['about_additional_content_description'][0]);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><?php
		}
		if(isset($data['about_our_process_title'][0]) || isset($data['about_our_process_description'][0])) { ?>
            <!-- about our process -->
            <div class="about_our_process orange">
                <div class="container">
                    <div class="row">
                        <div class="col l12">
                            <div class="about_our_process_inner"><?php
								if($data['about_our_process_title'][0]){?>
                                    <div class="about_our_process_left col l4 m4 s12 equal_height"><?php
                                        if($data['about_our_process_title'][0]){?>
                                            <h2 class="about_inner_page_title"><?php echo $data['about_our_process_title'][0];?></h2><?php
                                        }?>
                                    </div><?php
								}
                                if($data['about_our_process_description'][0]){?>
                                    <div class="about_our_process_right col l8 m8 s12 equal_height"><?php 
										echo apply_filters(the_content,$data['about_our_process_description'][0]);?>
                                    </div><?php
                                }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><?php
		}?>
        <!-- footer -->
        <!-- about our clients -->
        <div class="about_our_clients equal_heights white" id="clients">
        	<div class="container">
            	<div class="row"><?php
					if(isset($data['about_our_process_title'][0])){
						 if($data['about_client_title'][0]){?>
							<div class="about_our_clients_top center ">
								<h2 class="about_inner_page_title"><?php echo $data['about_client_title'][0];?></h2>
							</div><?php
						 }
					}
					$args = array(
						'post_type' => 'our-clients',
						'posts_per_page' => -1,
						'post_status' => 'publish',
						'orderby' => 'menu_order',
						'order' => 'ASC',
				    );
					$loop = new WP_Query( $args );
					if($loop->found_posts > 0) {
						$total_posts = $loop->post_count;?>
                        <div class="about_our_client_logo col l12" ><?php
                            $i = 1;
                            while ( $loop->have_posts() ) : $loop->the_post();
                                if($i==1 || $i%6==1){?>
                                    <div class="about_client_logo"><?php
                                }
                                if (has_post_thumbnail( $post->ID ) ){
                                    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
                                    <div class="col 12 m2 s4">
                                        <img src="<?php echo $featured_image[0];?>" width="<?php echo $featured_image[1];?>" height="<?php echo $featured_image[2];?>" alt="<?php echo get_the_title(get_the_ID());?>">
                                    </div><?php
                                }
                                if($i%6==0 || $i==$total_posts){?>
                                    </div><?php
                                }
                            $i++;
                            endwhile; wp_reset_query();?>
                        </div><?php
					}?>
                </div>
            </div>
        </div><?php 
endwhile; endif; 
get_footer(); ?>