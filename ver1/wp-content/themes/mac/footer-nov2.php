<?php
/*if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}*/
?>
<?php  //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bread-crumb') ) : endif;
          $titan = TitanFramework::getInstance( 'mac' );?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col l12 footer_top">
        <div class="col l6 s12 m6 tweets_bg"> <span>TWEETS</span>
          <div class="carousel carousel-tweets">
            <div class="tweetfeed"></div>
          </div>
        </div>
        <?php
						if($titan->getOption( 'follow_title' ) || $titan->getOption( 'follow_description' ) || $titan->getOption( 'facebook' ) || $titan->getOption( 'twitter' ) || $titan->getOption( 'pinterest' ) || $titan->getOption( 'linkedin' ) || $titan->getOption( 'google_plus' ) || $titan->getOption( 'tumblr' )){?>
        <div class="col l6 s12 m6 tweets_bg">
          <div class="social_bg"> <span>Socials</span>
            <div class="followers_bg">
              <?php
									 if($titan->getOption( 'follow_title' )){?>
              <h4 class="footer_title"><?php echo $titan->getOption( 'follow_title' );?></h4>
              <?php
									 }
									 if($titan->getOption( 'follow_description' )){?>
              <p><?php echo $titan->getOption( 'follow_description' );?></p>
              <?php
									 }
									 if($titan->getOption( 'facebook' ) || $titan->getOption( 'twitter' ) || $titan->getOption( 'pinterest' ) || $titan->getOption( 'linkedin' ) || $titan->getOption( 'google_plus' ) || $titan->getOption( 'tumblr' )){?>
              <div class="social_icons">
                <ul>
                  <?php
											if($titan->getOption( 'facebook' )){?>
                  <li><a href="<?php echo $titan->getOption( 'facebook' );?>" class="fb_bg" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <?php
											}
											if($titan->getOption( 'twitter' )){?>
                  <li><a href="<?php echo $titan->getOption( 'twitter' ); ?>" class="twitt_bg" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <?php
											}
											if($titan->getOption( 'pinterest' )){?>
                  <li><a href="<?php echo $titan->getOption( 'twitter' ); ?>" class="pin_bg" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                  <?php
											}
											if($titan->getOption( 'linkedin' )){?>
                  <li><a href="<?php echo $titan->getOption( 'linkedin' );?>" class="in_bg" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <?php
											}
											if($titan->getOption( 'google_plus' )){?>
                  <li><a href="<?php echo $titan->getOption( 'google_plus' );?>" class="gplus_bg" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <?php
											}
											if($titan->getOption( 'tumblr' )){?>
                  <li><a href="<?php echo $titan->getOption( 'tumblr' );?>" class="tumblr_bg" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                  <?php
											}?>
                </ul>
              </div>
              <?php
									 }?>
            </div>
          </div>
        </div>
        <?php
						}?>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="col l12">
      <div class="footer_menu">
        <?php  wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '', 'menu_id' => '', 'menu_class'=> '',) ); ?>
      </div>
      <?php

					if($titan->getOption( 'copyright' )){?>
      <div class="copy_rights">
        <p><?php echo $titan->getOption( 'copyright' );?></p>
      </div>
      <?php

					}?>
    </div>
  </div>
</footer>
<?php

		 if(is_page_template( 'page_templates/portfolio.php' )){?>
</section>
<?php

		}?>

<!-- banner model box -->
<?php

		 if(is_page_template( 'page_templates/home-special.php' )){?>
</div>
<?php

		 }?>
