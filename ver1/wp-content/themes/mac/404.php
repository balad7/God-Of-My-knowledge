<?php get_header(); 
$titan = TitanFramework::getInstance( 'mac' );?>
<div class="banner about_us_banner" <?php if($titan->getOption( 'banner_image' )){?>style="background-image:url(<?php  echo wp_get_attachment_url( $titan->getOption( 'banner_image' ) ); ?>);"<?php }?>>
        	<div class="overlay"></div>
            <div class="container">
                <div class="row">
                        <div class="banner_inner_bg">
                            <div class="banner_text">
                            <h2 class="banner_title">Error 404 - Page Not Found</h2>
                            </div>
                        </div>
                </div>
            </div>
        </div>




<?php get_footer(); ?>