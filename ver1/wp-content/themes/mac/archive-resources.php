<?php get_header(); 
	$data = get_post_meta($page_id); ?>
      <?php include (TEMPLATEPATH . '/modules/page-title.php' ); ?>
      <input type="hidden" name="hidden_event_cat" id="hidden_event_cat" value="" />
        <div class="blog_filter">
            <div class="container">
                <div class="row">
                	<div class="blog_filter_right">
                    	<label>Select Category:</label>
                    	<div class="custom_select"><?php
							$prod_categories = get_terms( 'resources-category', array(
        						'orderby'    => 'name',
        						'order'      => 'ASC',
        						'hide_empty' => true
    						));
							if($prod_categories){?>
                                <select  class="" onchange="rec_page_post_filter(this);">
                                    <option value="all_cat_post">ALL</option><?php
                                     foreach( $prod_categories as $prod_cat ) {
                                        //print_r($category);?>
                                        <option value="<?php echo $prod_cat->slug;?>"><?php echo $prod_cat->name;?></option><?php
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
					<div class="rec_post_list"><?php load_rec_post( 1, '', '');?></div>
                <div class="load_more">
               
                    <a href="javascript:void(0);" class="btn orange_bg z-depth-1 rec_listing" onclick="load_rec_more_posts(1);">load more</a>
                </div>
                 
			</div>
		</div>
	</div>


<?php get_footer(); ?>