</div>
<div class="show_767 mobile_nav_bottom"> <a href="javascript:void(0)" class="sec_prev" onclick="fnup()"><i class="fa fa-angle-up" aria-hidden="true"></i></a> <a href="javascript:void(0)" class="sec_next" onclick="fndown(0)"><i class="fa fa-angle-down" aria-hidden="true"></i></a> </div>
<div class="scrolltop_top"> <a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a> </div>
<header class="menu_first">
  <div class="header_inner">
    <nav class="nav_bg" role="navigation">
      <div class="nav-wrapper container"> <a id="logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-macronimous.png" width="260" height="48" alt="<?php if(get_field('logo_alt_tag',get_the_ID())){echo get_field('logo_alt_tag',get_the_ID());} else{echo get_the_title(get_the_ID()); }?>"> <img class="menu_open_logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-menu.png" width="260" height="48" alt="Macronimous"></a>
        <div class="header_menu">
          <?php  

							//wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_id' => 'menu', 'menu_class'=> 'menu','walker'	 => new  header_right_themeslug_walker_nav_menu) ); ?>
    <ul class="menu" id="menu">
        <li class="menu-has-children"><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us">About us</a>
            <div class="sub_menu_bg"> 
            
            <!--<a href="javascript:void(0)" class="menu_close">x</a>-->
            
                <ul class="sub-menu cols2">
                    <li>
                        <ul class="multi_column">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us">Who we are</a>
                            <p>Get to know us</p>
                            </li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/what-macronimous-can-do-for-you">What we can do</a>
                            <p>Get a view into our Capability </p>
                            </li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio">Portfolio</a>
                            <p>See what we have accomplished for clients across the globe</p>
                            </li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/why-macronimous">Why Macronimous</a>
                            <p>Our relevance for your requirements</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="multi_column">
                            <li><a href="<?php  echo esc_url( home_url( '/' ) ); ?>about-us/what-our-customers-say">What our customers say</a>
                            <p>Treasured feedback from our customers</p>
                            </li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/technology">Technology Expertise</a>
                            <p>List of technologies that we have expertise on</p>
                            </li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/join-us">Job openings</a>
                            <p>For skilled technology professionals to work with us</p>
                            </li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/case-studies">Case Studies</a>
                            
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
    	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio">Portfolio</a></li>
        <li class="menu-has-children services-nav"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services">Services</a>
            <div class="sub_menu_bg"> 
            
            	<!--<a href="javascript:void(0)" class="menu_close">x</a>-->
            
                <ul class="sub-menu">
                    <li>
                        <ul class="multi_column menu_title_bg">
                            <li> <a class="menu_title" href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development">Website Development</a>
                                <ul>
                                
                                <!--<li ></li>-->
                                
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/responsive-web-design-india">Responsive Web Design India</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/offshore-web-graphic-design">Web Graphic Design</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/psd-to-html-conversion">PSD TO HTML</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/website-development-packages">Web development Packages</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/outsource-website-redesign">Website Redesign</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/outsource-website-maintenance">Website Maintenance</a></li>
                                </ul>
                            </li>
                        
                            <li> <a class="menu_title" href="<?php echo esc_url( home_url( '/' ) ); ?>services/custom-web-development">Custom Web Development</a>
                                <ul>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/custom-web-development/offshore-dotnet-development">Offshore ASP.NET Development</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/custom-web-development/java-development-company-in-india">Offshore Java Development</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/custom-web-development/angular-development">Angular Development</a></li>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/custom-web-development/outsource-sugarcrm-development">SugarCRM Development</a></li>
                                </ul>
                            </li>
                        
                        
                        </ul>
                    </li>
                <li>
                    <ul class="multi_column menu_title_bg">
                        <li> <a class="menu_title" href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development">ECommerce Development</a>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/oscommerce-development">osCommerce Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/cubecart-development">CubeCart Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/outsource-magento-development">Outsource Magento development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/opencart-development">OpenCart Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/outsource-prestashop-Development">Prestashop Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/outsource-ecommerce-development-process">Ecommerce Development Process</a></li>
                            </ul>
                        </li>
                    
                        <li> <a class="menu_title" href="<?php echo esc_url( home_url( '/' ) ); ?>services/outsource-php-development">PHP Development</a>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/outsource-php-development/codeigniter-development">CodeIgniter development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/outsource-php-development/outsource-laravel-development">Outsource Laravel Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/outsource-php-development/outsource-yii-development">Outsource Yii Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/outsource-php-development/dedicated-php-developer">Dedicated PHP developer</a></li>
                            </ul>
                        </li>
                    
                    </ul>
                </li>
                <li>
                    <ul class="multi_column menu_title_bg">
                        <li> <a class="menu_title" href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development">Offshore CMS Development</a>
                            <ul >
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/outsource-drupal-development">Outsource Drupal Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/wordpress-development-india">WordPress Development India</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/wordpress-website-packages">WordPress Packages</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/modx-cms-development">Modx CMS Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/joomla-development-india">Joomla Development India</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/ektron-cms-development">Ektron CMS Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/dotnetnuke-cms-development">DotNetNuke Development</a></li>
                            </ul>
                        </li>
                        <li> <a class="menu_title" href="<?php echo esc_url( home_url( '/' ) ); ?>services/data-analytics-and-consulting">Data Analysis</a>
                            <ul >
                            	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/data-analysis/outsource-business-intelligence">Business Intelligence</a></li>
                            	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/data-analysis/tableau-consulting-services">Tableau Consulting Services</a></li>
                            </ul>
                        </li>
                    
                    </ul>
                </li>
                
                <li>
                    <ul class="multi_column menu_title_bg">
                        <li> <a class="menu_title" href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development">Mobile Development</a>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-jquery-mobile-development">jQuery Mobile Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/phonegap-development">PhoneGap Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-iphone-development">Outsource iPhone Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-android-development">Outsource Android Development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-app-development">Outsource App development</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-html5-app-development">Outsource HTML5 development</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li ><a class="menu_title" href="<?php echo esc_url( home_url( '/' ) ); ?>services/cloud-solutions">Cloud Solutions</a>
                                <ul>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cloud-solutions/amazon-web-services">Amazon Web Services</a></li>
                                </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="multi_column menu_title_bg">
                        <li>
                        
                        	<a  class="menu_title" href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing">Inbound Marketing</a>
                            <ul>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-seo-services">Outsource SEO</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/fixed-cost-seo-plans">SEO Plans</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/seo-for-wordpress-website">WordPress SEO</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-local-seo">Outsource Local SEO</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/seo-for-joomla-website">Joomla SEO</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-lawyer-marketing-seo">Outsource Lawyer Marketing SEO</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-social-media-marketing-services">Outsource SMM</a></li>
                                 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/hubspot-cms-services">Hubspot CMS services</a></li>
                            
                            </ul>
                        </li>
                   <!-- <li>-->
                    	<li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/outsource-sqa">Outsource SQA</a></li>
                    </ul>
                </li>
                </ul>
            </div>
        </li>
        <li class="menu-has-children"><a href="<?php echo esc_url( home_url( '/' ) ); ?>price-quote">Price Quote</a>
            <div class="sub_menu_bg"> 
            
            <!--<a href="javascript:void(0)" class="menu_close">x</a>-->
            
                <ul class="sub-menu cols2">
                    <li>
                        <ul class="multi_column">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pricing-models#fixed_cost">Fixed Cost Model</a>
                            <p>No billing surprises. Know the cost upfront </p>
                            </li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pricing-models#time_based">Time and Material Based Model</a>
                            <p>Pay for what you use</p>
                            </li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pricing-models#utili_based">Utilization Based Billing</a>
                            <p>Pay and use as need arises</p>
                            </li>
                        </ul>
                    </li>
                <li>
                    <ul class="multi_column">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pricing-models#full_time">Full Time Team Model</a>
                    <p>Get your dedicated team </p>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pricing-models#mixed_mode">Mixed Mode Model</a>
                    <p>Mix and match the models</p>
                    </li>
                    </ul>
                </li>
                </ul>
            </div>
        </li>
    
    
    <li class="menu-has-children"><a href="<?php echo esc_url( home_url( '/' ) ); ?>resources">Resources</a>
    <div class="sub_menu_bg"> 
    
    <!--<a href="javascript:void(0)" class="menu_close">x</a>-->
    
    <ul class="sub-menu cols2">
    <li>
    <ul class="multi_column">
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/tutorials">Tutorials</a>
    <p>Resource-rich tuts for newbies</p>
    </li>
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/articles">Articles</a>
    <p>The latest in the technologies that we are expert at</p>
    </li>
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/sathiyavedham">Mobile App - Tamil Bible</a>
    <p>An Android & iOS mobile app - Free to use</p>
    </li>
    </ul>
    </li>
    <li>
    <ul class="multi_column">
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/scripts">Free Scripts - Code Snippets</a>
    <p>Quick library for techies</p>
    </li>
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>resources/seo-for-beginners">Site Promotion</a>
    <p>Brief SEO overview - Suitable for Beginners</p>
    </li>
    </ul>
    </li>
    </ul>
    </div>
    </li>
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact us</a></li>
    
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a></li>
    
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>get-a-quote" class="waves-effect waves-light btn">GET A QUOTE</a></li>
    </ul>
        </div>
        </ul>
      </div>
    </nav>
  </div>
