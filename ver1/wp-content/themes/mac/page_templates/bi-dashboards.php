<?php
/**
 * Template Name: BiDashboard
 *
 * @package WordPress
 * @subpackage project name
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php include (TEMPLATEPATH . '/modules/page-title.php' ); ?>
		<div class="common_content white content-format bi_dashboard">
        	<div class="container">
            	<div class="row">
                	<div class="col l12">
                    	<div class="common_content_text">
                        	<?php the_content();
							/*$my_postid = get_the_ID();//This is page id or post id
                            $content_post = get_post($my_postid);
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
							  //echo replace_content(get_the_content(get_the_ID()));
							$current = $post->ID;
							$parent = $post->post_parent;
							//echo 'Parent'.get_the_title($parent);
							//echo '<br>';
							$grandparent_get = get_post($parent);
							$grandparent = $grandparent_get->post_parent;*/
							//echo 'Grandparent'.get_the_title($grandparent);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
