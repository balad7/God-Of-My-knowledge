<?php
/**
 * Template Name: Home Special
 *
 * @package WordPress
 * @subpackage project name
 */

get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();
		$data = get_post_meta($post->ID); ?>
        <div class="page_wrapper_new">
            <div id="myContainer" class="page_wrapper">
                <div class="ms-left"><?php
					if(isset($data['sp_home_section_1_background_image'][0])) {
                		$sp_home_section_1_background_image_arr = wp_get_attachment_image_src( $data['sp_home_section_1_background_image'][0], '' );
                
                	}?>
                            <div class="ms-section section_left" id="left1" data-index="1" data-id="1" style="background-image:url(<?php echo $sp_home_section_1_background_image_arr[0];?>);">
                                <div class="section_left_text"><?php
                                	if($data['sp_home_section_1_background_image_title'][0]){
                                		echo '<'.$data['sp_home_section_1_background_image_title_h_tag'][0].' class= section_new_title>'.$data['sp_home_section_1_background_image_title'][0].'</'.$data['sp_home_section_1_background_image_title_h_tag'][0].'>';
                                	}
                                	
                               	 	if($data['sp_home_section_1_video_code'][0]){?>
                                		<a class="waves-light video_icon modal-trigger" href="#modal1" target="_self" onclick="video()"></a><?php
                                	}?>
                                </div>
                            </div>
                <!--Section 2-->
					<?php
                	if(isset($data['sp_home_section_2_background_image'][0])) {
                		$sp_home_section_2_background_image_arr = wp_get_attachment_image_src( $data['sp_home_section_2_background_image'][0], '' );
                
                	}?>
                    <div class="ms-section section_left" id="left2" data-index="2" data-id="3" <?php if($sp_home_section_2_background_image_arr[0]){?>style="background-image:url(<?php echo $sp_home_section_2_background_image_arr[0];?>);"<?php }?>>
                        <div class="section2_text"><?php
                        	$titan = TitanFramework::getInstance( 'mac' );
                        	if($titan->getOption( 'stat_1_title' ) || $titan->getOption( 'stat_1_number' ) || $titan->getOption( 'stat_3_title' ) || $titan->getOption( 'stat_3_number' )){?>
                                <div class="counters row"><?php
									if($titan->getOption( 'stat_1_title' ) || $titan->getOption( 'stat_1_number' )){?>
										<div class="col l6 m6 s6">
                                            <span class="counters_title"><?php
                                            	if($titan->getOption( 'stat_1_number' )){?>
                                            		<span class=""><?php echo $titan->getOption( 'stat_1_number' );?></span>+</span><?php
												}
												if($titan->getOption( 'stat_1_title' ) ){?>
													<span><?php echo $titan->getOption( 'stat_1_title' );?></span><?php
												}?>
										</div><?php
									}
                                	if($titan->getOption( 'stat_3_title' ) || $titan->getOption( 'stat_3_number' )){?>
                                        <div class="col l6 m6 s6">
                                        	<span class="counters_title"><?php
                                        		if($titan->getOption( 'stat_3_number' )){?>
                                        			<span class=""><?php echo $titan->getOption( 'stat_3_number' );?></span>+</span><?php
                                        		}
                                        		if($titan->getOption( 'stat_3_title' )){?>
                                        			<span><?php echo $titan->getOption( 'stat_3_title' );?></span><?php
                                        		}?>
                                        </div><?php
                                	}?>
                                </div><?php
                        	}
                        	if($titan->getOption( 'since_year' )){?>
                        		<span class="since"><span><?php echo $titan->getOption( 'since_year' );?></span></span><?php
                       		 }
							 if($titan->getOption( 'stat_2_title' ) || $titan->getOption( 'stat_2_number' ) || $titan->getOption( 'stat_4_title' ) || $titan->getOption( 'stat_4_number' )){?>
                                <div class="counters row"><?php
                                    if($titan->getOption( 'stat_2_title' ) || $titan->getOption( 'stat_2_number' )){?>
                                        <div class="col l6 m6 s6"><?php
                                            if($titan->getOption( 'stat_2_number' )){?>
                                                <span class="counters_title"><span class=""><?php echo $titan->getOption( 'stat_2_number' );?></span>+</span><?php
                                            }
                                            if($titan->getOption( 'stat_2_title' )){?>
                                                <span><?php echo $titan->getOption( 'stat_2_title' );?></span><?php
                                            }?>
                                        </div><?php
                                    }
                                    if($titan->getOption( 'stat_4_title' ) || $titan->getOption( 'stat_4_number' )){?>
                                        <div class="col l6 m6 s6"><?php
                                            if($titan->getOption( 'stat_4_number' )){?>
                                                <span class="counters_title"><span class=""><?php echo $titan->getOption( 'stat_4_number' );?></span>+</span><?php
                                            }
                                            if($titan->getOption( 'stat_4_title' )){?>
                                                <span><?php echo $titan->getOption( 'stat_4_title' );?></span><?php
                                            }?>
                                        </div><?php
                                    }?>
                                </div><?php
							 }?>
                        </div>
                    </div>
                <!--Section 3-->
					<?php
                		if(isset($data['sp_home_section_3_background_image'][0])) {
                			$sp_home_section_3_background_image_arr = wp_get_attachment_image_src( $data['sp_home_section_3_background_image'][0], '' );
                
                		}?>
                    <div class="ms-section section_left" id="left3" data-index="3" data-id="5" <?php if($sp_home_section_3_background_image_arr[0]){?>style="background-image:url(<?php echo $sp_home_section_3_background_image_arr[0];?>);"<?php }?>>
                    	<div class="overlay"></div><?php
                    	if(isset($data['sp_home_section_3_title'][0])) {?>
                            <div class="section_new_center"><?php 
								echo '<'.$data['sp_home_section_3_title_h_tag'][0].' class=section_new_title2>'.$data['sp_home_section_3_title'][0].'</'.$data['sp_home_section_3_title_h_tag'][0].'>';?>
                            </div><?php
                    	}?>
                    </div>
                <!--Section 4-->
					<?php
                	if(isset($data['sp_home_section_4_background_image'][0])) {
                		$sp_home_section_4_background_image_arr = wp_get_attachment_image_src( $data['sp_home_section_4_background_image'][0], '' );
                
                	}?>
                    <div class="ms-section section_left" id="left4" data-index="4" data-id="7" <?php if($sp_home_section_4_background_image_arr[0]){?>style="background-image:url(<?php echo $sp_home_section_4_background_image_arr[0];?>);"<?php }?>>
                    	<div class="overlay overlay_light"></div><?php
                    	if(isset($data['sp_home_section_4_title'][0])) {?>
                            <div class="section_new_center"><?php 
                            	echo '<'.$data['sp_home_section_4_title_h_tag'][0].' class=section_new_title2>'.$data['sp_home_section_4_title'][0].'</'.$data['sp_home_section_4_title_h_tag'][0].'>';?>
                            </div><?php
                    	}?>
                    </div>
                <!--Section 5-->
					<?php
                	if(isset($data['sp_home_section_5_background_image'][0])) {
                		$sp_home_section_5_background_image_arr = wp_get_attachment_image_src( $data['sp_home_section_5_background_image'][0], '' );
                
                	}?>
                    <div class="ms-section section_left" id="left5" data-index="5" data-id="9" <?php if($sp_home_section_5_background_image_arr[0]){?>style="background-image:url(<?php echo $sp_home_section_5_background_image_arr[0];?>);"<?php }?>>
                    	<div class="overlay overlay_light"></div><?php
                    	if(isset($data['sp_home_section_5_title'][0])) {?>
                            <div class="section_new_center"><?php 
                            	echo '<'.$data['sp_home_section_5_title_h_tag'][0].' class=section_new_title2>'.$data['sp_home_section_5_title'][0].'</'.$data['sp_home_section_5_title_h_tag'][0].'>';?>
                            </div><?php
                    	}?>
                    </div> 
               <!--Section new -->
					<?php
                	if(isset($data['sp_home_section_our_process_background_image'][0])) {
                		$sp_home_section_our_process_background_image_arr = wp_get_attachment_image_src( $data['sp_home_section_our_process_background_image'][0], '' );
                
                	}?>
                    <div class="ms-section section_left" id="left5" data-index="51" data-id="11" <?php if($sp_home_section_our_process_background_image_arr[0]){?>style="background-image:url(<?php echo $sp_home_section_our_process_background_image_arr[0];?>);"<?php }?>>
                    	<div class="overlay overlay_light"></div><?php
                    	if(isset($data['sp_home_section_our_process_background_title'][0])) {?>
                            <div class="section_new_center"><?php 
                            	echo '<'.$data['sp_home_section_our_process_background_title_h_tag'][0].' class=section_new_title2>'.$data['sp_home_section_our_process_background_title'][0].'</'.$data['sp_home_section_our_process_background_title_h_tag'][0].'>';?>
                            </div><?php
                    	}?>
                    </div>      
               <!--Section 6-->
			   	<?php
                	if(isset($data['sp_home_section_6_background_image'][0])) {
                		$sp_home_section_6_background_image_arr = wp_get_attachment_image_src($data['sp_home_section_6_background_image'][0],'');
                
                	}?>
                    <div class="ms-section section_left" id="left6" data-index="6" data-id="13" <?php if($sp_home_section_6_background_image_arr[0]){?>style="background-image:url(<?php echo $sp_home_section_6_background_image_arr[0];?>);"<?php }?>>
                    	<div class="overlay"></div><?php
                    	if(isset($data['sp_home_section_6_title'][0])) {?>
                            <div class="section_new_center"><?php 
                            	echo '<'.$data['sp_home_section_6_title_h_tag'][0].' class=section_new_title2>'.$data['sp_home_section_6_title'][0].'</'.$data['sp_home_section_6_title_h_tag'][0].'>';?>
                            </div><?php
                    	}?>
                    </div>
                </div>
            <!-- right -->
            <!-- Section - 1 -->
                <div class="ms-right">
                    <div class="ms-section section_right" id="right1" data-id="2"><?php
						if(isset($data['sp_home_section_1_title'][0]) || isset($data['sp_home_section_1_cta_text'][0])) {?>
							<div class="section_right_text"><?php 
								if($data['sp_home_section_1_title'][0]){
									echo '<'.$data['sp_home_section_1_title_h_tag'][0].' class=right_section_title>'.$data['sp_home_section_1_title'][0].'</'.$data['sp_home_section_1_title_h_tag'][0].'>';
								}
								if($data['sp_home_section_1_cta_text'][0]){?>
									<a <?php if($data['sp_home_section_1_cta_link'][0]){?>href="<?php echo $data['sp_home_section_1_cta_link'][0];?>"<?php }?> class="btn orange_bg z-depth-1"><?php echo $data['sp_home_section_1_cta_text'][0];?></a><?php
								}?>
							<!--<a href="javascript:void(0)" class="read_more side side-right " data-index="1"><i class="fa fa-angle-left" aria-hidden="true"></i></a>-->
							</div><?php
						}?>
                    </div>
              <!-- Section - 2 -->
                    <div class="ms-section section_right" id="right2" style="background:#1abc9c;" data-id="4"><?php
						if(isset($data['sp_home_section_2_title'][0]) || isset($data['sp_home_section_2_blurb'][0])) {?>
							<div class="section_right_text section2_right"><?php
							if($data['sp_home_section_2_title'][0]){
								echo '<'.$data['sp_home_section_2_title_h_tag'][0].' class=right_section_title>'.$data['sp_home_section_2_title'][0].'</'.$data['sp_home_section_2_title_h_tag'][0].'>';
							}
							if($data['sp_home_section_2_blurb'][0]){?>
								<p><?php echo $data['sp_home_section_2_blurb'][0];?></p><?php
							}?>
							<a href="javascript:void(0)" class="read_more side side-right" data-index="2"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div><?php
						}?>
                    </div>
               <!-- Section - 3 -->
                    <div class="ms-section section_right" id="right3" style="background-color:#f1c40f;" data-id="6"><?php
                    	if(isset($data['sp_home_section_3_blurb'][0])) {?>
                    		<div class="section_right_text section2_right"><?php
                    			if($data['sp_home_section_3_blurb'][0]){?>
                    				<p><?php echo $data['sp_home_section_3_blurb'][0];?></p><?php
                    			}?>
                    			<a href="javascript:void(0)" class="read_more side side-right" data-index="3"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    		</div><?php
                    	}?>
                    </div>
                 <!-- Section - 4 -->
                    <div class="ms-section section_right" id="right4" style="background-color:#f39c12;" data-id="8"><?php
                    	if(isset($data['sp_home_section_4_blurb'][0])) {?>
                        <div class="section_right_text section2_right"><?php
                        	if($data['sp_home_section_4_blurb'][0]){?>
                        		<p><?php echo $data['sp_home_section_4_blurb'][0];?></p><?php
                        	}?>
                        	<a href="javascript:void(0)" class="read_more side side-right" data-index="4"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div><?php
                    }?>
                    </div>
                <!-- Section - 5 -->
                    <div class="ms-section section_right" id="right5" style="background-color:#2ecc71;" data-id="10"><?php
                    	if(isset($data['sp_home_section_5_blurb'][0])) {?>
                            <div class="section_right_text section2_right"><?php
                            	if($data['sp_home_section_5_blurb'][0]){?>
                            		<p><?php echo $data['sp_home_section_5_blurb'][0];?></p><?php
                            	}?>
                            	<a href="javascript:void(0)" class="read_more side side-right" data-index="5"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div><?php
                    	}?>
                    </div>
                 <!-- Section - new -->
                    <div class="ms-section section_right" id="right5" style="background-color:#2ecc71;" data-id="12"><?php
                    	if(isset($data['sp_home_section_5_blurb'][0])) {?>
                            <div class="section_right_text section2_right"><?php
                            	if($data['sp_home_section_5_blurb'][0]){?>
                            		<p><?php echo $data['sp_home_section_5_blurb'][0];?></p><?php
                            	}?>
                            	<a href="javascript:void(0)" class="read_more side side-right" data-index="5"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div><?php
                    	}?>
                    </div>    
                <!-- Section - 6 -->
                    <div class="ms-section section_right" id="right6" style="background-color:#2980b9;" data-id="14"><?php
                    	if(isset($data['sp_home_section_6_blurb'][0])) {?>
                    		<div class="section_right_text section2_right"><?php
                    		if($data['sp_home_section_6_blurb'][0]){?>
                    			<p><?php echo $data['sp_home_section_6_blurb'][0];?></p><?php
                    		}?>
                    		<a href="javascript:void(0)" class="read_more side side-right" data-index="6"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    		</div><?php
                    	}?>
                    </div>
                </div>	
            </div>
        </div><?php
		if($data['sp_home_section_1_video_code'][0]){?>
          <div id="modal1" class="modal video_popup">
              <div class="modal-content">
                  <video id="myVideo" controls="">
                      <source src="<?php echo $data['sp_home_section_1_video_code'][0];?>" type="video/mp4">
                          Your browser does not support HTML5 video.
                  </video>
              </div>
          </div><?php
		}?>
        <a href="javascript:void(0)" class="close_layout"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="section_right_bottom">
            <a href="javascript:void(0)" class="page_up" ><i class="fa fa-angle-up" aria-hidden="true"></i></a>
            <a href="javascript:void(0)" class="page_down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <a href="javascript:void(0)" class="read_more side side-right"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
        <div class="move_layout mCustomScrollbar content">
            	<div id="left-1" class="load_page"><?php 
					$args = array(
						'post_type' => 'banner',
						'posts_per_page' => 1,
						'post_status' => 'publish',
						'orderby'        => 'rand',
						);
					$loop = new WP_Query( $args );
					if($loop->found_posts > 0) {
						$banner_arr= array();
						$i = 1;
           				while ( $loop->have_posts() ) : $loop->the_post();
							$banner_arr[] = $post->ID;
                			$banner_data = get_post_meta($post->ID);
							$banner_image = '';
							if (has_post_thumbnail( $post->ID ) ){
								$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
							}?>
                            <div class="banner" <?php if($banner_image[0]){?>style="background-image:url(<?php echo $banner_image[0];?>);"<?php }?>>
                            <div class="overlay"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="banner_inner_bg">
                                            <div class="banner_text"><?php 
                                            if($banner_data['banner_title'][0]){
                                                 echo '<'.$banner_data['banner_title_h_tag'][0].' class=banner_title_small>'.$banner_data['banner_title'][0].'</'.$banner_data['banner_title_h_tag'][0].'>';
                                            }
                                            if($banner_data['banner_tagline'][0]){
                                                  echo '<'.$banner_data['banner_tagline_h_tag'][0].' class=banner_title>'.$banner_data['banner_tagline'][0].'</'.$banner_data['banner_tagline_h_tag'][0].'>';
                                            }
                                            if($banner_data['banner_cta_text'][0]){?>
                                                    <a <?php if($banner_data['banner_cta_link'][0]){?>href="<?php echo $banner_data['banner_cta_link'][0];?>"<?php }?> class="btn z-depth-2"><?php echo $banner_data['banner_cta_text'][0];?></a><?php
                                            }
                                                if($banner_data['banner_video_code'][0]){?>
                                                    <a class="waves-light video_icon modal-trigger" href="#modal1" target="_self" ></a><?php
                                                }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><?php
						$i++;
             		 endwhile; wp_reset_query();?><?php
					}?>
                </div>
               <!-- Load section 1 -->
                <div id="left-2" class="load_page">
                    <div class="expertise_bg center">
                        <div class="container">
                                <div class="row">
                                    <div class="col l12">
                                        <div class="expertise_text">
                                            <article class="home_section section_title"><?php 
												the_content();?>
                                            </article>
                                        	<!-- <div class="divider"><span class="arrow_icon"></span></div>--><?php
                                        	$titan = TitanFramework::getInstance( 'mac' );
                                        	if($titan->getOption( 'stat_1_title' ) || $titan->getOption( 'stat_1_number' ) || $titan->getOption( 'stat_2_title' ) || $titan->getOption( 'stat_2_number' ) || $titan->getOption( 'stat_3_title' ) || $titan->getOption( 'stat_3_number' ) || $titan->getOption( 'stat_4_title' ) || $titan->getOption( 'stat_4_number' )){?>
                                                <div class="counters row"><?php
													if($titan->getOption( 'stat_1_title' ) || $titan->getOption( 'stat_1_number' )){?>
														<div class="col l3 m3 s6"><?php
															if($titan->getOption( 'stat_1_number' )){?>
																<span class="counters_title"><span class="counter"><?php echo $titan->getOption( 'stat_1_number' );?></span>+</span><?php 
															}
															if($titan->getOption( 'stat_1_title' )){?>
																<span><?php echo $titan->getOption( 'stat_1_title' );?></span><?php
															}?>
														</div><?php
													}
													if($titan->getOption( 'stat_2_title' ) || $titan->getOption( 'stat_2_number' )){?>
														<div class="col l3 m3 s6"><?php
															if($titan->getOption( 'stat_2_number' )){?>
																<span class="counters_title"><span class="counter"><?php echo $titan->getOption( 'stat_2_number' );?></span>+</span><?php
															}
															if($titan->getOption( 'stat_2_title' )){?>
																<span><?php echo $titan->getOption( 'stat_2_title' );?></span><?php
															}?>
														</div><?php
													}
                                                	if($titan->getOption( 'stat_3_title' ) || $titan->getOption( 'stat_3_number' ) ){?>
                                                        <div class="col l3 m3 s6"><?php 
                                                        	if($titan->getOption( 'stat_3_number' )){?>
                                                        		<span class="counters_title"><span class="counter"><?php echo $titan->getOption( 'stat_3_number' );?></span>+</span><?php
                                                        	}
                                                        	if($titan->getOption( 'stat_3_title' )){?>
                                                        		<span><?php echo $titan->getOption( 'stat_3_title' );?></span><?php
                                                        	}?>
                                                        </div><?php
                                                	}
                                                	if($titan->getOption( 'stat_4_title' ) || $titan->getOption( 'stat_4_number' )){?>
                                                        <div class="col l3 m3 s6"><?php
															if($titan->getOption( 'stat_4_number' )){?>
																<span class="counters_title"><span class="counter"><?php echo $titan->getOption( 'stat_4_number' );?></span>+</span><?php
															}
															if($titan->getOption( 'stat_4_title' )){?>
																<span><?php echo $titan->getOption( 'stat_4_title' );?></span><?php
															}?>
                                                        </div><?php
                                                	}?>
                                                </div><?php
                                        }
                                        if($titan->getOption( 'since_year' )){?>
                                        	<span class="since"><span><?php echo $titan->getOption( 'since_year' );?></span></span><?php
                                        }?>
                                        </div>
                                    </div>
                              </div>
                        </div>
                    </div>
                </div>
                <!-- Load section 2 -->
                <div id="left-3" class="load_page">
                	<div class="our_services center">
                        <div class="container">
                            <div class="row"><?php
								if(isset($data['home_section_1_content'][0])){?>
                                    <div class="col l12 s12"><?php
                                       if($data['home_section_1_content'][0]){
                                            echo apply_filters(the_content,$data['home_section_1_content'][0]);
                                       }?>
                                    </div><?php
								}?>
                            </div>
                            <div class="row services_inner"><?php 
								if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-widgets') ) : endif; ?>
                            </div><?php
							if(isset($data['home_section_1_cta_text'][0])){?>
                                <div class="view_all"><?php
                                    if($data['home_section_1_cta_text'][0]){?>
                                        <a <?php if($data['home_section_1_cta_link'][0] !="null"){?>href="<?php echo get_permalink( $data['home_section_1_cta_link'][0]); ?>"<?php }?> class="btn z-depth-2"><?php echo $data['home_section_1_cta_text'][0];?></a><?php
                                    }?>
                                </div><?php
							}?>
                        </div>
                    </div>
                </div><?php
				if(isset($data['home_section_2_background_image'][0])) {
					$home_section_2_background_image_arr = wp_get_attachment_image_src( $data['home_section_2_background_image'][0], '' );
			
				}?>
                <!-- Load section 3 -->
                <div id="left-4" class="load_page">
                	<div class="technology_section" <?php if($home_section_2_background_image_arr[0]){?>style="background-image:url(<?php echo $home_section_2_background_image_arr[0];?>);"<?php }?>>
                    	<div class="overlay"></div>
                        <div class="container">
                            <div class="tech_inner_section"><?php
								if(isset($data['home_section_2_section_title'][0]) || isset($data['home_section_2_tagline'][0])){?>
                                    <div class="technology_top center">
                                        <div class="row"><?php
                                        if($data['home_section_2_section_title'][0]){?>
                                            <h6 class="small_title"><?php echo $data['home_section_2_section_title'][0];?></h6><?php
                                        }
                                        if($data['home_section_2_tagline'][0]){
                                            echo '<'.$data['home_section_2_tagline_h_tag'][0].' class="section_title">'.$data['home_section_2_tagline'][0].'</'.$data['home_section_2_tagline_h_tag'][0].'>';
                                        }?>
                                        </div>
                                    </div><?php
								}?>
                                <div class="technology_icons_bg">
                                    <div class="row">
                                        <div class="technology_icon_inner">
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/html_icon.png"  alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>HTML5/CSS3</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wordpress_icon.png"  alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>WORDPRESS</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joomla_icon.png" alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>JOOMLA</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drupal_icon.png" alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>DRUPAL</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/presta_icon.png"  alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>PRESTASHOP</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/magento_icon.png"  alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>MAGENTO</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify_icon.png"  alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>SHOPIFY</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/js_icon.png" alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>JAVASCRIPT</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ember_icon.png" alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>EMBER</span>
                                            </div>
                                            <!-- -->
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/angular_icon.png"  alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>ANGULAR</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/node_icon.png"  alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>NODE JS</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/php_icon.png" alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>PHP</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/larvel_icon.png" alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>LARAVEL</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/codeigneter_img.png"  alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>CODEIGNITER</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dotnet_icon.png"  alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>.NET</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/java_icon.png"  alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>JAVA</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/android_icon.png" alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>ANDROID</span>
                                            </div>
                                            <div class="technology_icons">
                                                <div class="tech_icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ios_icon.png" alt="<?php echo get_the_title(get_the_ID());?>">
                                                </div>
                                                <span>iOS</span>
                                            </div>
                                        </div><?php
										if(isset($data['home_section_2_cta_text'][0])){
											if($data['home_section_2_cta_text'][0]){?>
												<a <?php if($data['home_section_2_cta_link'][0]){?>href="<?php echo $data['home_section_2_cta_link'][0];?>"<?php }?> class="btn z-depth-1"><?php echo $data['home_section_2_cta_text'][0];?></a><?php
											}
										}?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- Load section 4 -->
                <div id="left-5" class="load_page">
                	<!-- our recent works -->
                    <div class="our_recent_works col l12">
                        <div class="container">
                            <div class="row"><?php
								if(isset($data['home_section_3_section_title'][0]) || isset($data['home_section_3_portfolio_title'][0])) {?>
									<div class="col l12 m12 s12 recent_work_top section_title"><?php
										if($data['home_section_3_section_title'][0]){?>
											<h6 class="small_title"><?php echo $data['home_section_3_section_title'][0];?></h6><?php
										}
										if($data['home_section_3_portfolio_title'][0]){
											echo '<'.$data['home_section_3_portfolio_title_h_tag'][0].' class="section_title">'.$data['home_section_3_portfolio_title'][0].'</'.$data['home_section_3_portfolio_title_h_tag'][0].'>';
										}?>
									</div><?php
								}
                            	$args = array(
									'post_type' => 'portfolio',
									'posts_per_page' => 5,
									'post_status' => 'publish',
                            
                            	);
                            	$loop = new WP_Query( $args );
                            	$count = $loop->post_count;
                            	if($loop->found_posts > 0) {?>
                                    <div class="recent_work">
                                        <div class="slider col l12">
                                            <ul class="<?php if($count > 1){?>slides<?php }else{?>single-slides<?php }?>"><?php
                                            	while ( $loop->have_posts() ) : $loop->the_post();
                                            		$portfolio_image = '';
                                            		if (has_post_thumbnail( $post->ID ) ){
                                            			$portfolio_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '791_462_img' );
                                            		}?>
                                                    <li><?php
                                                    	if($portfolio_image[0]){?>
                                                    		<img src="<?php echo $portfolio_image[0];?>" width="<?php echo $portfolio_image[1];?>" height="<?php echo $portfolio_image[1];?>" alt="<?php echo get_the_title(get_the_ID());?>"> <!-- random image --><?php
                                                    	}?>
                                                        <div class="custom_caption">
                                                            <div class="caption_text">
                                                            	<h5 class="recent_proj_title"><?php the_title();?></h5><?php
                                                            	$terms = ' ';
                                                            	$terms = get_the_terms( $post->ID, 'technology' );
                                                            	if($terms){
                                                            		$term_arr = ' ';
                                                            		$term_arr = array();
                                                            		foreach ( $terms as $term ){
                                                            			$term_arr[] = $term->name;
                                                            
                                                            		}?>
                                                            		<h6 class="recent_proj_tech"><?php echo implode(", ",$term_arr);?></h6><?php
                                                            	}?>
                                                            </div>
                                                        	<a href="<?php echo get_permalink_by_slug('portfolio'); ?>" class="btn z-depth-2">View All</a>
                                                        </div>
                                                    </li><?php
                                            	endwhile; wp_reset_query();?>
                                            </ul><?php
                                        	if($count > 1){?>
                                        		<div class="slider_arrow">
                                        			<a href="#" class="prev"></a>
                                        			<a href="#" class="next"></a>
                                        		</div><?php
                                        	}?>
                                        </div>
                                    </div><?php
                            	}?>
                            </div>
                        </div>
                    </div>
                    <!-- testimonials -->
                    <div class="testimonials">
                        <div class="container">
                            <div class="row"><?php
								if(isset($data['home_section_3_testimonial_title'][0])){?>
									<div class="col l12 testi_top center"><?php
										if($data['home_section_3_testimonial_title'][0]){
											echo '<'.$data['home_section_3_testimonial_title_h_tag'][0].' class="section_title">'.$data['home_section_3_testimonial_title'][0].'</'.$data['home_section_3_testimonial_title_h_tag'][0].'>';
										}?>
									</div><?php
								}
                            	$args = array(
                            		'post_type' => 'testimonial',
                            		'posts_per_page' => 3,
                            		'post_status' => 'publish',
                           			 //'orderby' => 'menu_order',
                            		//'order' => 'ASC',
                           	 	);
                            	$loop = new WP_Query( $args );
                            	if($loop->found_posts > 0) {?>
                                    <div class="col l12 testi_inner"><?php
										while ( $loop->have_posts() ) : $loop->the_post();
											$testimonial_data = get_post_meta($post->ID);?>
											<div class="col l4 m4 s12">
												<div class="card-panel"> <?php
													the_content();?>
												</div>
												<div class="test_info">
													<h6><?php the_title();?></h6><?php 
													if($testimonial_data['designation_company_location'][0]){?>
														<span><?php echo $testimonial_data['designation_company_location'][0];?></span><?php
													}?>
												</div>
											</div><?php
										endwhile; wp_reset_query();?>
                                    </div><?php
                            	}
                            	if(isset($data['home_section_3_testimonial_cta_text'][0])){
                            		if($data['home_section_3_testimonial_cta_text'][0]){?>
                                        <div class="view_all">
                                            <a href="<?php echo get_field('home_section_2_cta_link'); ?>" class="btn z-depth-2"><?php echo $data['home_section_3_testimonial_cta_text'][0];?></a>
                                        </div><?php
                            		}
                           	 	}?>
                            </div>
                        </div>
                    </div>
                    <!-- our clients -->
                    <div class="our_clients col l12 s12" id="clients">
                        <div class="container">
                            <div class="row"><?php
								if(isset($data['home_section_3_clients_title'][0])){?>
									<div class="col l12 s12 our_clients_top center section_title"><?php
										if($data['home_section_3_clients_title'][0]){
											echo '<'.$data['home_section_3_clients_title_h_tag'][0].' class="section_title">'.$data['home_section_3_clients_title'][0].'</'.$data['home_section_3_clients_title_h_tag'][0].'>';
										}?>
									</div><?php
								}
                            	$args = array(
                            		'post_type' => 'our-clients',
                            		'posts_per_page' => -1,
                            		'post_status' => 'publish',
                            		'orderby' => 'menu_order',
                            		'order' => 'ASC',
                            	);
                            	$loop = new WP_Query( $args );
                            	if($loop->found_posts > 0) {?>
                                    <div class="our_clients_logo">
                                        <div class="carousel"><?php
                                        while ( $loop->have_posts() ) : $loop->the_post();
											$client_image = '';
												if (has_post_thumbnail( $post->ID ) ){
													$client_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
													<a class="carousel-item" href="#"><img src="<?php echo $client_image[0];?>" width="<?php echo $client_image[1];?>" height="<?php echo $client_image[2];?>" alt="<?php echo get_the_title(get_the_ID());?>"></a><?php
												}
											endwhile; wp_reset_query();?>
                                        </div>
                                        <div class="slider_arrow">
                                        	<a href="#" class="prev"></a>
                                        	<a href="#" class="next"></a>
                                        </div>
                                    </div><?php
                            	}
								if(isset($data['home_section_3_clients_cta_text'][0])){?>
									<div class="view_all"><?php
										if($data['home_section_3_clients_cta_text'][0]){?>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us#clients" class="btn orange_bg z-depth-1"><?php echo $data['home_section_3_clients_cta_text'][0];?></a><?php
										}?>
									</div><?php
								}?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Load section New -->
                <div id="left-51" class="load_page">
                	<!-- process -->
                    <div id="process" class="process">
                        <div class="container">
                            <div class="row"><?php
                                if(isset($data['home_section_5_section_content'][0])){?>
                                     <div class="col l12 s12 our_clients_top center section_title content-format"><?php
                                         if($data['home_section_5_section_content'][0]){
                                             echo apply_filters(the_content,$data['home_section_5_section_content'][0]); 
                                         }?>
                                     </div><?php
                                }?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Load section 5 -->
                <div id="left-6" class="load_page">
                	  <!-- our team --><?php 
					  include (TEMPLATEPATH . '/modules/team-stats.php' ); ?>
                     <!-- blog and resource -->
                    <div class="blog_resource">
                        <div class="container">
                            <div class="row">
                                <div class="col l12 blog_resource_inner"><?php
                                	$args = array(
                                		'post_type' => 'post',
                                		'posts_per_page' => 1,
                                		'post_status' => 'publish',
                                	);
                                	$loop = new WP_Query( $args );
                                	if($loop->found_posts > 0) {
                                		while ( $loop->have_posts() ) : $loop->the_post();
                                			$category = ' ';
                                			$category = get_the_terms( $post->ID, 'category' );
                                			if($category){
                                				$cat_arr = ' ';
                                				$cat_arr = array();
                               					foreach ( $category as $cat ){
                                					$cat_arr[] = $cat->name;
                                
                                				}
                                			}?>
                                            <div class="col l6 m6 s12">
                                                <div class="card-panel black_medium">
                                                    <div class="blog_resource_text">
                                                    	<h6 class="white-text">BLOG</h6><?php
                                                    	if($category){?>
                                                    		<h6><span><?php echo implode(", ",$cat_arr);?></span></h6><?php
                                                   	 	}?>
                                                    	<h2 class="section_title"><span class="white-text"><?php the_title();?></span></h2>
                                                    </div>
                                                	<a href="<?php the_permalink();?>" class="btn orange_bg z-depth-1">READ Blog</a>
                                                	<a href="<?php echo get_permalink_by_slug('blog'); ?>" class="btn z-depth-1">VIEW ALL</a>
                                                </div>
                                            </div><?php
                                		endwhile; wp_reset_query();
                                	}
                                	$args = array(
                                		'post_type' => 'resources',
                                		'posts_per_page' => 1,
                                		'post_status' => 'publish',
                                	);
                                	$loop = new WP_Query( $args );
                                	if($loop->found_posts > 0) {
                                		while ( $loop->have_posts() ) : $loop->the_post();
                                			$resources = ' ';
                                			$resources = get_the_terms( $post->ID, 'resources-category' );
                                			if($resources){
                                				$resource_arr = ' ';
                                				$resource_arr = array();
                                				foreach ( $resources as $resource ){
                                					$resource_arr[] = $resource->name;
                                				}
                                			}?>
                                            <div class="col l6 m6 s12 resource_text">
                                                <div class="card-panel">
                                                    <div class="blog_resource_text">
                                                    	<h6>Resources</h6><?php
                                                    	if($resources){?>
                                                    		<h6><span><?php echo implode(", ",$resource_arr);?></span></h6><?php
                                                    	}?>
                                                    	<h2 class="section_title"><?php the_title();?></h2>
                                                    </div>
                                                	<a href="<?php the_permalink();?>" class="btn orange_bg z-depth-1">READ ARTICLE</a>
                                                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>resources" class="btn z-depth-1 orange-text">VIEW ALL</a>
                                                </div>
                                            </div><?php
                                		endwhile; wp_reset_query();
                                	}?>
                                </div>
                            </div>
                        </div>
                    </div><?php 
endwhile; endif; 
get_footer(); ?>