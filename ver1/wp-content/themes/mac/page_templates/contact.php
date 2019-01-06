<?php 
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage project name
 */
get_header(); 
 if (have_posts()) : while (have_posts()) : the_post(); 
	$decoded = base64_decode( get_the_title($_GET['post_title'])  );
 	$titan = TitanFramework::getInstance( 'mac' );
	$banner_image = '';
	if (has_post_thumbnail( get_the_ID() ) ){
		$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );
		$header_banner =$banner_image[0];
	}else{
		$titan->getOption( 'banner_image' );
		$header_banner =wp_get_attachment_url( $titan->getOption( 'banner_image' ) );
	}
	$data = get_post_meta(get_the_ID()); ?>
     <div class="banner about_us_banner" <?php if($header_banner){?>style="background-image:url(<?php echo $header_banner;?>);"<?php }?>>
        	<div class="overlay"></div>
            <div class="container">
                <div class="row"><?php
					if($data['h_page_title'][0]){?>
                        <div class="banner_inner_bg">
                            <div class="banner_text"><?php 
								echo '<'.$data['page_title_h_tag'][0].' class=banner_title>'.$data['h_page_title'][0].'</'.$data['page_title_h_tag'][0].'>';
								?>
                                <div class="banner_contact">
                                	<div class="email"><?php 					 								
										if(isset($data['contact_email_in_banner'][0])){
											echo apply_filters('the_content', $data['contact_email_in_banner'][0]);
										}?>
									</div>
                                    <div class="phone_number">
										<?php
                                        if(isset($data['contact_phone_number_in_banner'][0])){
                                            echo apply_filters('the_content', $data['contact_phone_number_in_banner'][0]);
                                        }?>
                                    </div>
                                </div>
                            </div>
                        </div><?php
					}?>
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
		<div class="contact_bg">
			<div class="container">
				<div class="row">
                	<div class="contact_top">
						<?php the_content();?>
                       
                    </div><?php 
					$data = get_post_meta(get_the_ID()); 
					$single_map_arr = array();
					$map = get_field('contact_map',get_the_ID());
				//	print_r($map);
					if($map) {
						$single_map_arr[] = array(
						'lat'	=> $map['lat'],
						'lng'	=> $map['lng'],
						'address' =>  $map['address']);
					}?>
				</div>
			</div>
          <div class="map_section row">
          		<div class="address_section">
                	<div class="address_section_inner">
						<?php 
                            if(isset($data['contact_address'][0])){
                             echo apply_filters('the_content', $data['contact_address'][0]);
                        }?>
                    </div>
                </div>
                <div class="map_bg">
              		<div id="map" style="width:100%;height:518px;"></div>
                </div>
     	 </div>
         <div class="contact_location_bg">
			  <div class="container row">
			  	<div class="contact_location"><?php 
					if(isset($data['contact_location_1'][0])){
					 echo apply_filters('the_content', $data['contact_location_1'][0]);
					}?>
                </div>
                <div class="contact_location">
				  	<?php 
					if(isset($data['contact_location_2'][0])){
					 echo apply_filters('the_content', $data['contact_location_2'][0]);
					}?>
                </div>
                <div class="contact_location">
				  	<?php 
					if(isset($data['contact_location_3'][0])){
					 echo apply_filters('the_content', $data['contact_location_3'][0]);
					}?>
                </div>
            </div>
        </div>
        <div class="contact_bottom">
			<div class="container row">
				<div class="contact_bottom_top">
					<div class="contact_bottom_top_text"><?php
						if(isset($data['contact_tagline'][0])){
						 echo apply_filters('the_content', $data['contact_tagline'][0]);
						}?>
                    </div>
                </div>
                <div class="contact_bottom_middle">
					<div class="contact_bottom_left"><?php 
                    if(isset($data['contact_description_1'][0])){
                     echo apply_filters('the_content', $data['contact_description_1'][0]);
                    }?></div>
                    <div class="contact_bottom_right"><?php
                    if(isset($data['contact_description_2'][0])){
                     echo apply_filters('the_content', $data['contact_description_2'][0]);
                    }?>
                    </div>
                </div>
            </div>
		</div>
        </div><?php
		if($decoded){?>
         <input type="hidden" id="post_name" value=<?php echo $decoded;?> class="hidden_post_title"/><?php
		}?>
   <?php
			endwhile;endif;get_footer(); ?>