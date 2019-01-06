<?php
add_action( 'wp_ajax_filter_blog_post', 'filter_blog_post' );
add_action( 'wp_ajax_nopriv_filter_blog_post', 'filter_blog_post' );

function filter_blog_post() {
	$page = '';
	if( isset( $_POST['paged'] ) ) {
		$page = $_POST['paged'];
	}
	
	$filter_1 = '';
	$filter_2 = '';
	if( isset( $_POST['filtering_1'] ) ) {
		$filter_1 = $_POST['filtering_1'];
	}
	 ?>
	<div class="blog_post_list">
		<?php load_blog_post( $page, $filter_1 );  
		
	wp_die();
}
add_action( 'wp_ajax_load_blog_post', 'load_blog_post' );
add_action( 'wp_ajax_nopriv_load_blog_post', 'load_blog_post' );

function load_blog_post( $page = '', $filter_1 = '', $filter_2 = '') {
	global $wpdb;
	$tax_query = '';
//	$page = '';
//echo $opt_val;
	if( isset( $_POST['paged'] ) ) {
		$page = $_POST['paged'];
	}
	if( isset( $_POST['filtering_1'] )  ) {
	$filter_1 = $_POST['filtering_1'];
		
	}
	
	
	
	if( $filter_1 ) {
		$tax_query = array(
			array(
				'taxonomy' 	=> 'category',
				'field' 	=> 'slug',
				'terms' 	=> array($filter_1)
			)
		);
	}
	
	


	$args = array(
		'post_type' 		=> 'post',
		'posts_per_page' 	=> 7,
		'post_status' 		=> 'publish',
 		'paged'				=> $page,
		//'offset'     		=> $offset,
 		'orderby'			=> 'date',
		'order'				=> $order,
		'tax_query' 		=> $tax_query,
 	);
			
    $loop = new WP_Query( $args );
	//echo '<pre>';print_r($loop);
	$total_page = $loop->max_num_pages;
   $post_count = $loop->found_posts;
	if($loop->found_posts > 0) {
		$i = 1;
		$row = 1;
		$total_posts = $loop->found_posts;
		while ( $loop->have_posts() ) : $loop->the_post(); global $post;
			$category = ' ';
			$category = get_the_terms( $post->ID, 'category' );
			if($category){
				$cat_arr = ' ';
				$cat_arr = array();
				$cat_link = array();
				foreach ( $category as $cat ){
					//$cat_arr[] = $cat->name;
					 $cat_link[]='<a href="' . get_term_link( $cat->term_id ) . '" ">' . $cat->name .'</a>';
					
				}
            }
			if($i==1 ||$i%7==1){
				if (has_post_thumbnail( $post->ID ) ){
					$featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
					$featured_img_box = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '354_195_img' );
				}?>
                <div class="col l12 m12 s12 blog_post_top">
                    <div class="col l7 m7 s12 left" <?php if($featured_img[0]){?>style="background-image:url(<?php echo $featured_img[0];?>);"<?php }?>>
                    	<div class="blog_info">
                    		<span class="date"><?php the_time('j') ?></span>
                    		<span class="month"><?php the_time('M') ?></span>
                    	</div>
                    </div>
                    <div class="col l5 m5 s12 right">
                        <div class="inner_padding">
                        	<h2 class="post_title"><a href="<?php the_permalink();?>"><?php the_title(); echo $i?></a></h2>
                            
                        	<span><?php echo implode(", ",$cat_link);?><!--<a href="#"><?php //echo implode(", ",$cat_arr);?></a>--></span>
                        		<?php the_excerpt();
								//print_r($cat_link);?>
                            <div class="read_more_blog">
                            	<a href="<?php the_permalink();?>" class="btn orange_bg z-depth-1">Read More</a>
                            	<div class="comments">
                                 <span><?php comments_popup_link('No Comments &#187;', '<i class="fa fa-comments"></i> 1 ', '<i class="fa fa-comments"></i> %  '); ?></span>
                            		<!--<span><a href="#"><i class="fa fa-comments"></i>12</a></span>-->
                            	</div>	
                            </div>
                        </div>
                    </div>
                </div><?php
				$row = 1;
			}
			else{
					if($i==2 ||$i%7==2){?>
                    	<!-- blog all post -->
                    	<div class="blog_all_post col l12 m12 s12"><?php
                    }?>
                    <div class="col l4 m4 s12">
                        <div class="blog_all_inner">
                            <div class="blog_post_img">
                                <div class="blog_info">
                                	<span class="date"><?php the_time('j') ?></span>
                                	<span class="month"><?php the_time('M') ?></span>
                                </div><?php
								if (has_post_thumbnail( $post->ID ) ){
									$featured_img_box = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '354_195_img' );?>
                            		<img src="<?php echo $featured_img_box[0];?>" width ="<?php echo $featured_img_box[1];?>" height="<?php echo $featured_img_box[2];?>" alt="" ><?php
								}?>
                            </div>
                            <div class="blog_post_details">
                            	<h2 class="blog_post_title"><a href="<?php the_permalink();?>"><?php the_title(); echo $i?></a></h2>
                            	<span><?php echo implode(", ",$cat_link);?></span>
                            	<?php the_excerpt();?>
                                <div class="read_more_blog">
                                	<div class="comments">
                                     <span><?php comments_popup_link('No Comments &#187;', '<i class="fa fa-comments"></i> 1 ', '<i class="fa fa-comments"></i> %  '); ?></span>
                                		<!--<span><a href="#"><i class="fa fa-comments"></i>12</a></span>-->
                                	</div>	
                                </div>
                            </div>
                        </div>
                    </div><?php
                    if($i==$total_posts ||$i%7==0){	?>
                    	</div><?php 
					}
							
			}
			
			$row++;
			$i++;
		endwhile;
		wp_reset_query();
	} else {
		echo '<h3>Nothing found!</h3>';	
	}

 	if($post_count>7) {
		$post_count = $post_count - 7;
		$total_no_pages = ceil($post_count/7)+1;
	} 
	else {
		$total_no_pages = 1;
	}

		
	
	if( isset( $_POST['type'] ) && $_POST['type'] == 'filter' ) { ?>
    	</div>
		<input type="hidden" name="hidden_total_page" id="hidden_total_page" value="<?php echo $total_no_pages; ?>" />
        
        <div class="load_more_bg load_more">
            <a href="javascript:void(0);" class="btn orange_bg z-depth-1 blog_listing" onclick="load_blog_more_posts(1);">LOAD MORE</a>
            
        </div><?php
	}
	//echo $page. '==' .$post_count;
	if( isset( $_POST['type'] ) && $_POST['type'] == 'load_more' ) {
			if( $page == $total_page ) { ?>
				{load_more_status}=hide<?php
			} else if ($post_count ==0) { ?>
				{load_more_status}=hide<?php
			} else { ?>
				{load_more_status}=show<?php
			}
		wp_die();
	}
}?>