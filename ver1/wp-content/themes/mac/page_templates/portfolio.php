<?php
/**
 * Template Name: Portfolio
 *
 * @package WordPress
 * @subpackage project name
 */

get_header();
	if (have_posts()) : while (have_posts()) : the_post();
		if (has_post_thumbnail( $post->ID ) ){
			$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
		} ?>
        <div class="banner about_us_banner" <?php if($banner_image){?>style="background-image:url(<?php echo $banner_image[0];?>);"<?php }?>>
            	<div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="banner_inner_bg">
                            <div class="banner_text">
                                <h1 class="banner_title"><?php the_title();?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter_title">
        	<div class="container">
            	<div class="portfolio_filter"><?php
				$project_type = get_terms( 'project-type', array(
					'orderby'    => 'name',
					'order'      => 'ASC',
					'hide_empty' => true
                ));
				if($project_type){?>
                      <div class="menu_port proj_port">
                        <!--    Project Type section Starts-->
                        <label>Select Project Type: </label> 
                          <ul class="portfolio-sorting list-inline text-center"><?php
                              $project_type = get_terms( 'project-type', array(
                                  'orderby'    => 'name',
                                  'order'      => 'ASC',
                                  'hide_empty' => true
                              ));
                              if($project_type){
                                  foreach($project_type as $type ){?>
                                      <li><a href="#" class="btn-medium btn-gray" data-group="<?php echo $type->slug;?>" ><div><?php echo $type->name;?></div></a></li><?php
                                  }
                              }?>
                               <li class="reset"><a href="#" class="btn-medium active" data-group="all"><div>RESET</div></a></li>
                          </ul>
                    </div><?php
				}
				$port_categories = get_terms( 
					'technology', array(
					'orderby'    => 'name',
					'order'      => 'ASC',
					'hide_empty' => true
				));
				if($port_categories){?>
                    <div class="menu_port tech_port"> 
                        <!--    Technology section Starts-->
                        <!--<label>Select Technology: </label> -->
                        <ul><?php
                            $port_categories = get_terms( 'technology', array(
                                'orderby'    => 'name',
                                'order'      => 'ASC',
                                'hide_empty' => true
                            ));
							//if($port_categories){
                                // foreach($port_categories as $port_cat ){?>
                                    <!--<li><a href="#<?php //echo $port_cat->slug;?>" class="btn-medium" data-normal="<?php //echo $port_cat->slug;?>" data-hover="<?php //echo $port_cat->slug;?>" style="background-color:<?php //echo get_field('category_color', $port_cat);?>;" data-index ="<?php //echo get_field('category_color', $port_cat);?>"><div><?php //echo $port_cat->name;?></div></a></li>--><?php
                                 //}
                            //}?>
                        </ul>
                    </div><?php
				}?>
            </div>
        </div>
			</div><?php
		$args = array(
			'post_type' => 'portfolio',
			'posts_per_page' => -1,
			'post_status' => 'publish',
			'orderby' => 'menu_order',
			'order' => 'ASC',
		);
		$loop = new WP_Query( $args );
		$count = 1;
		if($loop->found_posts > 0) {?>
        <div class="portfolio_bg_main">
        	<div class="container">
                <div class="row">
                   <div class="gu_shuffle grid_shuffle">
						<ul class="portfolio-items" id="grand"><?php
                            $i= 1;
                             while ( $loop->have_posts() ) : $loop->the_post();
                                $terms = ' ';
                                $terms = get_the_terms( $post->ID, 'technology' );
                                $types = wp_get_object_terms( $post->ID, 'project-type' );
								
							     //$bala = the_terms($post->ID, 'project-type'); 
								  $bala = wp_get_object_terms( $post->ID, 'project-type' );
                                  $j = count($types);
								  $b = $j-1;

								
                                if($terms){
                                    $term_arr = ' ';
                                    $term_arr = array();
                                    $term_color = array();
                                    $mix = array();
                                    foreach ( $terms as $term ){
                                        $term_arr[] = $term->slug;
                                        $term_color[] = get_field('category_color', $term);
                                        $mix[] = $term->name;
                                     }
                                  }
            
                                  if($types){
                                    $type_arr = ' ';
                                    $type_arr = array();
                                    foreach ( $types as $type ){
                                        $type_arr[] =  $type->slug;
										//print_r($type);
										
                                        
                                     }
                                  }
                                   if (has_post_thumbnail( $post->ID ) ){
                                   $full_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
                                   }
                                   /*$mix = array();
                                    if($terms){
                                        foreach ( $terms as $term ){
                                          $mix[] = $term->name;
                                        }
                                    }*/?>
                                   
                               
                                    
                                         <li class="g <?php if($terms){ echo implode(" ",$term_arr); }echo ' ';if($types){echo implode(" ",$type_arr);}?> col-md-4" data-groups='[<?php for($i = 0; $i < $j ; $i++) {
													 
										echo '"'. $types[$i]->slug .'"'; 
										if($i != $b){echo ',';}
				 
									}?>]'>
                                         <?php

										//echo count($types);
										//echo $types[0]->slug;
										// foreach ( $types as $type ){
											// $type['slug']->slug;
                                        //$type_arr[] =  $type->slug;
										//print_r($type);
										
                                        
                                     //}
										
										?>
                                         
                                        <a href="javascript:void(0)" target="_self" data-id="<?php echo $count?>">
                                        
                                            <figure class="portfolio-item">
                                                <div class="port_title">
                                                <h1 class="site_name"><?php the_title();?></h1><?php
                                                if($terms){?>
                                                    <hr <?php if($terms){?>style="background-color:<?php echo $term_color[0];?>;"<?php }?>><?php
                                                }?>
                                                </div><?php 
                                                if (has_post_thumbnail( $post->ID ) ){
                                                    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '267_267_img' );?>
                                                    <img src="<?php echo $featured_image[0]?>" width="<?php echo $featured_image[1];?>" height="<?php echo $featured_image[2];?>" alt="<?php the_title();?>">
                                                    <h6><?php the_title();?></h6><?php
                                                }
                                                if($terms){?>
                                                    <?php /*?><figcaption <?php if($terms){?>style="background-color:<?php echo $term_color[0];?>;"<?php }?> data-background="<?php echo $term_color[0];?>"> <?php
                                                        if($terms){?>
                                                            <div class="tech-list"><?php
                                                                echo '<span>'.implode("</span><span>, ",$mix).'</span>';?> 
                                                            </div><?php
                                                        }?>
                                                    </figcaption><?php */?><?php
                                                }?>
                                            </figure>
                                        </a>
                                         </li>
                                       
                                   
                                <?php $i++; $count++;
                        endwhile; wp_reset_query();?>
                        </ul>
                  
                       </div>
                </div>
        </div>
        </div>
        <!--<div class="port_lightbox">
        	<div class="lightbox_inner">
            	<span class="close_light"></span>
            	<div class="lightbox_div" id="lightbox-1">
                	 <div class="carousel carousel-slider lightbx lightbx1">
                        <div class="carousel-item" >
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg">
                        </div>
                        <div class="carousel-item">
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg">
                        </div>
                      </div>
                      <div class="div">
                          <p class="description">Lorem Ipsum passages, and more recently with (ms sql,msaccxes)</p>
                          <span>MYSQL, RUBY, JSP</span>
                      </div>
                      <span class="prev_light l_control"></span>
                      <span class="next_light l_control"></span>
                </div>
                <div class="lightbox_div" id="lightbox-2">
                	 <div class="carousel carousel-slider lightbx lightbx2">
                        <div class="carousel-item" >
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg">
                        </div>
                        <div class="carousel-item">
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg">
                        </div>
                      </div>
                      <div class="div">
                          <p class="description">Lorem Ipsum passages, and more recently with (ms sql,msaccxes)</p>
                          <span>MYSQL, RUBY, JSP</span>
                      </div>
                      <span class="prev_light l_control"></span>
                      <span class="next_light l_control"></span>
                </div>
                <div class="lightbox_div" id="lightbox-3">
                	 <div class="carousel carousel-slider lightbx">
                        <div class="carousel-item" >
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg">
                        </div>
                        <div class="carousel-item">
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg">
                        </div>
                      </div>
                      <div class="div">
                          <p class="description">Lorem Ipsum passages, and more recently with (ms sql,msaccxes)</p>
                          <span>MYSQL, RUBY, JSP</span>
                      </div>
                      <span class="prev_light l_control"></span>
                      <span class="next_light l_control"></span>
                </div>
                <div class="lightbox_div" id="lightbox-4">
                	 <div class="carousel carousel-slider lightbx">
                        <div class="carousel-item" >
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg">
                        </div>
                        <div class="carousel-item">
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg">
                        </div>
                      </div>
                      <div class="div">
                          <p class="description">Lorem Ipsum passages, and more recently with (ms sql,msaccxes)</p>
                          <span>MYSQL, RUBY, JSP</span>
                      </div>
                      <span class="prev_light l_control"></span>
                      <span class="next_light l_control"></span>
                </div>
            </div>
        </div>-->
		
		<?php
	}
	$args1 = array(
			'post_type' => 'portfolio',
			'posts_per_page' => -1,
			'post_status' => 'publish',
			'orderby' => 'menu_order',
			'order' => 'ASC',
		);
		$loop1 = new WP_Query( $args1 );
		$count = 1;
		if($loop->found_posts > 0) {?>
            <div class="port_lightbox">
                <div class="lightbox_inner">
                	<span class="close_light"></span><?php
                	$a = 1;
					$k = 1;
                	while ( $loop1->have_posts() ) : $loop1->the_post();
                		$terms = ' ';
                		$terms = get_the_terms(get_the_ID(), 'technology' );
                		$types = get_the_terms( get_the_ID(), 'project-type' );
                		if($terms){
                			$term_arr = ' ';
                			$term_arr = array();
                			$term_color = array();
                			$mix = array();
                			foreach ( $terms as $term ){
                				$term_arr[] = $term->slug;
                				$term_color[] = get_field('category_color', $term);
                				$mix[] = $term->name;
                			}
                		}
                
                		if($types){
                			$type_arr = ' ';
                			$type_arr = array();
                			foreach ( $types as $type ){
                				$type_arr[] =  $type->slug;
                
                			}
                		}
                	$rows = get_field('portfolio_gallery',get_the_ID());
                	//if($rows){
					
                		$items = count($rows);
							//foreach ($rows as $gallery){?>
                        <div class="lightbox_div" <?php if(!empty($rows)){?> id="lightbox-<?php echo $a;} ?>">
                        	<div data-value="<?php echo $k; ?>" class="<?php if( $items > 1){?>carousel carousel-slider lightbx lightbx<?php echo $k; ?><?php } else{?>single-slider-image<?php }?>"><?php				if($rows){
								foreach ($rows as $gallery){
									$gallery_image = '';
									$gallery_image_arr = $gallery['gallery_image'];
									$gallery_image = wp_get_attachment_image_src( $gallery_image_arr['id'],'800_400_img');
									if($gallery_image[0]){
									$image_id = pippin_get_image_id($gallery_image);
									$image_thumb = wp_get_attachment_image_src($image_id, '800_400_img');?>
									<div class="<?php if( $items > 1){?>carousel-item<?php } else{?>single-image<?php }?>" >
										<img src="<?php echo $gallery_image[0];?>" width="<?php echo $gallery_image[1];?>" height="<?php echo $gallery_image[2];?>">
									</div><?php
									}
								}
							}?>
                        	</div><?php
							?>
                            <div class="div">
                            	<p class="description"><?php the_title();?></p>
                            	<span><?php if($terms){ echo implode(" ",$term_arr); }?></span>
                            </div>
                            <?php if( $items > 1){?>
                        	<span class="prev_light prev_light<?php echo $k; ?> l_control"></span>
                        	<span class="next_light next_light<?php echo $k; ?> l_control"></span><?php
							}?>
                        </div><?php
							//}
                	//}
                	$a++;
						if($rows){
							if($items > 1){
								$k++;
							}
						}
                	endwhile; wp_reset_query();?>
                </div>
            </div><?php
				
		}

endwhile; endif; get_footer(); ?>