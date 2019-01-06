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
      <div class="container">
        <div class="row">

          <ul class="portfolio-sorting list-inline text-center">
            <li><a href="#" data-group="all" class="active">All</a></li>
            <li><a href="#" data-group="people">People</a></li>
            <li><a href="#" data-group="simpsons">Simpsons</a></li>
            <li><a href="#" data-group="futurama">Futurama</a></li>
          </ul> <!--end portfolio sorting -->

          <ul class="portfolio-items list-unstyled" id="grand">

            <li class="col-md-4  portfolio-item1" data-groups='["people"]'>
              <figure class="portfolio-item">
                <a href="#">
                  <img src="http://lorempixel.com/700/400/people/1" alt="Item 1" class="img-responsive">
                </a>
              </figure>
            </li>

            <li class="col-md-4  portfolio-item1" data-groups='["people"]'>
                <figure class="portfolio-item">
                    <a href="#">
                        <img src="http://lorempixel.com/700/400/people/7" alt="" class="img-responsive">
                        <figcaption>Fig1</figcaption>
                    </a>
                </figure>
            </li>

           <li class="col-md-4  portfolio-item1" data-groups='["futurama"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/futurama/700/400/1" alt="" class="img-responsive">
                      <figcaption>Fig1</figcaption>
                  </a>
              </figure>
            </li>

            <li class="col-md-4  portfolio-item1" data-groups='["futurama"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/futurama/700/400/2" alt="" class="img-responsive">
                      <figcaption>Fig1</figcaption>
                  </a>
              </figure>
            </li>

            <li class="col-md-4  portfolio-item1" data-groups='["simpsons", "people"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/simpsons/700/400/1" alt="" class="img-responsive">
                      <figcaption>Fig1</figcaption>
                  </a>
              </figure>
            </li>

            <li class="col-md-4  portfolio-item1" data-groups='["simpsons"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/simpsons/700/400/3" alt="" class="img-responsive">
                      <figcaption>Fig1</figcaption>
                  </a>
              </figure>
            </li>

            <li class="col-md-4  portfolio-item1" data-groups='["people"]'>
                <figure class="portfolio-item">
                    <a href="#">
                        <img src="http://lorempixel.com/700/400/people/9" alt="" class="img-responsive">
                        <figcaption>Fig1</figcaption>
                    </a>
                </figure>
            </li>

             <li class="col-md-4  portfolio-item1" data-groups='["simpsons"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/simpsons/700/400/4" alt="" class="img-responsive">
                      <figcaption>Fig1</figcaption>
                  </a>
              </figure>
            </li>

            <li class="col-md-4  portfolio-item1" data-groups='["futurama"]'>
              <figure class="portfolio-item">
                  <a href="#">
                      <img src="http://lorempicsum.com/futurama/700/400/5" alt="" class="img-responsive">
                      <figcaption>Fig1</figcaption>
                  </a>
              </figure>
            </li>


            <!-- sizer -->
            <li class="col-md-4 col-sm-4 col-xs-6 shuffle_sizer"></li>

            
          </ul> <!--end portfolio grid -->


          </div> <!--end row -->
        </div> <!-- end container-->
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