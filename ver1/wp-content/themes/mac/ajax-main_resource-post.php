<?php
add_action( 'wp_ajax_filter_rec_main_post', 'filter_rec_main_post' );
add_action( 'wp_ajax_nopriv_filter_rec_main_post', 'filter_rec_main_post' );

function filter_rec_main_post() {
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
	<div class="blog_rec_main_list">
		<?php load_rec_main_post( $page, $filter_1 );  
		
	wp_die();
}
add_action( 'wp_ajax_load_rec_main_post', 'load_rec_main_post' );
add_action( 'wp_ajax_nopriv_load_rec_main_post', 'load_rec_main_post' );

function load_rec_main_post( $page = '', $filter_1 = '', $filter_2 = '') {
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
				'taxonomy' 	=> 'resources-category',
				'field' 	=> 'slug',
				'terms' 	=> array($filter_1)
			)
		);
	}
	
	
	if( $page == 1 ) {
		$post_per_page = 7;
		$offset = ($page - 1) * $post_per_page;
	} else {
		$post_per_page = 6;
		$offset = ($page - 1) * $post_per_page;
		$offset = $offset + 1;
	}

	$args = array(
		//'post_type' 		=> 'resources','',
		'post_type' => array('resources', 'tutorial'),
		'posts_per_page' 	=> $post_per_page,
		'post_status' 		=> 'publish',
 		'paged'				=> $page,
		'offset'     		=> $offset,
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
		$count = $loop->post_count;
		while ( $loop->have_posts() ) : $loop->the_post(); global $post;
			$category = ' ';
			if ( get_post_type( get_the_ID() ) == 'resources' ) {
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
                        <div class="inner_padding"><?php
							if ( get_post_type( get_the_ID() ) == 'resources' ) {
								if($cat_link){?>
								<span><?php echo implode(", ",$cat_link);?><!--<a href="#"><?php //echo implode(", ",$cat_arr);?></a>--></span><?php
								}
							}?>
                             <br />
                        		<?php the_excerpt();
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
		<?php /*?><input type="hidden" name="max" id="max" value="<?php echo $total_page;?>"/><?php */?><?php
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
            <a href="javascript:void(0);" class="btn orange_bg z-depth-1 rec_main_listing" onclick="load_rec_more_posts(1);">LOAD MORE</a>
            
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
}