</header>
<?php wp_footer(); ?>



<!--<script src="<?php //echo get_template_directory_uri(); ?>/assets/js/readmore.js"></script> -->

<script>
jQuery(document).ready(function($){
	
	
	var value = jQuery('#post_name').val();
			//alert(value);
			jQuery('#hidden_post_name').val(value);
});
	  // jQuery('article').readmore({speed: 500});
		/*jQuery('.counter').counterUp({
            delay: 20,
            time: 1000
        });*/
		jQuery(document).ready(function($){
			
			//jQuery('#hidden_post_title').val(jQuery('#hidden_post_title').val());


		jQuery('.tweetfeed').twittie({
			username: 'macronimous',
			dateFormat: '%b. %d, %Y',
			template: ' <div> <h4 class="footer_title">{{screen_name}}</h4> <p>{{tweet}}</p><span class="tweets_time">{{date}}</span></div>',
			count: 3,
			loadingText: 'Loading!',
			apiPath : '<?php echo get_template_directory_uri(); ?>/assets/api/tweet.php'
		}, function () {
			jQuery('.carousel-tweets ul').carousel({
				full_width: true,
				 dist:0,
				shift:0,
				padding:105,
				time_constant:100,
				indicators:true,
			}); 
        });
	});
	jQuery(document).ready(function($){
		
		jQuery('#id').click(function() {
			var youremail 		= jQuery('input[name=your-email]').val();
			var firstemail 		= jQuery('input[name=confirm_email]').val();
			var isValid = true;
			var error_msg = '';
			var errorMsg = '';
		if ( youremail) {
				//alert("empty");
				if ( firstemail == null || firstemail == "") {
					jQuery( ".error_msg_your-email" ).remove();
					jQuery(".confirm_email").after("<span class='error_msg_your-email error_msg wpcf7-not-valid-tip' style='color:red;font-weight:normal;margin-bottom: 1px;font-size: 13px;'>The field is required.</span>");
					error_msg +=" - The field is required.\n";
					isValid = false;
				} 
				else {
						var errorMsg = jQuery("<span class='error' style='color:red;font-weight:normal;margin-bottom: 1px;'>Your emails do not match.</span>");
						if (youremail != firstemail) {
							jQuery('.error').remove();
							var errorMsg = jQuery("<span class='error' style='color:red;font-weight:normal;margin-bottom: 1px;'>Your emails do not match.</span>");
							errorMsg.insertAfter(jQuery('.confirm_email').find('input'));
							jQuery('.error_msg_your-email').remove();
							return false;
						}
						else{
							jQuery('.error').remove();
						}
						jQuery( ".error_msg_your-email" ).remove();
				}
				if(error_msg ) {
					return false;
				} else {
					return true;
				}
			}
		});

		jQuery(document).keypress(function(e) {
   			jQuery(".wpcf7-response-output").hide();
		});
		
	});
	</script> 
