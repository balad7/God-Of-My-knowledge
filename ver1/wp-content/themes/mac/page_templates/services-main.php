<?php
/**
 * Template Name: Services Main
 *
 * @package WordPress
 * @subpackage project name
 */

get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();
		$data = get_post_meta($post->ID); ?>
		<!-- banner -->
       <?php include (TEMPLATEPATH . '/modules/page-title.php' ); 
	   $main_list_section = get_field('service_list',get_the_ID());?>
        <div class="service_main services_middle_height">
            <div class="container">
                <div class="row"><?php
					if($main_list_section){
						foreach($main_list_section as $title){
							//print_r($title);?>
                        <div class="services_row">
								<div class="service_middle_top center">                                    
									<h2 class="section_title"><a <?php if($title['main_title_link_url']){?>href="<?php echo $title['main_title_link_url'];?>"<?php }?>><?php  echo $title['service_main_title'];?></a></h2>                     
								</div><?php 
								$second_loop = $title['lists'];
								if($second_loop){?>
                                    <div class="service_middle_info col l12 s12 m12"><?php
                                        foreach($second_loop as $loop){
											$logo_image = '';
                                			$logo_image_arr = $loop['list_icon'];
                                			$logo_image = wp_get_attachment_image_src(  $logo_image_arr['id'], '90_90_img' );?>                                    
                                        <div class="col l3 m3 s12">
                                            <div class="service_middle_info_inner" > <?php 
												if($logo_image){?>  
                                            	<img src="<?php echo $logo_image[0];?>" width="<?php echo $logo_image[1];?>" height="<?php echo $logo_image[2];?>"/>    <?php
												}?>
                                                <h6 class="service_middle_text"><a <?php if($loop['list_link_url']){?>href="<?php echo $loop['list_link_url']?>"<?php }?>><?php echo $loop['list_title'];?></a></h6><?php
                                                if($loop['list_desription']){?>
                                                    <p><?php echo $loop['list_desription'];?></p> <?php
                                                }?>
                                           </div>
                                        </div><?php
								}?>
                                <!--<div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/offshore-web-graphic-design">Web Graphic Design</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>-->
                                <!--<div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/psd-to-html-conversion">PSD TO HTML</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>--> 
                                 <!--<div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/website-development-packages">Web development Packages</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>-->
                                <!--<div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/outsource-website-redesign">Website Redesign</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>-->
                                <!--<div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/outsource-website-maintenance">Website Maintenance</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>--> 
                            </div> <?php
								}?>
                        </div><?php
						}
					}?>
                    <!-- -->
                    <div class="services_row">
                        <div class="service_middle_top center">                                    
                            <h2 class="section_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/custom-web-development">Custom Web Development</a></h2>                     
                        </div>
                        <div class="service_middle_info col l12 s12 m12">                                    
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/custom-web-development/offshore-dotnet-development">Offshore ASP.NET Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/custom-web-development/offshore-java-development">Offshore Java Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/custom-web-development/angular-development">Angular Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div> 
                             <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/custom-web-development/outsource-sugarcrm-development">SugarCRM Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            
                        </div> 
                     </div>
                     
                    <!--<div class="services_row">
                            <div class="service_middle_top center">                                    
                                <h2 class="section_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development">ECommerce Development</a></h2>                     
                            </div>
                            <div class="service_middle_info col l12 s12 m12">                                    
                                <div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/oscommerce-development">osCommerce Development</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>
                                <div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/cubecart-development">CubeCart Development</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>
                                <div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/outsource-magento-development">Outsource Magento development</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div> 
                                 <div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/opencart-development">OpenCart Development</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>
                                <div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/outsource-prestashop-Development">Prestashop Development</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>
                                <div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/outsource-ecommerce-development-process">Ecommerce Development Process</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>
                            </div> 
                        </div>-->
                    <!-- -->
                    <!--<div class="services_row">
                            <div class="service_middle_top center">                                    
                                <h2 class="section_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/php-app-development">PHP Development</a></h2>                     
                            </div>
                            <div class="service_middle_info col l12 s12 m12">                                    
                                <div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/php-app-development/codeigniter-development">CodeIgniter development</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>
                                <div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/php-app-development/outsource-laravel-development">Outsource Laravel Development</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>
                                <div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/php-app-development/outsource-yii-development">Outsource Yii Development</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div> 
                                 <div class="col l3 m3 s12">
                                    <div class="service_middle_info_inner" >                                                
                                        <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/php-app-development/dedicated-php-developer">Dedicated PHP developer</a></h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                                   </div>
                                </div>
                                
                            </div> 
                        </div>-->
                    <!-- -->
                    <!--<div class="services_row">
                        <div class="service_middle_top center">                                    
                            <h2 class="section_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development">Offshore CMS Development</a></h2>                     
                        </div>
                        <div class="service_middle_info col l12 s12 m12">                                    
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/outsource-drupal-development">Outsource Drupal Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/wordpress-development-india">WordPress Development India</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/wordpress-development-packages">WordPress Packages</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div> 
                             <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/modx-cms-development">Modx CMS Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/joomla-development-india">Joomla Development India</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/ektron-cms-development">Ektron CMS Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/dotnetnuke-cms-development">DotNetNuke Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                        </div> 
                    </div>-->
                    <!-- -->
                    <!--<div class="services_row">
                        <div class="service_middle_top center">                                    
                            <h2 class="section_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/data-analysis">Data Analysis</a></h2>                     
                        </div>
                        <div class="service_middle_info col l12 s12 m12 offset-l3">                                    
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/data-analysis/outsource-business-intelligence">Business Intelligence</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/data-analysis/tableau-consulting-services">Tableau Consulting Services</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            
                        </div> 
                    </div>-->
                    <!-- -->
                    <!--<div class="services_row">
                        <div class="service_middle_top center">                                    
                            <h2 class="section_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development">Mobile Development</a></h2>                     
                        </div>
                        <div class="service_middle_info col l12 s12 m12">                                    
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-jquery-mobile-development">jQuery Mobile Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/phonegap-development">PhoneGap Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-iphone-development">Outsource iPhone Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div> 
                             <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-android-development">Outsource Android Development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-app-development">Outsource App development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-html5-app-development">Outsource HTML5 development</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            
                        </div> 
                    </div>-->
                    <!-- -->
                    <!--<div class="services_row">
                        <div class="service_middle_top center">                                    
                            <h2 class="section_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cloud-solutions">Cloud Solutions</a></h2>                     
                        </div>
                        <div class="service_middle_info col l12 s12 m12">
                            
                            <div class="col l4 m4 s12 offset-l4">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cloud-solutions/amazon-web-services">Amazon Web Services</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            
                        </div> 
                    </div>-->
                    <!-- -->
                    <!--<div class="services_row">
                        <div class="service_middle_top center">                                    
                            <h2 class="section_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing">Inbound Marketing</a></h2>                     
                        </div>
                        <div class="service_middle_info col l12 s12 m12">                                    
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-seo-services-india">Outsource SEO</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/fixed-cost-seo-plans">SEO Plans</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/seo-for-wordpress-website">WordPress SEO</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div> 
                             <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-local-seo">Outsource Local SEO</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/seo-for-joomla-website">Joomla SEO</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-lawyer-marketing-seo">Outsource Lawyer Marketing SEO</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                            <div class="col l3 m3 s12">
                                <div class="service_middle_info_inner" >                                                
                                    <h6 class="service_middle_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-social-media-marketing-services">Outsource SMM</a></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>               
                               </div>
                            </div>
                        </div> 
                    </div>-->
                    <!-- -->                             
                </div>
            </div>
        </div>
        
<?php endwhile; endif; 
get_footer(); ?>