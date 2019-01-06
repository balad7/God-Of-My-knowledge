<!DOCTYPE html>
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
   	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
    <!-- Hiding the Browser's User Interface for iOS & Android -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="mobile-web-app-capable" content="yes"> 
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">     
   
	<?php wp_head(); 
	if(is_page_template( 'page_templates/service.php' )){
		$post_id = $wp_query->post->ID;
 	// echo 'post id' . $post_id;
  	$data = get_post_meta($post_id); ?>
    <style>
		.page-template-service .sec_nav_stick.bg_color .header_inner {
			border-color:<?php echo $data['service_header_background_color'][0];?>;
		}
	</style><?php
	}?>
</head>
<?php
 
if(is_page_template( 'page_templates/home-special.php' )){
	$body_class="home_new";
}
if(is_page_template( 'page_templates/home.php' )){
	$body_class="home";
}
if(is_page_template( 'page_templates/portfolio.php' )){
	$body_class="portfolio";
}
?>
<body <?php body_class($body_class); ?>>
	<div class="body_bg"></div>
        <header class="menu_first">
            <div class="header_inner">
                <nav class="nav_bg" role="navigation">
                    <div class="nav-wrapper container">
                    	<a id="logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-macronimous.png" width="260" height="48" alt="Macronimous">
                    		<img class="menu_open_logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-menu.png" width="260" height="48" alt="Macronimous"></a>
                        <div class="header_menu"><?php  
							//wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_id' => 'menu', 'menu_class'=> 'menu','walker'	 => new  header_right_themeslug_walker_nav_menu) ); ?>
                            <ul class="menu">
                                <li class="menu-has-children"><a href="javascript:void(0);">About us</a>
                                    <div class="sub_menu_bg">
                                        <!--<a href="javascript:void(0)" class="menu_close">x</a>-->
                                        <ul class="sub-menu cols2">
                                          <li>
                                            <ul class="multi_column">
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/who-we-are">Who we are</a>
                                                	<p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                                </li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/what-macronimous-can-do-for-you">What we can do</a><p>Lorem Ipsum is simply dummy text of the printing and type </p>
                                                </li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/portfolio">Portfolio</a>
                                                	<p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                                </li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/why-macronimous">Why Macronimous</a>
                                                <p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                                </li>
                                            </ul>
                                          </li>
                                          <li>
                                             <ul class="multi_column">
                                                <li><a href="<?php  echo esc_url( home_url( '/' ) ); ?>about-us/what-our-customer-say">What our customer say</a>
                                                 <p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                                </li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/technology">Technology Expertise</a>
                                                 <p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                                </li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/join-us">Job openings</a>
                                                 <p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                                </li>
                                            </ul>
                                          </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-has-children"><a href="javascript:void(0);">Services</a> 
                                    <div class="sub_menu_bg">
                                        <!--<a href="javascript:void(0)" class="menu_close">x</a>-->
                                        <ul class="sub-menu">
                                          <li>
                                            <ul class="multi_column">
                                                <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/outsource-website-development">Website Development</a></li>
                                                 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/website-development-packages">Web development Packages</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-design/responsive-web-design-india">Responsive Web Design India</a></li>
                                                <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-design/offshore-web-graphic-design">Web Graphic Design</a></li>
                                                <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-seo-services-india">Outsource SEO</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/fixed-cost-seo-plans">SEO Plans</a></li>
                                                 <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/seo-for-wordpress-website">WordPress SEO</a></li>
                                                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-local-seo">Outsource Local SEO</a></li>
                                                   <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/seo-for-joomla-website">Joomla SEO</a></li>
                                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-lawyer-marketing-seo">Outsource Lawyer Marketing SEO</a></li>
                                                    <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/inbound-marketing/outsource-social-media-marketing-services">Outsource SMM</a></li>
                                                    <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/php-development/dedicated-php-developer">Dedicated PHP developer</a></li>
                                            </ul>
                                          </li>
                                          <li>
                                             <ul class="multi_column">
                                             <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/bi/outsource-data-consulting-services">Data Analysis</a></li>
                                                     <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/bi/outsource-business-intelligence">Business Intelligence</a></li>
                                                      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/bi/tableau-consulting-services">Tableau Consulting Services</a></li>
                                                <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/offshore-custom-web-development">Custom Web Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/php-development/outsource-php-development">Outsource PHP Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/offshore-dotnet-development">Offshore ASP.NET Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/offshore-java-development">Offshore Java Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/php-development/codeigniter-development">CodeIgniter development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/php-development/outsource-laravel-development">Outsource Laravel Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/php-development/outsource-yii-development">Outsource Yii Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/angular-development">Angular Development</a></li>
                                                 
                                            </ul>
                                          </li>
                                          <li>
                                             <ul class="multi_column">
                                             <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/outsource-ecommerce-development">ECommerce Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/oscommerce-development">osCommerce Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/cubecart-development">CubeCart Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/outsource-magento-development">Outsource Magento development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/theming-development/opencart-development">OpenCart Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/outsource-prestashop-Development">Prestashop Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/ecommerce-development/outsource-ecommerce-development-process">Ecommerce Development Process</a></li>
                                                <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/offshore-cms-development">Offshore CMS Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/outsource-drupal-development">Outsource Drupal Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/wordpress-development-india">WordPress Development India</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/wordpress-development-packages">WordPress Packages</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/modx-cms-development">Modx CMS Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/joomla-development-india">
