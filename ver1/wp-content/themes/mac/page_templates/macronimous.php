<?php
/**
 * Template Name: Why Macronimous
 *
 * @package WordPress
 * @subpackage project name
 */

get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post();
$titan = TitanFramework::getInstance( 'mac' ); ?>
		<?php include (TEMPLATEPATH . '/modules/page-title.php' ); ?>
		<div class="common_content white content-format">
        	<div class="container">
            	<div class="row">
                	<div class="col l12">
                    	<div class="common_content_text">
                        	<?php the_content();
							$current = $post->ID;
							$parent = $post->post_parent;
							//echo 'Parent'.get_the_title($parent);
							//echo '<br>';
							$grandparent_get = get_post($parent);
							$grandparent = $grandparent_get->post_parent;
							//echo 'Grandparent'.get_the_title($grandparent);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include (TEMPLATEPATH . '/modules/why-macronimous.php' ); ?>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>