<?php if ( is_page_template( 'page_templates/contact.php' ) ) { ?>
<script>
 	//google map
	jQuery(function($) {
	
		var pinImage2 = ''+ my_data.template_directory_uri+'/assets/images/android_icon.png';  
		// Asynchronously Load the map API 
		var script = document.createElement('script');
		script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyCe5ROIvfKpXzEvdzezRKtdjWzbr_xWHQE&sensor=false&callback=initialize";
		document.body.appendChild(script);
	});
	function initialize() {
		var map;
		var bounds = new google.maps.LatLngBounds();
		var mapOptions = {
			zoom:6,
			mapTypeId: 'roadmap',
			scrollwheel: false,
			draggable: false,
			styles:
 [
           {
       			 "featureType": "administrative",
       			 "elementType": "labels.text.fill",
				 "stylers": [
					{
						"color": "#8597A1"    // City Text color
					}
        		]
    	}, 
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#F9F5EC"   // Body color
            }
        ]
    },
	{
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#FFFFFF"   //Road highway
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
   {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#FCD658" //
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#B1E0F3"
            },
            {
                "visibility": "on"
            }
        ]
    }
		]
		};
	

		// Display a map on the page
		map = new google.maps.Map(document.getElementById("map"), mapOptions);
		map.setTilt(45);
		// Multiple Markers
		var markers = [
			<?php global $single_map_arr;
							for($m=0; $m < count($single_map_arr); $m++) {
								if($single_map_arr[$m]['lat']) { ?>
									['<?php echo $single_map_arr[$m]['address'];?>', <?php echo $single_map_arr[$m]['lat'];?>, <?php echo $single_map_arr[$m]['lng'];?>],
							<?php }
								} ?>
		];

		// Info Window Content
		var infoWindowContent = [
			<?php global $single_map_arr;
							for($m=0; $m < count($single_map_arr); $m++) {
								if($single_map_arr[$m]['lat']) { ?>
									['<?php echo $single_map_arr[$m]['address'];?>'],
							<?php }
								} ?>
		];

		// Display multiple markers on a map
		var infoWindow = new google.maps.InfoWindow(), marker, i;

		// Loop through our array of markers & place each one on the map  
		for( i = 0; i < markers.length; i++ ) {
			//var pinImage1 = "http://maps.google.com/mapfiles/ms/icons/blue-dot.png";
			var pinImage1 = ''+ my_data.template_directory_uri+'/assets/images/mac-marker.png';  
			var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
			bounds.extend(position);
			marker = new google.maps.Marker({
				position: position,
				map: map,
				icon:pinImage1,
				title: markers[i][0]
			});

			// Allow each marker to have an info window    
			google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
				return function() {
					infoWindow.setContent(infoWindowContent[i][0]);
					infoWindow.open(map, marker);
				}
			})(marker, i));
			
			google.maps.event.addListener(marker, (function(marker, i) {
				return function() {
					//infoWindow.setContent(infoWindowContent[i][0]);
					infoWindow.close(map, marker);
				}
			})(marker, i));

			// Automatically center the map fitting all markers on the screen
		map.fitBounds(bounds);
		}

		// Override our map zoom level once our fitBounds function runs (Make sure it only runs once)

		var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
			this.setZoom(15);
			google.maps.event.removeListener(boundsListener);
		});
		
		
	}
	if (jQuery('table').length > 0) { 
			jQuery('table').stackcolumns();
		}
	jQuery(document).ready(function(){
    	jQuery('ul.tabs').tabs('select_tab', 'tab_id');
   	});
</script>

<?php } ?>
 <script src='https://www.google.com/recaptcha/api.js'></script>   
 <script>
 function get_action(form) {
var v = grecaptcha.getResponse();
if(v.length == 0)
{
    document.getElementById('captcha').innerHTML="You can't leave Captcha Code empty";
    return false;
}
if(v.length != 0)
{
    document.getElementById('captcha').innerHTML="Captcha completed";
    return true; 
}
}
 </script> 
<?php /*?><link href="<?php echo get_template_directory_uri(); ?>/assets/css/portfolio.css" type="text/css" rel="stylesheet"><?php */?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
</body></html>