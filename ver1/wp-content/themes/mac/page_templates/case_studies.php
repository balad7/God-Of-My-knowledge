<?php
/**
 * Template Name: Case Studies
 *
 * @package WordPress
 * @subpackage project name
 */

get_header(); ?>
 <?php $data = get_post_meta($page_id); ?>
      <?php include (TEMPLATEPATH . '/modules/page-title.php' ); ?>
       <div class="blog_post blog_equal white">
       		<div class="container">
            	<div class="row rec_section">
					<div class="rec_post_list"><?php 
						$total_posts = $wp_query->found_posts;
						if($total_posts >0){
						load_casestudy_post( 1, '', '');
						}else{
							echo '<h3>Nothing found!</h3>';
						}?></div>
               
                 
			</div>
		</div>
	</div>
<?php get_footer(); ?>