<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/modules/page-title.php' ); ?>
<div class="about_content white">
 <div class="container">
    <div class="row">
        <div class="col l12">
            <div class="about_content_text content-format">

 <?php get_search_form(); ?>

	<?php if (have_posts()) : ?>
     

		<h2>Search Results</h2>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h2>

				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>
      </div>
	</div>
  </div>
 </div>
</div>


<?php get_footer(); ?>