Joomla Development India</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/ektron-cms-development">Ektron CMS Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cms-development/dotnetnuke-cms-development">DotNetNuke Development</a></li>
                                            </ul>
                                          </li>
                                          <li>
                                             <ul class="multi_column">
                                                <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/outsource-website-maintenance">Website Maintenance</a></li>
                                                <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/outsource-website-redesign">Website Redesign</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-design/psd-to-html-conversion">PSD TO HTML</a></li>
                                                <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/offshore-mobile-application-development">Mobile Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/outsource-jquery-mobile-development">jQuery Mobile Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/apps-development/phonegap-development">PhoneGap Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-iphone-development">Outsource iPhone Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-app-development/outsource-android-development">Outsource Android Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-app-development">Outsource App development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/mobile-development/outsource-html5-app-development">Outsource HTML5 development</a></li>
                                            </ul>
                                          </li>
                                          <li>
                                             <ul class="multi_column">
                                                <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/outsource-sqa">Outsource SQA</a></li>
                                                <li class="menu_title"><a href="javascript:void(0);">CRM Development</a></li>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/web-development/outsource-sugarcrm-development">SugarCRM Development</a></li>
                                               <li class="menu_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>services/cloud-services/amazon-web-services">Amazon Web Services</a></li>
                                                
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and type</p></li>
                                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pricing-models#time_based">Time and Material Based Model</a>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                                    </li>
                                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pricing-models#utili_based">Utilization Based Billing</a>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                                    </li>
                                                   
                                                </ul>
                                           </li>
                                           <li>
                                                <ul class="multi_column">
                                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pricing-models#full_time">Full Time Team Model</a>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                                    </li>
                                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pricing-models#mixed_mode">Mixed Mode Model</a>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                                    </li>
                                                </ul>
                                          </li>
                                        </ul>
                                    </div>
                                </li>
                              <!--  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio">Portfolio</a></li>-->
                                <li class="menu-has-children"><a href="<?php echo esc_url( home_url( '/' ) ); ?>resource">Resources</a>
                                	<div class="sub_menu_bg">
                                        <!--<a href="javascript:void(0)" class="menu_close">x</a>-->
                                        <ul class="sub-menu cols2">
                                          <li>
                                            <ul class="multi_column">
                                               <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/tutorials">Tutorials</a>
                                               	<p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                               </li>
                                               <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/articles">Articles</a>
                                               	<p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                               </li>
                                               <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/sathiyavedham">Mobile App - Tamil Bible</a>
                                               <p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                               </li>
                                            </ul>
                                          </li>
                                          <li>
                                            <ul class="multi_column">
                                               <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/scripts">Free Scripts - Code Snippets</a>
                                               	<p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                               </li>
                                               <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/seo-for-beginners">Site Promotion</a>
                                               	<p>Lorem Ipsum is simply dummy text of the printing and type</p>
                                               </li>
                                            </ul>
                                          </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact us</a></li>
                                <!--<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a></li>-->
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>get-a-quote" class="waves-effect waves-light btn">GET A QUOTE</a></li>
              			</ul>
                        </div>
                        <div id="dl-menu" class="dl-menuwrapper">
                        	<button class="dl-trigger">Open Menu</button><?php  
								wp_nav_menu( array( 'theme_location' => 'mobile_menu', 'container' => '', 'menu_id' => '', 'menu_class'=> 'dl-menu','walker'	 => new  header_right_themeslug_walker_nav_menu) ); ?>
                        </div>
                    </div>
                </nav>
            </div>
        </header><?php
	if(!is_page_template( 'page_templates/home-special.php' )){?>
    	<div class="page_wrapper white"><?php
	}
		 if(is_page_template( 'page_templates/portfolio.php' )){?>
		 	<section id="grid"><?php
		}?>
  