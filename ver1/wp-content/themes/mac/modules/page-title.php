<?php
	$titan = TitanFramework::getInstance( 'mac' );
	$banner_image = '';
	
	if ( is_post_type_archive('resources') ) {
		$resource_id = get_id_by_slug('resource');
		$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( $resource_id ), '' );
		$header_banner =$banner_image[0];
		
	}
	else{
		if (has_post_thumbnail( get_the_ID() ) ){
			$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );
			$header_banner =$banner_image[0];
		}else{
			$titan->getOption( 'banner_image' );
			$header_banner =wp_get_attachment_url( $titan->getOption( 'banner_image' ) );
		}
	}
	$id = get_the_ID();
	if ( is_post_type_archive('resources') ) {
		$resource_id = get_id_by_slug('resource');
		$data = get_post_meta($resource_id);
	}else{
	$data = get_post_meta(get_the_ID());
	}?>
     <div class="banner about_us_banner" <?php if($header_banner){?>style="background-image:url(<?php echo $header_banner;?>);"<?php }?>>
        	<div class="overlay"></div>
            <div class="container">
                <div class="row"><?php
					if($data['h_page_title'][0]){?>
                        <div class="banner_inner_bg">
                            <div class="banner_text">
                             <?php echo '<'.$data['page_title_h_tag'][0].' class=banner_title>'.$data['h_page_title'][0].'</'.$data['page_title_h_tag'][0].'>';?>
                            </div>
                        </div><?php
					}?>
                </div>
            </div>
        </div>
        <?php
		?>
            <div class="breadcrumb_bg white">
                <div class="container">
                    <div class="row"><?php
					if(is_page_template( 'page_templates/tutorial.php' )) {?>
                        <div class="breadcrumbs" vocab="https://schema.org/" typeof="BreadcrumbList">
                        <!-- Breadcrumb NavXT 5.7.0 -->
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Macronimous." href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home">
                                <span property="name">Home</span>
                            </a>
                            <meta property="position" content="1">
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Resources." href="<?php echo esc_url( home_url( '/' ) ); ?>resources" class="post post-page">			
                                <span property="name">Resources</span>
                            </a>
                            <meta property="position" content="2">
    
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name">Tutorials</span>
                            <meta property="position" content="3">
                        </span>
                      </div>
                    
                    <?php
           	 	}
				else if(is_page_template( 'page_templates/scripts.php' )){?>
                 <div class="breadcrumbs" vocab="https://schema.org/" typeof="BreadcrumbList">
                        <!-- Breadcrumb NavXT 5.7.0 -->
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Macronimous." href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home">
                                <span property="name">Home</span>
                            </a>
                            <meta property="position" content="1">
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Resources." href="<?php echo esc_url( home_url( '/' ) ); ?>resources" class="post post-page">			
                                <span property="name">Resources</span>
                            </a>
                            <meta property="position" content="2">
    
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name"><?php echo get_the_title(get_the_ID());?></span>
                            <meta property="position" content="3">
                        </span>
                      </div>
				<?php }
				else if(is_page_template( 'page_templates/resource.php' )){?>
                 <div class="breadcrumbs" vocab="https://schema.org/" typeof="BreadcrumbList">
                        <!-- Breadcrumb NavXT 5.7.0 -->
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Macronimous." href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home">
                                <span property="name">Home</span>
                            </a>
                            <meta property="position" content="1">
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Resources." href="<?php echo esc_url( home_url( '/' ) ); ?>resources" class="post post-page">			
                                <span property="name">Resources</span>
                            </a>
                            <meta property="position" content="2">
    
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name"><?php echo get_the_title(get_the_ID());?></span>
                            <meta property="position" content="3">
                        </span>
                      </div>
				<?php }
				
				else{
					if($id=='745'){?>
                    <div class="breadcrumbs" vocab="https://schema.org/" typeof="BreadcrumbList">
                        <!-- Breadcrumb NavXT 5.7.0 -->
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Macronimous." href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home">
                                <span property="name">Home</span>
                            </a>
                            <meta property="position" content="1">
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Resources." href="<?php echo esc_url( home_url( '/' ) ); ?>resources" class="post post-page">			
                                <span property="name">Resources</span>
                            </a>
                            <meta property="position" content="2">
    
                        </span>
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name"><?php echo get_the_title(get_the_ID());?></span>
                            <meta property="position" content="3">
                        </span>
                      </div>
						
					<?php }
					
					else{
								 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bread-crumb') ) : endif;
					}
				}?>
                         <?php /*?><nav>
                            <div class="nav-wrapper">
                              <div class="col s12">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb">Home</a>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>resource/tutorials" class="breadcrumb">Tutorials</a>
                                <span class="breadcrumb"><?php the_title();?></span>
                              </div>
                            </div>
                          </nav><?php */
						?>
                    </div>
                </div>
            </div>