<?php
/**
 * Template Name: Get a Quote
 *
 * @package WordPress
 * @subpackage project name
 */

get_header();
	if (have_posts()) : while (have_posts()) : the_post(); 
	//$decoded = base64_decode($_GET['post_title']);
	$decoded = $_GET['post_title'];
	
	
	if (has_post_thumbnail( $post->ID ) ){
			$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
	} ?>
    
    <div class="banner inner_banner" <?php if($banner_image){?>style="background-image:url(<?php echo $banner_image[0];?>);"<?php }?>>
    	<div class="overlay"></div>
    	<div class="container">
        	<div class="row">
            	 <div class="banner_inner_bg">
                 	<div class="banner_text">
                        <h1 class="banner_title"><?php the_title();?></h1>
                    </div>
                 </div>
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
    <div class="get_a_quote">
    	<div class="container">
        	<div class="row">
    			<?php the_content();?>
            </div>
        </div>
    </div><?php
	/*echo wp_title();
	$page_slug = $decoded;
   	$page_datak = get_page_by_path($page_slug);
	$title_title = $page_datak->post_title;
	echo $prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
	echo $postid = url_to_postid( $prev_url  );
	echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';
	$args = array(
	'p' => $postid,
    'post_type' => 'page'
    // Arguments for your query.
);
 
// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ( $query->have_posts() ) {
 $title = array();
    // Start looping over the query results.
    while ( $query->have_posts() ) {
 
        $query->the_post();
		$title[] = get_the_title(get_the_ID());
		//the_title();
 
        // Contents of the queried post results go here.
 
    }
 
}
 
// Restore original post data.
wp_reset_postdata();*/
	 ?>
	
    <input type="hidden" id="post_name" value="<?php echo $decoded;?>" class="post_name"/>
    <?php /*?><script>
	jQuery(document).ready(function(){
  		alert(document.getElementById("type-of-employee").value = document.referrer);
	});
	</script><?php */?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>