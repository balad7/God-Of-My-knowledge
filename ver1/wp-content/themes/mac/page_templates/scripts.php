<?php
/**
 * Template Name: Free Scripts
 *
 * @package WordPress
 * @subpackage project name
 */

get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();
		$data = get_post_meta($post->ID); ?>
		<!-- banner -->
        <?php include (TEMPLATEPATH . '/modules/page-title.php' ); ?>
      <input type="hidden" name="hidden_script_cat" id="hidden_script_cat" value="" />
        <div class="blog_filter">
            <div class="container">
                <div class="row">
                	<div class="blog_filter_right">
                    	<label>Select Category:</label>
                    	<div class="custom_select"><?php
							$script_categories = get_terms( 'script-category', array(
        						'orderby'    => 'name',
        						'order'      => 'ASC',
        						'hide_empty' => true
    						));
							if($script_categories){?>
                                <select  class="" onchange="scr_page_post_filter(this);">
                                    <option value="all_cat_post">ALL</option><?php
                                     foreach( $script_categories as $script_cat ) {
                                        //print_r($category);?>
                                        <option value="<?php echo $script_cat->slug;?>"><?php echo $script_cat->name;?></option><?php
                                    }?>
                                </select><?php
							 }?>
                        </div>
                    </div>
                </div>
            </div>
       </div>
       <div class="blog_post blog_equal white">
       		<div class="container">
            	<div class="row rec_section">
					<div class="rec_post_list"><?php load_scr_post( 1, '', '');?></div>
                <div class="load_more">
                    <a href="javascript:void(0);" class="btn orange_bg z-depth-1 scr_listing" onclick="load_scr_post(1);">load more</a>
                </div>
                 
			</div>
		</div>
	</div>
       <?php 
endwhile; endif; 
get_footer(); ?>