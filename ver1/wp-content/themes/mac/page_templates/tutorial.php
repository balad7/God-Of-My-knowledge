

<?php
/**
 * Template Name: Tutorial  
 *
 * @package WordPress
 * @subpackage project name
 */

get_header(); 
	
	$data = get_post_meta($page_id); ?>
      <?php include (TEMPLATEPATH . '/modules/page-title.php' ); ?>
       <div class="blog_post blog_equal white">
       		<div class="container">
            	<div class="row rec_section">
					<div class="rec_post_list"><?php load_tutorial_post( 1, '', '');?></div>
               
                 
			</div>
		</div>
	</div>

<?php get_footer(); ?> 