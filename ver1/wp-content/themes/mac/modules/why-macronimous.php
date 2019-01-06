<?php $titan = TitanFramework::getInstance( 'mac' );?>
<div class="why_choose_us relative_4 relative"  id="why_us" <?php if($titan->getOption( 'macronimous_background_image' )){?>style="background-image:url(<?php  echo wp_get_attachment_url( $titan->getOption( 'macronimous_background_image' ) ); ?>);"<?php }?>>
        	<div class="overlay"></div>
        	<div class="container">
            	<div class="row"><?php
					 if($titan->getOption( 'macronimous_background_image_title' )) {?>
                        <div class="why_coose_top center"><?php
							if($titan->getOption( 'macronimous_background_image_title' )){?>
                            	<h2 class="section_title upper_case white-text"><?php echo $titan->getOption( 'macronimous_background_image_title' );?></h2><?php
							}?>
                        </div><?php
					 }
					 $args = array(
						'post_type' => 'why-choose-us',
						'posts_per_page' => -1,
						'post_status' => 'publish',
						'orderby' => 'menu_order',
						'order' => 'ASC',
					);
					$loop = new WP_Query( $args );
					if($loop->found_posts > 0) {?>
                        <div class="why_choose_info col l12"><?php
                        	while ( $loop->have_posts() ) : $loop->the_post();?>
                                <div class="col l6 m6 s12"><?php
                                    if (has_post_thumbnail( $post->ID ) ){
                                        $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
                                    <div class="why_choose_icons">
                                        <img src="<?php echo $featured_image[0];?>" width="<?php echo $featured_image[1];?>" height="<?php echo $featured_image[2];?>" alt="<?php echo get_the_title(get_the_ID());?>">
                                    </div><?php
                                    }?>
                                    <div class="why_choose_info_text">
                                        <h6 class="why_choose_title"><?php the_title();?></h6><?php
                                        the_content();?>
                                    </div>
                                </div><?php
                        	endwhile; wp_reset_query();?>
                        </div>	<?php
					}?>
                </div>
            </div>
        </div>
