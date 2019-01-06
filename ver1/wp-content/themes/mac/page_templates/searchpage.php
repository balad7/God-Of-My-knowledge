<?php
/**
 * Template Name: Site Search
 *
 * @package WordPress
 * @subpackage project name
 */
?>
<?php get_header(); ?>
 <?php include (TEMPLATEPATH . '/modules/page-title.php' ); ?>
<div class="about_content white">
        	<div class="container">
            	<div class="row">
                	<div class="col l12">
                    	<div class="about_content_text content-format">

    <?php get_search_form(); ?>
      </div>
  </div>
 </div>
 </div>
</div>


<?php get_footer(); ?>