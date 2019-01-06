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
   
	<?php wp_head(); 
	if(is_page_template( 'page_templates/service.php' )){
		$post_id = $wp_query->post->ID;
	  	$data = get_post_meta($post_id); ?>
	    <style>
		.page-template-service .sec_nav_stick.bg_color .header_inner {
			border-color:<?php echo $data['service_header_background_color'][0];?>;
		}
	</style><?php
	}?>
 
     <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6Ldz2C4UAAAAAFHHy1yAjCO4tEyLh71BrDSUlpIj'
        });
      };
    </script>
   

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
        <?php
	if(!is_page_template( 'page_templates/home-special.php' )){?>
    	<div class="page_wrapper white"><?php
	}
		 if(is_page_template( 'page_templates/portfolio.php' )){?>
		 	<section id="grid"><?php
		}?>
		