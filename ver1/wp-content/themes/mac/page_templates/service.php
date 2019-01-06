<?php
/**
 * Template Name: Service
 *
 * @package WordPress
 * @subpackage project name
 */

get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();
		
		$titan = TitanFramework::getInstance( 'mac' ); 
		$data = get_post_meta($post->ID); 
		$post_id = get_the_ID();
		$values = get_field('hire_section_title',get_the_ID());
		/*$post = get_post($post_id); 
		$slug = $post->post_name;*/
		
		//$encoded = urlencode( base64_encode(get_the_title(get_the_ID())) );
		$encoded = get_the_title(get_the_ID());
		 if (has_post_thumbnail( $post->ID ) ){
             $banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
		 }?>
		<!-- banner -->
        <div class="banner services_banner" style="background-image:url(<?php echo $banner_image[0];?>); background-color:<?php echo $data['service_header_background_color'][0];?>;">
            <div class="container">
                <div class="row">
                    <div class="banner_inner_bg"><?php
					 if($data['saervices_page_tagline'][0] || $data['services_title'][0] || $data['hire_icon'][0] || $data['hire_section_title'][0] || $data['hire_button_text'][0] || !empty( $post->post_content)){?>
                        <div class="banner_text"><?php 
							 if($data['saervices_page_tagline'][0]){
								echo '<'.$data['tagline_h_tag'][0].' '.'class="banner_title_small">'.$data['saervices_page_tagline'][0].'</'.$data['tagline_h_tag'][0].'>';
							 }
							 if($data['services_title'][0]){
								echo '<'.$data['title_h_tag'][0].' '.'class="banner_title">'.$data['services_title'][0].'</'.$data['title_h_tag'][0].'>';
							 }
							 ?>
                             
                            <div class="services_banner_info"><?php
								if($data['service_section_1_description'][0]){?>
                                    <div class="services_banner_info_left" >
                                       <?php echo $content = apply_filters(the_content,$data['service_section_1_description'][0]);?>
                                    </div><?php
								}?>
                                <div class="services_banner_info_right">
                                	<div class="services_banner_info_right_inner"><?php
										if(isset($data['hire_icon'][0])) {
											$hire_icon_arr = wp_get_attachment_image_src( $data['hire_icon'][0], '' );
			
										}
										if($hire_icon_arr[0]){?>
                                            <div class="wp_user_icon">
                                                <img src="<?php echo $hire_icon_arr[0];?>" width="<?php echo $hire_icon_arr[1];?>" height="<?php echo $hire_icon_arr[2]?>" alt="<?php echo $data['hire_section_title'][0]; ?>">
                                            </div><?php
										}
										if(isset($data['hire_section_title'][0])){
											if($data['hire_section_title'][0]){?>
												<h6 class="banner_service_title"><?php echo $data['hire_section_title'][0];?></h6><?php
											}
										}
										if(isset($data['hire_description'][0])){
											if($data['hire_description'][0]){?>
                                        		<p><?php echo $data['hire_description'][0];?></p><?php
											}
										}
										
										 if(isset($data['hire_button_text'][0])){
											if($data['hire_button_text'][0]){
												if(isset($data['service_model_form'][0]) && $data['service_model_form'][0] != ""){?>
                                        		<a class="btn modal-trigger" href="#modal-service"><?php echo $data['hire_button_text'][0];?></a><?php }else{?>
                                                <a <?php if($data['hire_button_url'][0]){?>href="<?php echo $data['hire_button_url'][0];?><?php /*?>?post_title=<?php echo $encoded;?><?php */?>"<?php } ?> class="btn orange_bg z-depth-1"><?php echo $data['hire_button_text'][0];?></a><?php
													
												}
											}
										}?>
                                    </div>
                                </div>
                            </div>
                        </div><?php
					 }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb_bg white">
        	<div class="container">
            	<div class="row"><?php
					 	 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bread-crumb') ) : endif;?>
                	 <?php /*?><nav>
                        <div class="nav-wrapper">
                          <div class="col s12">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb">Home</a>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/tutorials" class="breadcrumb">Tutorials</a>
                            <span class="breadcrumb"><?php the_title();?></span>
                          </div>
                        </div>
                      </nav><?php */?>
                </div>
            </div>
        </div>
        <div class="section_nav"><?php
			if($data['section_1_tab_title'][0] || $data['section_2_tab_title'][0] || $data['section_3_tab_title'][0] || $data['section_4_tab_title'][0] ||$data['section_5_tab_title'][0]){?>
                <div class="container">
                    <div class="row">
                        <div class="col l12">
                            <ul><?php
                                if($data['section_1_tab_title'][0]){?>
                                    <li><a href="#why_wordpress"><?php echo $data['section_1_tab_title'][0];?></a></li><?php
                                }
                                if($data['section_2_tab_title'][0]){?>
                                    <li><a href="#our_expertise"><?php echo $data['section_2_tab_title'][0];?></a></li><?php
                                }
                                if($data['section_3_tab_title'][0]){?>
                                    <li><a href="#wp_services"><?php echo $data['section_3_tab_title'][0];?></a></li><?php
                                }
                                if($data['section_4_tab_title'][0]){?>
                                    <li><a href="#why_us"><?php echo $data['section_4_tab_title'][0];?> </a></li> <?php
                                }
                                if($data['section_5_tab_title'][0]){?>
                                    <li><a href="#faq"><?php echo $data['section_5_tab_title'][0];?> </a></li><?php
                                }?>
                            </ul>
                        </div>
                    </div>
                </div><?php
			}?>
        </div>
        <!-- expertise -->
        <div class="service_top white relative_1 relative" id="why_wordpress">
            <div class="container">
                <div class="row">
                    <div class="col l12">
                        <div class="service_top_text"><?php
						if( !empty( $post->post_content)){?>
                                    <article class="section_title content-format ">
                                    <?php the_content();?>
                                     </article><?php  
								
						}?>
                        <div class="service_top_read_more">
                            <a href="javascript:void(0)"><span class="arrow_icon"></span><div class="textsss">READ MORE</div></a>
                        </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
        
        <!-- our team -->
        <?php 
		$rows = get_field('service_statistics');//Repeater field
		if(isset($data['section_2_background_image'][0])) {
			$section_2_background_image_arr = wp_get_attachment_image_src( $data['section_2_background_image'][0], '' );
			
		}
		if($rows || $data['section_2_background_image'][0]) {?>
            <div class="our_team white-text service_team_section relative_2 relative" id="our_expertise" <?php if($section_2_background_image_arr[0]){?>style="background-image:url(<?php echo $section_2_background_image_arr[0];?>);"<?php }?>>
                <div class="overlay"></div><?php
					if($rows){?>
						<div class="our_team_inner">
							<div class="container">
								<div class="row">
                                	<div class="our_team_top col l12 m12 s12 center">                                    
                                        <h2 class="white-text section_title">Our Expertise</h2>                            
                                    </div>
									<div class="our_team_count col l12 m12 s12"><?php
										foreach($rows as $row){?>
											<div class="col l4 m4 s6">
												<div class="div_center"><?php
													if($row['statistics_number']){?>
														<span class="our_team_title"><?php echo $row['statistics_number'];?></span><?php
													}
													if($row['statistics_title']){?>
														<span><?php echo $row['statistics_title'];?></span><?php
													}?>
												</div>
											</div><?php
										}?>
									</div>
								</div>
							</div>
						</div><?php
					}?>
            </div><?php
		}
		$services = get_field('service_blocks');//Repeater field 
		if($services){?>
        	<!--  service middle -->
            <div class="services_middle services_middle_height relative_3 relative" id="wp_services" style="background-color:#f2f2f2;">
                <div class="container">
                    <div class="row"><?php 
                        if($data['section_3_title'][0]){?>
                            <div class="service_middle_top center"><?php
                                if(isset($data['section_3_title'][0])) {?>
                                    <h2 class="section_title"><?php echo $data['section_3_title'][0];?></h2><?php
                                }?>
                            </div><?php
                        }
                        
                        if($services){?>
                            <div class="service_middle_info col l12 s12 m12"><?php
                                foreach($services as $service){
									$logo_image = '';
                                	$logo_image_arr = $service['icon'];
                               	    $logo_image = wp_get_attachment_image_src(  $logo_image_arr['id'], '' );
									//print_r( $logo_image);?>
                                    <div class="col l3 m3 s12">
                                        <div class="service_middle_info_inner"><?php
											if($logo_image[0]){?>
												<img src="<?php echo $logo_image[0];?>" width="90" height="90" alt="<?php get_the_title(get_the_ID());?>"/><?php
											}
										
										
                                            if($service['service_blog_title']){?>
                                                <h6 class="service_middle_text"><?php echo $service['service_blog_title'];?></h6><?php
                                            }
                                            if($service['service_blog_description']){?>
                                                <p><?php echo $service['service_blog_description'];?></p><?php
                                            }?>
                                        </div>
                                    </div><?php
                                }?>
                            </div><?php
                        }?>
                    </div>
                </div>
            </div><?php
		}
		$portfolio_technologies = get_field ('portfolio_technologies');
		
		if($portfolio_technologies || $data['portfolio_title'][0]){?>
        <!-- service recent projects -->
            <div class="services_recent_project white" >
                <div class="container">
                    <div class="row"><?php
						if(isset($data['portfolio_title'][0])) {?>
							<div class="recent_project_top col l12 m12 center"><?php
								if($data['portfolio_title'][0]){?>
									<h2 class="section_title"><?php echo $data['portfolio_title'][0];?></h2><?php
								}?>
							</div><?php
						}
                   	 	$port = array();
						if($portfolio_technologies){
							foreach ($portfolio_technologies as $cat){
								$port[] = $cat->slug;
							
							}
						}
						
                    	$args = array(
                    		'tax_query' => array(
								array(
									'taxonomy' => 'technology',
									'field' => 'slug',
									'terms' => $port
								),
                    		),
							'post_type' => 'portfolio',
							'posts_per_page' => -1,
							'post_status' => 'publish',
							'orderby' => 'menu_order',
							'order' => 'ASC',
                    	);
                    	$loop = new WP_Query( $args );
						$count = $loop->post_count;
                    	if($loop->found_posts > 0) {?>
                            <div class="service_recent_middle col">
                                <div class="<?php if($count>1){?>carousel<?php } else{?> single-slides<?php }?>"><?php
                                	while ( $loop->have_posts() ) : $loop->the_post();
                                	setup_postdata($project);?>
                                    <div class="carousel-item"><?php
                                    	if (has_post_thumbnail($project->ID) ){
                                    		$project_image = wp_get_attachment_image_src( get_post_thumbnail_id( $project->ID ), 'medium' );?>
                                    		<a href="#"><img src="<?php echo $project_image[0];?>" width="<?php echo $project_image[1];?>" height="<?php echo $project_image[2];?>" alt="<?php echo get_the_title($project->ID);?>"></a><?php
                                    	}?>
                                    	<span class="recent_project_title"><?php echo get_the_title($project->ID);?></span>
                                    </div><?php
                                	endwhile; wp_reset_query();?>
                                </div><?php
								if($count>1){?>
                                    <div class="slider_arrow">
                                        <a href="#" class="prev"></a>
                                        <a href="#" class="next"></a>
                                    </div><?php
								}?>
                            </div><?php
                    	}?>
                    </div>
                </div>
            </div><?php
		}
		
		?>
        <!-- why choose us -->
       <?php include (TEMPLATEPATH . '/modules/why-macronimous.php' );
	   if(get_field ('faq_categories')){
		   $faq_categories = get_field ('faq_categories');
					$faq = array();
					if($faq_categories ){
						foreach ($faq_categories as $cat){
							$faq[] = $cat->slug;
							
						}
					}
					$args = array(
						'tax_query' => array(
							array(
								'taxonomy' => 'faq-category',
								'field' => 'slug',
								'terms' => $faq
							 ),
						),
						'post_type' => 'faq',
						'posts_per_page' => -1,
						'post_status' => 'publish',
						'orderby' => 'menu_order',
						'order' => 'ASC',
					);
					$loop = new WP_Query( $args );
					if($loop->found_posts > 0) { ?>
        <!-- faq -->
        <div class="faq white relative_5 relative" id="faq">
        	<div class="container">
            	<div class="row"><?php
					if(isset($data['section_5_tab_title'][0])) {?>
                        <div class="col l12 m12 s12 title_top center"><?php
							if($data['section_5_tab_title'][0]){?>
                            	<h2 class="section_title"><?php echo $data['section_5_tab_title'][0];?></h2><?php
							}?>
                        </div><?php
					}
					
					/*$args = array(
						'tax_query' => array(
							array(
								'taxonomy' => 'faq-category',
								'field' => 'slug',
								'terms' => $faq
							 ),
						),
						'post_type' => 'faq',
						'posts_per_page' => -1,
						'post_status' => 'publish',
						'orderby' => 'menu_order',
						'order' => 'ASC',
					);
					$loop = new WP_Query( $args );
					if($loop->found_posts > 0) {*/?>
                        <div class="faq_inner">
                          <ul class="collapsible" data-collapsible="accordion"><?php
                          	while ( $loop->have_posts() ) : $loop->the_post();?>
                                <li>
                                  <div class="collapsible-header"><?php the_title();?></div>
                                  <div class="collapsible-body content-format">
                                        <?php the_content();?>
                                    </div>
                                </li><?php
                              endwhile; wp_reset_query();?>
                          </ul>
                        </div>
                </div>
            </div>
        </div><?php
					}
	   }?>
        <!-- case studies --><?php
			$post_categories = get_field ('blog_category');
			$category_name = array();
			if($post_categories){
				foreach ($post_categories as $post_cat){
					$category_name[] = $post_cat->term_id;
					/* $cat_link[]='<a href="' . get_term_link( $cat->term_id ) . '" ">' . $cat->name .'</a>';*/
						
				}
		
			//print_r($category_name);	
		$args = array(
		  'post_type' => 'post',
		  'posts_per_page' => 2,
		  'post_status' => 'publish',
		  'orderby' => 'menu_order',
		  'order' => 'ASC',
		  'category__in'=> $category_name,);
		$loop = new WP_Query( $args );
		if($loop->found_posts > 0) {?>
            <div class="case_studies case_studies_height">
                <div class="row">
                    <div class="case_studies_inner"><?php
						while ( $loop->have_posts() ) : $loop->the_post();
							if (has_post_thumbnail( $post->ID ) ){
                                 $blog_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
							}?>
                            <div class="col l6 m6 s12" <?php if($blog_image[0]){?>style="background-image:url(<?php echo $blog_image[0];?>);"<?php }?>>
                                <div class="overlay"></div>
                                <div class="case_studies_text">
                                    <h6 class="case_studies_title">BLOG on <a href="">wordpress</a></h6>
                                    <h2 class="case_studies_subtitle"><?php the_title();?></h2>
                                    <a href="<?php the_permalink();?>" class="btn z-depth-1">Read More</a>
                                </div>
                            </div><?php
						endwhile; wp_reset_query();?>
                        
                    </div>
                </div>
            </div>	<?php
		}
			}?>
    	  <!-- about content text -->
          
         <!-- <a class="btn modal-trigger" href="#modal1">Modal</a>-->
		  
        <div id="modal-service" class="modal services_form"><a href="#" class="close_form">x</a><?php
			$form_shortcode = '[contact-form-7 id="4915" title="Hire Us - Lightbox"]';
			echo do_shortcode( $form_shortcode ); ?>
                <!--<div class="title"><h3>Form title</h3><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p></div><div class="services_form_inner">
                
                <form>
                    <div class="textbox">
                        <input type="text" name="name" placeholder="Name" />
                    </div>
                    <div class="textbox">
                        <input type="email" name="email" placeholder="Email ID" />
                    </div>
                    <div class="textbox">
                        <select>
                            <option>Duration</option>
                            <option value="3month">3 months</option>
                            <option value="6month">6 months</option>
                            <option value="1year">1 year</option>
                            <option value="1+years">1+ years</option>
                            <option value="Not-sure">Not sure</option>
                        </select>
                    </div>
                    <div class="textbox">
                        <select>
                            <option>Employee Experience</option>
                            <option value="1">1 year</option>
                            <option value="2">2 years</option>
                            <option value="3">3 years</option>
                            <option value="5">5 years</option>
                            <option value="10">10 years</option>
                        </select>
                    </div>
                    <div class="textbox">
                        <textarea placeholder="More details"></textarea>
                    </div>
                    <input type="submit" name="" value="submit" />
                </form>
            </div>-->
        </div>
                     
		  <?php 
endwhile; endif; 
get_footer(); ?>