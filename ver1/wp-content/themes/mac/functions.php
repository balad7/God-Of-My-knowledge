<?php
	
	require_once( get_stylesheet_directory(). '/titan-framework/titan-framework-checker.php' );
	require_once('ajax.php'); //
	require_once('ajax-resource-post.php');  //ajax-resource //
	require_once('ajax-main_resource-post.php'); 
	add_action('wp_head','set_ajaxurl');
	function set_ajaxurl() { ?>
		<script type="text/javascript">
            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
        </script><?php
	}
	// include styles & scripts
	function mytheme_enqueue_style() {
		wp_register_style('materialize', get_stylesheet_directory_uri() . '/assets/css/materialize.css');
		wp_register_style('component-masonry-css', get_stylesheet_directory_uri() . '/assets/css/component-masonry.css');
		wp_register_style('slicknav', get_stylesheet_directory_uri() . '/assets/css/slicknav.css');
		wp_register_style('font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.css');
		wp_register_style('custom', get_stylesheet_directory_uri() . '/assets/css/custom.css', array( 'component-masonry-css' ));
		wp_register_style('mac-common-css', get_stylesheet_directory_uri() . '/assets/css/mac-common.css', array( 'stylesheet' ));
		wp_register_style('ui-design', get_stylesheet_directory_uri() . '/assets/css/ui-design.css');
		
		//wp_register_style('slicknav', get_stylesheet_directory_uri() . '/assets/css/slicknav.css', array( 'font-awesome' ));
		wp_register_style('multiscroll', get_stylesheet_directory_uri() . '/assets/css/jquery.multiscroll.css', array( 'slicknav' ));
		wp_register_style('mCustomScrollbar', get_stylesheet_directory_uri() . '/assets/css/jquery.mCustomScrollbar.css', array( 'multiscroll' ));
		wp_register_style('bxslider_css', get_stylesheet_directory_uri() . '/assets/css/jquery.bxslider.css');
	
	
		wp_register_script('modernizr', get_stylesheet_directory_uri() . '/assets/js/modernizr.custom.js', array('jquery'), '', true);
		wp_register_script('materialize', get_stylesheet_directory_uri() . '/assets/js/materialize.min.js', array('jquery'), '', true);
		wp_register_script('masonry', get_stylesheet_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), '', true);
		wp_register_script('imagesloaded', get_stylesheet_directory_uri() . '/assets/js/imagesloaded.js', array('jquery'), '', true);
		wp_register_script('classie', get_stylesheet_directory_uri() . '/assets/js/classie.js', array('jquery'), '', true);
		//wp_register_script('portfolio', get_stylesheet_directory_uri() . '/assets/js/portfolio-jquery.js', array('jquery'), '', true);
		wp_register_script('portfolio', get_stylesheet_directory_uri() . '/assets/js/jquery.shuffle.min.js', array('jquery'), '', true);
		wp_register_script('portfolio_help', get_stylesheet_directory_uri() . '/assets/js/portfolio_help.js', array('jquery'), '', true);
		wp_register_script('ajax-js', get_stylesheet_directory_uri() . '/assets/js/ajax.js', array('jquery'), '', true);
		wp_register_script('ajax-resource', get_stylesheet_directory_uri() . '/assets/js/ajax-resource.js', array('jquery'), '', true);
		wp_register_script('ajax-main-resource', get_stylesheet_directory_uri() . '/assets/js/ajax-main-resource.js', array('jquery'), '', true); //
		wp_register_script('tweetie-min', get_stylesheet_directory_uri() . '/assets/js/tweetie.min.js', array('jquery'), '', true);
		wp_register_script('mac-common-js', get_stylesheet_directory_uri() . '/assets/js/mac-common.js', array('jquery'), '', true);
		wp_register_script('multiscroll-js', get_stylesheet_directory_uri() . '/assets/js/jquery.multiscroll.js', array('jquery'), '', true);
		wp_register_script('menu-js', get_stylesheet_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), '', true);
		wp_register_script('mCustomScrollbar-js', get_stylesheet_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), '', true);
		wp_register_script('home-new-js', get_stylesheet_directory_uri() . '/assets/js/home-new-js.js', array('jquery'), '', true);
		wp_register_script('cloudflare', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'), '', true);
		wp_register_script('stacktables', get_stylesheet_directory_uri() . '/assets/js/stacktable.js', array('jquery'), '', true);
		wp_register_script('mobile_ui', get_stylesheet_directory_uri() . '/assets/js/mobile_ui.js', array('jquery'), '', true);
		wp_register_script('bxslider_js', get_stylesheet_directory_uri() . '/assets/js/jquery.bxslider.min.js', array('jquery'), '', true);
		wp_register_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true);
	
		//wp_enqueue_style('wpb-google-fonts1');
		wp_enqueue_style('materialize');
		
		wp_enqueue_style('slicknav');
		if(is_page_template( 'page_templates/testimonials.php' )){
			wp_enqueue_style('component-masonry-css');
		}
		wp_enqueue_style('mac-common-css');
		if(is_page_template( 'page_templates/home-special.php' )){
			
			wp_enqueue_style('multiscroll');
			wp_enqueue_style('mCustomScrollbar');
		}
		
		wp_enqueue_style('custom');
		wp_enqueue_style('ui-design');
		wp_enqueue_style('font-awesome');
		wp_enqueue_style('bxslider_css');
		
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('modernizr');
		wp_enqueue_script('materialize');
		if(is_page_template( 'page_templates/testimonials.php' )){
			wp_enqueue_script('masonry');
		}
		if(is_page_template( 'page_templates/home-special.php' )){
			wp_enqueue_script('multiscroll-js');
			wp_enqueue_script('mCustomScrollbar-js');
			
			wp_enqueue_script('home-new-js');
		}
		wp_enqueue_script('menu-js');
		wp_enqueue_script('imagesloaded');
		wp_enqueue_script('classie');
		wp_enqueue_script('portfolio');	
		wp_enqueue_script('ajax-js');
		wp_enqueue_script('ajax-resource');
		wp_enqueue_script('ajax-main-resource');
		wp_enqueue_script('tweetie-min');
		wp_enqueue_script('cloudflare');
		wp_enqueue_script('mac-common-js');
		wp_enqueue_script('mobile_ui');
		wp_enqueue_script('bxslider_js');
		wp_enqueue_script('portfolio_help');
		wp_enqueue_script('custom');

	}
	add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style');
	/*function set_js_var() {
		$translation_array = array( 'template_directory_uri' => get_template_directory_uri());
		wp_localize_script( 'jquery', 'my_data', $translation_array );
	}*/
	
	function set_js_var() {
		$translation_array = array( 'template_directory_uri' => get_template_directory_uri());
		wp_localize_script( 'jquery', 'my_data', $translation_array );
	} 
	add_action('wp_enqueue_scripts','set_js_var');

	add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name' => 'Sidebar Widgets',
			'id'   => 'sidebar-widgets',
			'description'   => 'These are widgets for the sidebar.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>'
		));
		register_sidebar(array(
			'name' => 'Home Widget',
			'id'   => 'home-widgets',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		));
		register_sidebar(array(
			'name' => 'Social Share',
			'id'   => 'social-share',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		));
		register_sidebar(array(
			'name' => 'Bread Crumb',
			'id'   => 'bread-crumb',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		));
		register_sidebar(array(
			'name' => 'menu',
			'id'   => 'menu',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		));
	}

	/* Function to add menu to the theme */
	function wp_register_theme_menu() {
		register_nav_menu( 'primary', 'Main Navigation' );
		/*register_nav_menu( 'footer', 'Footer Navigation' );
		register_nav_menu( 'mobile_menu', 'Mobile Navigation' );
		register_nav_menu( 'service1', 'service1 Navigation' );
		register_nav_menu( 'service2', 'service2 Navigation' );
		register_nav_menu( 'service3', 'service3 Navigation' );
		register_nav_menu( 'service4', 'service4 Navigation' );
		register_nav_menu( 'service5', 'service5 Navigation' );
		register_nav_menu( 'service6', 'service6 Navigation' );
		register_nav_menu( 'service7', 'service7 Navigation' );
		register_nav_menu( 'service8', 'service8 Navigation' );
		register_nav_menu( 'service9', 'service9 Navigation' );
		register_nav_menu( 'service10', 'service10 Navigation' );*/
	}
	add_action( 'init', 'wp_register_theme_menu' );
	

	/* Function to check page/post has featured */
	function wp_theme_has_featured_posts() {
		return ! is_paged() && (bool) wp_theme_get_featured_posts();
	}

	/*To Add featured image*/
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'medium', 470, 290, array( 'left', 'top' ) ); // Hard crop left top
	add_image_size( 'large', 800, 800, array( 'left', 'top' ) ); // Hard crop left top
	add_image_size( '267_267_img', 267, 267, array( 'left', 'top' ) ); // Hard crop left top
	add_image_size( '791_462_img', 791, 462, array( 'left', 'top' ) ); // Hard crop left top
	add_image_size( '354_195_img', 354, 195, array( 'left', 'top' ) ); // Hard crop left top
	add_image_size( '90_90_img', 9999, 90, array( 'left', 'top' ) ); // Hard crop left top
	add_image_size( '800_400_img', 800, 400, array( 'left', 'top' ) ); // Hard crop left top
	add_image_size( '317_369_img', 317, 369, array( 'left', 'top' ) ); // Hard crop left top
	add_image_size( '350_img', 580, false); // Hard crop left top
function wpd_testimonials_query( $query ){
    if( ! is_admin()
        && $query->is_post_type_archive( 'products' )
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', -1 );
			$query->set('orderby', 'menu_order');
    $query->set('order', 'ASC');
    }
}
add_action( 'pre_get_posts', 'wpd_testimonials_query' );



	// retrieves the attachment ID from the file URL
function pippin_get_image_id($image_url) {
	global $wpdb;
	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
}
	/*Permalink by slug*/
	function get_permalink_by_slug( $slug ) {
		$obj = get_page_by_path( $slug );
		return get_permalink( $obj->ID );
	}

	/*Get page id by Slugs*/
	function get_ids_by_slugs($slugs) {
		 $slugs = preg_split("/,s?/", $slugs);
		 $ids = array();
		 foreach($slugs as $page_slug) {
			  $page = get_page_by_path($page_slug);
			  array_push($ids, $page->ID);
		 }
		 return implode(",", $ids);
	}

	// custom excerpt ellipses
	function new_excerpt_more( $more ) {
		return '<a href="'.get_permalink($post->ID).'" class="">'.'...'.'</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	
	// custom excerpt length
	function custom_excerpt_length( $length ) {
		return 25;
	}
	
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
	// Numbered Pagination
	if ( !function_exists( 'wpex_pagination' ) ) {
		
		function wpex_pagination() {
			
			$prev_arrow = '&lt;';
			$next_arrow = '&gt;';
			
			global $wp_query;
			$total = $wp_query->max_num_pages;
			$big = 999999999; // need an unlikely integer
			if( $total > 1 )  {
				 if( !$current_page = get_query_var('paged') )
					 $current_page = 1;
				 if( get_option('permalink_structure') ) {
					 $format = 'page/%#%/';
				 } else {
					 $format = '&paged=%#%';
				 }
				echo paginate_links(array(
					'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'		=> $format,
					'current'		=> max( 1, get_query_var('paged') ),
					'total' 		=> $total,
					'mid_size'		=> 3,
					'type' 			=> 'list',
					'prev_text'		=> $prev_arrow,
					'next_text'		=> $next_arrow,
				 ) );
			}
		}
		
	}
	
	// get the the role object
	$role_object = get_role( 'editor' );
	
	// add $cap capability to this role object
	$role_object->add_cap( 'edit_theme_options' );
	
	//require_once( 'admin/theme-options.php' );
	function edit_page_title() {
		global $post, $title, $action, $current_screen;
	
		/*if($current_screen->post_type == 'sponsors' && $action != 'edit' && $current_screen->taxonomy != 'sponsors_categories') {
			$title = 'Add New Sponsors';           
		}*/
		return $title;  
	}
	add_action( 'admin_title', 'edit_page_title' );
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
		register_post_type( 'banner',   
			array(
				'labels' => array(
				'name' => __( 'Banner' ),
				'singular_name' => __( 'Banner' ),
				'add_new'		=> 'Add New',
				'add_new_item'	=> 'Add New Banner',
				'edit_item'		=> 'Edit Banner',
			),
			'public' => true,
			'hierarchical'  => true,
			'show_in_menu' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'banner'),
			'supports' => array( 'title', 'page-attributes','thumbnail' )
			)
		);
		flush_rewrite_rules();
		register_post_type( 'products',   
			array(
				'labels' => array(
				'name' => __( 'Products' ),
				'singular_name' => __( 'Product' ),
				'add_new'		=> 'Add New',
				'add_new_item'	=> 'Add New Product',
				'edit_item'		=> 'Edit Product',
			),
			'public' => true,
			'hierarchical'  => true,
			'show_in_menu' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'products'),
			'supports' => array( 'title', 'page-attributes','thumbnail','editor','excerpt' )
			)
		);
		flush_rewrite_rules();
		register_post_type( 'testimonial',   
			array(
				'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' ),
				'add_new'		=> 'Add New',
				'add_new_item'	=> 'Add New Testimonial',
				'edit_item'		=> 'Edit Testimonial',
			),
			'public' => true,
			'hierarchical'  => true,
			'show_in_menu' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'testimonial'),
			'supports' => array( 'title', 'editor', 'page-attributes','thumbnail','revisions'  )
			)
		);
		register_post_type( 'resources',   
			array(
				'labels' => array(
				'name' => __( 'Resources' ),
				'singular_name' => __( 'Resource' ),
				'add_new'		=> 'Add New',
				'add_new_item'	=> 'Add New Resource',
				'edit_item'		=> 'Edit Resource',
			),
			'public' => true,
			'hierarchical'  => true,
			'show_in_menu' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'resources'),
			'supports' => array( 'title', 'editor', 'page-attributes','thumbnail','comments' ,'revisions' )
			)
		);
		flush_rewrite_rules();
		register_taxonomy(
				'resources-category',
			array(
				'resources',
			),
			array(
				'labels'            => array(
					'name'              => _x('Resources Category', 'Resources', 'text_domain'),
					'singular_name'     => _x('Resources Category', 'Resources', 'text_domain'),
					'menu_name'         => __('Resources Category', 'text_domain'),
					'all_items'         => __('All Resources Categories', 'text_domain'),
					'edit_item'         => __('Edit Resources Category', 'text_domain'),
					'view_item'         => __('View Resources Category', 'text_domain'),
					'update_item'       => __('Update Resources Category', 'text_domain'),
					'add_new_item'      => __('Add New Resources Category', 'text_domain'),
					'new_item_name'     => __('New Resources Category', 'text_domain'),
					'parent_item'       => __('Parent Resources Category', 'text_domain'),
					'parent_item_colon' => __('Parent Resources Category:', 'text_domain'),
					'search_items'      => __('Search Resources Category', 'text_domain'),
				),
				'show_admin_column' => true,
				'hierarchical'  => true,
				'public'        => true,
				'has_archive'   => true,
				'rewrite'           => array(
					'slug' => 'resources',
				),
			)
		);
		register_post_type( 'our-clients',   
			array(
				'labels' => array(
				'name' => __( 'Our Clients' ),
				'singular_name' => __( 'Client' ),
				'add_new'		=> 'Add New',
				'add_new_item'	=> 'Add New Client',
				'edit_item'		=> 'Edit Client',
			),
			'public' => true,
			'hierarchical'  => true,
			'show_in_menu' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'our-clients'),
			'supports' => array( 'title',  'page-attributes','thumbnail' ,'revisions' )
			)
		);
		flush_rewrite_rules();
		register_post_type( 'why-choose-us',   
			array(
				'labels' => array(
				'name' => __( 'Why Choose Us?' ),
				'singular_name' => __( 'Client' ),
				'add_new'		=> 'Add New',
				'add_new_item'	=> 'Add New',
				'edit_item'		=> 'Edit',
			),
			'public' => true,
			'hierarchical'  => true,
			'show_in_menu' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'why-choose-us'),
			'supports' => array( 'title',  'page-attributes','thumbnail','editor','revisions'  )
			)
		);
		flush_rewrite_rules();
		register_post_type( 'portfolio',
				array(
					'labels' => array(
					'name' => __( 'Portfolio' ),
					'singular_name' => __( 'Portfolio' ),
					'add_new'		=> 'Add New',
					'add_new_item'	=> 'Add New Portfolio',
					'edit_item'		=> 'Edit Portfolio',
				),
				'public' => true,
				'hierarchical'  => true,
				'show_in_menu' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'portfolio'),
				'supports'      =>  array( 'title',  'order', 'thumbnail', 'editor','page-attributes','revisions'  )
				)
			);
			flush_rewrite_rules();
			register_taxonomy(
				'project-type',
			array(
				'portfolio',
			),
			array(
				'labels'            => array(
					'name'              => _x('Project Type', 'Portfolio', 'text_domain'),
					'singular_name'     => _x('Project Type', 'Portfolio', 'text_domain'),
					'menu_name'         => __('Project Type', 'text_domain'),
					'all_items'         => __('All Project Type', 'text_domain'),
					'edit_item'         => __('Edit Project Type', 'text_domain'),
					'view_item'         => __('View Project Type', 'text_domain'),
					'update_item'       => __('Update Project Type', 'text_domain'),
					'add_new_item'      => __('Add New Project Type', 'text_domain'),
					'new_item_name'     => __('New Project Type', 'text_domain'),
					'parent_item'       => __('Parent Project Type', 'text_domain'),
					'parent_item_colon' => __('Parent Project Type:', 'text_domain'),
					'search_items'      => __('Search Project Type', 'text_domain'),
				),
				'show_admin_column' => true,
				'hierarchical'  => true,
				'public'        => true,
				'has_archive'   => true,
				'rewrite'           => array(
					'slug' => 'project-type',
				),
			)
		);
		register_taxonomy(
				'technology',
			array(
				'portfolio',
			),
			array(
				'labels'            => array(
					'name'              => _x('Technology', 'Portfolio', 'text_domain'),
					'singular_name'     => _x('Technology', 'Portfolio', 'text_domain'),
					'menu_name'         => __('Technology', 'text_domain'),
					'all_items'         => __('All Technology', 'text_domain'),
					'edit_item'         => __('Edit Technology', 'text_domain'),
					'view_item'         => __('View Technology', 'text_domain'),
					'update_item'       => __('Update Technology', 'text_domain'),
					'add_new_item'      => __('Add New Technology', 'text_domain'),
					'new_item_name'     => __('New Technology', 'text_domain'),
					'parent_item'       => __('Parent Technology', 'text_domain'),
					'parent_item_colon' => __('Parent Technology:', 'text_domain'),
					'search_items'      => __('Search Technology', 'text_domain'),
				),
				'show_admin_column' => true,
				'hierarchical'  => true,
				'public'        => true,
				'has_archive'   => true,
				'rewrite'           => array(
					'slug' => 'technology',
				),
			)
		);
		flush_rewrite_rules();
		register_post_type( 'faq',
				array(
					'labels' => array(
					'name' => __( 'FAQs' ),
					'singular_name' => __( 'FAQ' ),
					'add_new'		=> 'Add New',
					'add_new_item'	=> 'Add New FAQ',
					'edit_item'		=> 'Edit FAQ',
				),
				'public' => true,
				'hierarchical'  => true,
				'show_in_menu' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'faq'),
				'supports'      =>  array( 'title',  'order', 'thumbnail', 'editor','page-attributes','revisions'  )
				)
			);
			flush_rewrite_rules();
			register_taxonomy(
				'faq-category',
			array(
				'faq',
			),
			array(
				'labels'            => array(
					'name'              => _x('FAQs Category', 'FAQs', 'text_domain'),
					'singular_name'     => _x('FAQs Category', 'FAQs', 'text_domain'),
					'menu_name'         => __('FAQs Category', 'text_domain'),
					'all_items'         => __('All Category', 'text_domain'),
					'edit_item'         => __('Edit Category', 'text_domain'),
					'view_item'         => __('View Category', 'text_domain'),
					'update_item'       => __('Update Category', 'text_domain'),
					'add_new_item'      => __('Add New FAQs Category', 'text_domain'),
					'new_item_name'     => __('New FAQs Category Name', 'text_domain'),
					'parent_item'       => __('Parent FAQs Category', 'text_domain'),
					'parent_item_colon' => __('Parent FAQs Category:', 'text_domain'),
					'search_items'      => __('Search FAQs Category', 'text_domain'),
				),
				'show_admin_column' => true,
				'hierarchical'  => true,
				'public'        => true,
				'has_archive'   => true,
				'rewrite'           => array(
					'slug' => 'Faq-category',
				),
			)
		);
		flush_rewrite_rules();
		register_post_type( 'tutorial',   
			array(
				'labels' => array(
				'name' => __( 'Tutorials' ),
				'singular_name' => __( 'Tutorial' ),
				'add_new'		=> 'Add New',
				'add_new_item'	=> 'Add New Tutorial',
				'edit_item'		=> 'Edit Tutorials',
			),
			'public' => true,
			'hierarchical'  => true,
			'show_in_menu' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'tutorial'),
			'supports' => array( 'title', 'editor', 'page-attributes','thumbnail','comments','revisions'  )
			)
		);
		flush_rewrite_rules();
		register_post_type( 'script',   
			array(
				'labels' => array(
				'name' => __( 'Scripts' ),
				'singular_name' => __( 'Script' ),
				'add_new'		=> 'Add New',
				'add_new_item'	=> 'Add New Script',
				'edit_item'		=> 'Edit Script',
			),
			'public' => true,
			'hierarchical'  => true,
			'show_in_menu' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'script'),
			'supports' => array( 'title', 'editor', 'page-attributes','thumbnail','comments' ,'revisions' )
			)
		);
		flush_rewrite_rules();
		register_taxonomy(
				'script-category',
			array(
				'script',
			),
			array(
				'labels'            => array(
					'name'              => _x('Script Category', 'Scripts', 'text_domain'),
					'singular_name'     => _x('Script Category', 'Scripts', 'text_domain'),
					'menu_name'         => __('Script Category', 'text_domain'),
					'all_items'         => __('All Script Categories', 'text_domain'),
					'edit_item'         => __('Edit Script Category', 'text_domain'),
					'view_item'         => __('View Script Category', 'text_domain'),
					'update_item'       => __('Update Script Category', 'text_domain'),
					'add_new_item'      => __('Add New Script Category', 'text_domain'),
					'new_item_name'     => __('New Script Category', 'text_domain'),
					'parent_item'       => __('Parent Script Category', 'text_domain'),
					'parent_item_colon' => __('Parent Script Category:', 'text_domain'),
					'search_items'      => __('Search Script Category', 'text_domain'),
				),
				'show_admin_column' => true,
				'hierarchical'  => true,
				'public'        => true,
				'has_archive'   => true,
				'rewrite'           => array(
					'slug' => 'script-category',
				),
			)
		);
		register_post_type( 'case-studies',   
			array(
				'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __( 'Case Studies' ),
				'add_new'		=> 'Add New',
				'add_new_item'	=> 'Add New Case Studies',
				'edit_item'		=> 'Edit Case Studies',
			),
			'public' => true,
			'hierarchical'  => true,
			'show_in_menu' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'case-studies'),
			'supports' => array( 'title', 'editor', 'page-attributes','thumbnail','comments','revisions'  )
			)
		);
		 
		
	}
	function change_default_title( $title ){
		 $screen = get_current_screen();
		 if  ( 'testimonial' == $screen->post_type ) {
			  $title = 'Enter person name here';
		 }
		 if  ( 'our-client' == $screen->post_type ) {
			  $title = 'Enter client name here';
		 }
		 if  ( 'faq' == $screen->post_type ) {
			  $title = 'Enter faq title here';
		 }
		 if  ( 'tutorial' == $screen->post_type ) {
			  $title = 'Enter tutorial title here';
		 }
		 if  ( 'script' == $screen->post_type ) {
			  $title = 'Enter scripts title here';
		 }
		 if  ( 'case-studies' == $screen->post_type ) {
			  $title = 'Enter Case Studies title here';
		 }
		 return $title;
	}
	
	add_filter( 'enter_title_here', 'change_default_title' ); 
	/*function create_taxonomies() {
    register_taxonomy('category', array('post'), array(
        'labels' => array(
            'name' => 'Categories'
        ),
        'show_ui' => true,
        'show_tagcloud' => false,
        'rewrite' => array('slug' => 'blog')
    ));
}
add_action('init', 'create_taxonomies');*/
	function taxonomy_slug_rewrite($wp_rewrite) {
    $rules = array();
    // get all custom taxonomies
    $taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
    // get all custom post types
    $post_types = get_post_types(array('public' => true, '_builtin' => false), 'objects');
    
    foreach ($post_types as $post_type) {
        foreach ($taxonomies as $taxonomy) {
	    
            // go through all post types which this taxonomy is assigned to
            foreach ($taxonomy->object_type as $object_type) {
                
                // check if taxonomy is registered for this custom type
                if ($object_type == $post_type->rewrite['slug']) {
		    
                    // get category objects
                    $terms = get_categories(array('type' => $object_type, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0));
		    
                    // make rules
                    foreach ($terms as $term) {
                        $rules[$object_type . '/' . $term->slug . '/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug;
                    }
                }
            }
        }
    }
    // merge with global rules
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'taxonomy_slug_rewrite');
	// menu
	class header_right_themeslug_walker_nav_menu extends Walker_Nav_Menu {
	 // add classes to ul sub-menus
	function start_lvl( &$output, $depth, $item ) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		
		$classes = array(
			'dl-submenu',
			( $display_depth >=2 ? 'multi_column' : '' ),
			
			'menu-depth-' . $display_depth
			);

			/*$classes = array(
				'sub-menu',
				( $display_depth == 0  ? 'primary-nav' : '' ),
				( $display_depth == 1  ? 'sub-menu' : '' ),
				( $display_depth == 2  ? 'sub-menu' : '' ),
				'' . $display_depth
			);*/
		
		$class_names = implode( ' ', $classes );
		
	  		if($display_depth ==1){
				//$output .= "\n" . $indent . '<div class="sub_menu_bg">' . "\n";
				$output .= "\n" . $indent . '' . "\n";
			}
			
			
			if($item->custom) {
			$output.= '<ul><li>';
			$set_col = $item->custom;
			$class_names.=' col-'.$item->custom;
		}
		// build html
		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
		
		
		
		
	}
			 

	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = !empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
 
		// add main/sub classes to li's and links
	function start_el( &$output, $item, $depth, $args ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
	  
		// depth dependent classes
		$depth_classes = array(
			( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
			( $depth >=2 ? 'sub-sub-menu-item' : '' ),
			( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			'menu-item-depth-' . $depth
		);
		
		if($item->custom) {
			$depth_classes = array(
				'menu-item-depth-' . $item->custom
			);
		}
		
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
	   
		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item )				) );
		
	$has_children='';
	if ( $args->has_children ) {
		$has_children = 'menu-has-children';
	}

	// build html
	$output.= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $has_children . ' '.$class_names.'">';	
//	$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . '">';
	

	
		
		 		if(in_array('current-menu-item', $item->classes)) {
                    $active = 'active';
                }
				 if(in_array('current_page_item', $item->classes)) {
                    $active = 'active';
                }
				if(in_array('current-menu-ancestor', $item->classes)) {
                    $active = 'active';
                }
		
//			$output .= $indent . '<li>';

			// link attributes
			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
			$attributes .= ' class="menu-link ' . $active  . '"';
			
			/*We add the icons here*/
       
		
			$item_output = sprintf( '%1$s<a%2$s>'.$img.'%3$s%4$s%5$s</a>%6$s',
				$args->before,
				$attributes,
				$args->link_before ,
				apply_filters( 'the_title', $item->title, $item->ID ),
				$args->link_after,
				$args->after
			);
		  
			// build html
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			
			
		}
		
		
	} 
	
	//Mobile Menu
	// menu
	class mob_right_themeslug_walker_nav_menu extends Walker_Nav_Menu {
	 // add classes to ul sub-menus
	function start_lvl( &$output, $depth ) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'dl-submenu',
			( $display_depth >=1 ? 'dl-submenu' : '' ),
			'menu-depth-' . $display_depth
			);

			/*$classes = array(
				'sub-menu',
				( $display_depth == 0  ? 'primary-nav' : '' ),
				( $display_depth == 1  ? 'sub-menu' : '' ),
				( $display_depth == 2  ? 'sub-menu' : '' ),
				'' . $display_depth
			);*/
		
		$class_names = implode( ' ', $classes );
		
	  
		// build html
		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}
			 

	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = !empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
 
		// add main/sub classes to li's and links
	function start_el( &$output, $item, $depth, $args ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
	  
		// depth dependent classes
		$depth_classes = array(
			( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
			( $depth >=2 ? 'sub-sub-menu-item' : '' ),
			( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			'menu-item-depth-' . $depth
		);
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
	   
		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item )				) );
		
	$has_children='';
	if ( $args->has_children ) {
		$has_children = 'menu-item-has-children';
	}
	// build html
	$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $has_children . '">';	
//	$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . '">';	
		
		 		if(in_array('current-menu-item', $item->classes)) {
                    $active = 'active';
                }
				 if(in_array('current_page_item', $item->classes)) {
                    $active = 'active';
                }
				if(in_array('current-menu-ancestor', $item->classes)) {
                    $active = 'active';
                }
		
//			$output .= $indent . '<li>';

			// link attributes
			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
			$attributes .= ' class="menu-link ' . $active . '"';
			
			/*We add the icons here*/
       
		
			$item_output = sprintf( '%1$s<a%2$s>'.$img.'%3$s%4$s%5$s</a>%6$s',
				$args->before,
				$attributes,
				$args->link_before ,
				apply_filters( 'the_title', $item->title, $item->ID ),
				$args->link_after,
				$args->after
				
			);
		  
			// build html
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	} 
	
	
	
	/*
 * Saves new field to postmeta for navigation
 */
add_action('wp_update_nav_menu_item', 'custom_nav_update',10, 3);
function custom_nav_update($menu_id, $menu_item_db_id, $args ) {
    if ( is_array($_REQUEST['menu-item-custom']) ) {
        $custom_value = $_REQUEST['menu-item-custom'][$menu_item_db_id];
        update_post_meta( $menu_item_db_id, '_menu_item_custom', $custom_value );
    }
}

/*
 * Adds value of new field to $item object that will be passed to     Walker_Nav_Menu_Edit_Custom
 */
add_filter( 'wp_setup_nav_menu_item','custom_nav_item' );
function custom_nav_item($menu_item) {
    $menu_item->custom = get_post_meta( $menu_item->ID, '_menu_item_custom', true );
    return $menu_item;
}

add_filter( 'wp_edit_nav_menu_walker', 'custom_nav_edit_walker',10,2 );
function custom_nav_edit_walker($walker,$menu_id) {
    return 'Walker_Nav_Menu_Edit_Custom';
}

/**
 * Copied from Walker_Nav_Menu_Edit class in core
 * 
 * Create HTML list of nav menu input items.
 *
 * @package WordPress
 * @since 3.0.0
 * @uses Walker_Nav_Menu
 */
class Walker_Nav_Menu_Edit_Custom extends Walker_Nav_Menu  {
/**
 * @see Walker_Nav_Menu::start_lvl()
 * @since 3.0.0
 *
 * @param string $output Passed by reference.
 */
function start_lvl(&$output) {}

/**
 * @see Walker_Nav_Menu::end_lvl()
 * @since 3.0.0
 *
 * @param string $output Passed by reference.
 */
function end_lvl(&$output) {
}

/**
 * @see Walker::start_el()
 * @since 3.0.0
 *
 * @param string $output Passed by reference. Used to append additional content.
 * @param object $item Menu item data object.
 * @param int $depth Depth of menu item. Used for padding.
 * @param object $args
 */
function start_el(&$output, $item, $depth, $args) {
    global $_wp_nav_menu_max_depth;
    $_wp_nav_menu_max_depth = $depth > $_wp_nav_menu_max_depth ? $depth : $_wp_nav_menu_max_depth;

    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    ob_start();
    $item_id = esc_attr( $item->ID );
    $removed_args = array(
        'action',
        'customlink-tab',
        'edit-menu-item',
        'menu-item',
        'page-tab',
        '_wpnonce',
    );

    $original_title = '';
    if ( 'taxonomy' == $item->type ) {
        $original_title = get_term_field( 'name', $item->object_id, $item->object, 'raw' );
        if ( is_wp_error( $original_title ) )
            $original_title = false;
    } elseif ( 'post_type' == $item->type ) {
        $original_object = get_post( $item->object_id );
        $original_title = $original_object->post_title;
    }

    $classes = array(
        'menu-item menu-item-depth-' . $depth,
        'menu-item-' . esc_attr( $item->object ),
        'menu-item-edit-' . ( ( isset( $_GET['edit-menu-item'] ) && $item_id == $_GET['edit-menu-item'] ) ? 'active' : 'inactive'),
    );

    $title = $item->title;

    if ( ! empty( $item->_invalid ) ) {
        $classes[] = 'menu-item-invalid';
        /* translators: %s: title of menu item which is invalid */
        $title = sprintf( __( '%s (Invalid)' ), $item->title );
    } elseif ( isset( $item->post_status ) && 'draft' == $item->post_status ) {
        $classes[] = 'pending';
        /* translators: %s: title of menu item in draft status */
        $title = sprintf( __('%s (Pending)'), $item->title );
    }

    $title = empty( $item->label ) ? $title : $item->label;

    ?>
    <li id="menu-item-<?php echo $item_id; ?>" class="<?php echo implode(' ', $classes ); ?>">
        <dl class="menu-item-bar">
            <dt class="menu-item-handle">
                <span class="item-title"><?php echo esc_html( $title ); ?></span>
                <span class="item-controls">
                    <span class="item-type"><?php echo esc_html( $item->type_label ); ?></span>
                    <span class="item-order hide-if-js">
                        <a href="<?php
                            echo wp_nonce_url(
                                add_query_arg(
                                    array(
                                        'action' => 'move-up-menu-item',
                                        'menu-item' => $item_id,
                                    ),
                                    remove_query_arg($removed_args, admin_url( 'nav-menus.php' ) )
                                ),
                                'move-menu_item'
                            );
                        ?>" class="item-move-up"><abbr title="<?php esc_attr_e('Move up'); ?>">&#8593;</abbr></a>
                        |
                        <a href="<?php
                            echo wp_nonce_url(
                                add_query_arg(
                                    array(
                                        'action' => 'move-down-menu-item',
                                        'menu-item' => $item_id,
                                    ),
                                    remove_query_arg($removed_args, admin_url( 'nav-menus.php' ) )
                                ),
                                'move-menu_item'
                            );
                        ?>" class="item-move-down"><abbr title="<?php esc_attr_e('Move down'); ?>">&#8595;</abbr></a>
                    </span>
                    <a class="item-edit" id="edit-<?php echo $item_id; ?>" title="<?php esc_attr_e('Edit Menu Item'); ?>" href="<?php
                        echo ( isset( $_GET['edit-menu-item'] ) && $item_id == $_GET['edit-menu-item'] ) ? admin_url( 'nav-menus.php' ) : add_query_arg( 'edit-menu-item', $item_id, remove_query_arg( $removed_args, admin_url( 'nav-menus.php#menu-item-settings-' . $item_id ) ) );
                    ?>"><?php _e( 'Edit Menu Item' ); ?></a>
                </span>
            </dt>
        </dl>

        <div class="menu-item-settings" id="menu-item-settings-<?php echo $item_id; ?>">
            <?php if( 'custom' == $item->type ) : ?>
                <p class="field-url description description-wide">
                    <label for="edit-menu-item-url-<?php echo $item_id; ?>">
                        <?php _e( 'URL' ); ?><br />
                        <input type="text" id="edit-menu-item-url-<?php echo $item_id; ?>" class="widefat code edit-menu-item-url" name="menu-item-url[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->url ); ?>" />
                    </label>
                </p>
            <?php endif; ?>
            <p class="description description-thin">
                <label for="edit-menu-item-title-<?php echo $item_id; ?>">
                    <?php _e( 'Navigation Label' ); ?><br />
                    <input type="text" id="edit-menu-item-title-<?php echo $item_id; ?>" class="widefat edit-menu-item-title" name="menu-item-title[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->title ); ?>" />
                </label>
            </p>
            <p class="description description-thin">
                <label for="edit-menu-item-attr-title-<?php echo $item_id; ?>">
                    <?php _e( 'Title Attribute' ); ?><br />
                    <input type="text" id="edit-menu-item-attr-title-<?php echo $item_id; ?>" class="widefat edit-menu-item-attr-title" name="menu-item-attr-title[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->post_excerpt ); ?>" />
                </label>
            </p>
            <p class="field-link-target description">
                <label for="edit-menu-item-target-<?php echo $item_id; ?>">
                    <input type="checkbox" id="edit-menu-item-target-<?php echo $item_id; ?>" value="_blank" name="menu-item-target[<?php echo $item_id; ?>]"<?php checked( $item->target, '_blank' ); ?> />
                    <?php _e( 'Open link in a new window/tab' ); ?>
                </label>
            </p>
            <p class="field-css-classes description description-thin">
                <label for="edit-menu-item-classes-<?php echo $item_id; ?>">
                    <?php _e( 'CSS Classes (optional)' ); ?><br />
                    <input type="text" id="edit-menu-item-classes-<?php echo $item_id; ?>" class="widefat code edit-menu-item-classes" name="menu-item-classes[<?php echo $item_id; ?>]" value="<?php echo esc_attr( implode(' ', $item->classes ) ); ?>" />
                </label>
            </p>
            <p class="field-xfn description description-thin">
                <label for="edit-menu-item-xfn-<?php echo $item_id; ?>">
                    <?php _e( 'Link Relationship (XFN)' ); ?><br />
                    <input type="text" id="edit-menu-item-xfn-<?php echo $item_id; ?>" class="widefat code edit-menu-item-xfn" name="menu-item-xfn[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->xfn ); ?>" />
                </label>
            </p>
            <p class="field-description description description-wide">
                <label for="edit-menu-item-description-<?php echo $item_id; ?>">
                    <?php _e( 'Description' ); ?><br />
                    <textarea id="edit-menu-item-description-<?php echo $item_id; ?>" class="widefat edit-menu-item-description" rows="3" cols="20" name="menu-item-description[<?php echo $item_id; ?>]"><?php echo esc_html( $item->description ); // textarea_escaped ?></textarea>
                    <span class="description"><?php _e('The description will be displayed in the menu if the current theme supports it.'); ?></span>
                </label>
            </p>        
            <?php
            /*
             * This is the added field
             */
            ?>      
            <p class="field-custom description description-wide">
                <label for="edit-menu-item-custom-<?php echo $item_id; ?>">
                    <?php _e( 'Custom' ); ?><br />
                    <!--<input type="text" id="edit-menu-item-custom-<?php echo $item_id; ?>" class="widefat code edit-menu-item-custom" name="menu-item-custom[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->custom ); ?>" />-->
                    <select name="menu-item-custom[<?php echo $item_id; ?>]" id="edit-menu-item-custom-<?php echo $item_id; ?>" class="widefat code edit-menu-item-custom">
                    	<option value="">Select column</option>
                        <option value="1" <?php if ( esc_attr( $item->custom ) == 1 ) { ?> selected="selected"<?php } ?>>Col-1</option>
                        <option value="2" <?php if ( esc_attr( $item->custom ) == 2 ) { ?> selected="selected"<?php } ?>>Col-2</option>
                        <option value="3" <?php if ( esc_attr( $item->custom ) == 3 ) { ?> selected="selected"<?php } ?> >Col-3</option>
                        <option value="4" <?php if ( esc_attr( $item->custom ) == 4 ) { ?> selected="selected"<?php } ?>>Col-4</option>
                        <option value="5"<?php if ( esc_attr( $item->custom ) == 5 ) { ?> selected="selected"<?php } ?>>Col-5</option>
                    </select>
                    
                </label>
            </p>
            <?php
            /*
             * end added field
             */
            ?>
            <div class="menu-item-actions description-wide submitbox">
                <?php if( 'custom' != $item->type && $original_title !== false ) : ?>
                    <p class="link-to-original">
                        <?php printf( __('Original: %s'), '<a href="' . esc_attr( $item->url ) . '">' . esc_html( $original_title ) . '</a>' ); ?>
                    </p>
                <?php endif; ?>
                <a class="item-delete submitdelete deletion" id="delete-<?php echo $item_id; ?>" href="<?php
                echo wp_nonce_url(
                    add_query_arg(
                        array(
                            'action' => 'delete-menu-item',
                            'menu-item' => $item_id,
                        ),
                        remove_query_arg($removed_args, admin_url( 'nav-menus.php' ) )
                    ),
                    'delete-menu_item_' . $item_id
                ); ?>"><?php _e('Remove'); ?></a> <span class="meta-sep"> | </span> <a class="item-cancel submitcancel" id="cancel-<?php echo $item_id; ?>" href="<?php echo esc_url( add_query_arg( array('edit-menu-item' => $item_id, 'cancel' => time()), remove_query_arg( $removed_args, admin_url( 'nav-menus.php' ) ) ) );
                    ?>#menu-item-settings-<?php echo $item_id; ?>"><?php _e('Cancel'); ?></a>
            </div>

            <input class="menu-item-data-db-id" type="hidden" name="menu-item-db-id[<?php echo $item_id; ?>]" value="<?php echo $item_id; ?>" />
            <input class="menu-item-data-object-id" type="hidden" name="menu-item-object-id[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->object_id ); ?>" />
            <input class="menu-item-data-object" type="hidden" name="menu-item-object[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->object ); ?>" />
            <input class="menu-item-data-parent-id" type="hidden" name="menu-item-parent-id[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->menu_item_parent ); ?>" />
            <input class="menu-item-data-position" type="hidden" name="menu-item-position[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->menu_order ); ?>" />
            <input class="menu-item-data-type" type="hidden" name="menu-item-type[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->type ); ?>" />
        </div><!-- .menu-item-settings-->
        <ul class="menu-item-transport"></ul>
    <?php
    $output .= ob_get_clean();
    }
}


	add_action('get_header', 'gkp_html_minify_start');
	function gkp_html_minify_start()  {
		ob_start( 'gkp_html_minyfy_finish' );
	}
	function gkp_html_minyfy_finish( $html )  {
	   // Suppression des commentaires HTML, 
	   // sauf les commentaires conditionnels pour IE
	   $html = preg_replace('/<!--(?!s*(?:[if [^]]+]|!|>))(?:(?!-->).)*-->/s', '', $html);
	   // Suppression des espaces vides
	   $html = str_replace(array("\r\n", "\r", "\n", "\t"), '', $html);
	   while ( stristr($html, '  ')) 
		   $html = str_replace('  ', ' ', $html);
	   return $html;
	}
	
	/*function nr_load_scripts() {
		
		wp_register_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCe5ROIvfKpXzEvdzezRKtdjWzbr_xWHQE',null,null,true);  
		wp_enqueue_script('googlemaps');
			
	}
	add_action( 'wp_enqueue_scripts', 'nr_load_scripts' );
*/
	function my_acf_google_map_api( $api ){
		$api['key'] = 'AIzaSyCe5ROIvfKpXzEvdzezRKtdjWzbr_xWHQE';
		return $api;
	}
	add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
	
	//svg support

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


// Image ALT tags

/** Auto-Generate ALT tag for images */
/*function image_alt_tag($content)
{
	echo $content;

	global $post;
	preg_match_all('/<img (.*?)\/>/', $content, $images);
if(!is_null($images)) {foreach($images[1] as $index => $value)
{if(!preg_match('/alt=" "/', $value)){
$new_img = str_replace('<img', '<img alt="'.get_the_title().'"', $images[0][$index]);

$content = str_replace($images[0][$index], $new_img, $content);}}}
return $content;
}*/
/*add_filter('the_content', 'image_alt_tag', 99999);
function replace_content($content)
{
$content = str_replace('Company Name', '<span class="company">Company Name</span>',$content);
return $content;
}
add_filter('the_content','replace_content');*/

function remove_first_image ($content) {
//if (!is_page() && !is_feed() && !is_feed()) {
$content = preg_replace("/<img/i", '<img alt="'.get_the_title().'"', $content);
//$content = preg_replace("/<img[^>]+\>/i", "removed", $content, 1);
return $content;
}
add_filter('the_content', 'remove_first_image');


// 
function ov3rfly_replace_include_blank($name, $text, &$html) {
   	 	$matches = false;
		preg_match('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $html, $matches);
		if ($matches) {
			$select = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $matches[0]);
			$html = preg_replace('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $select, $html);
		}
	}
	function my_wpcf7_form_elements($html) {
	
		ov3rfly_replace_include_blank('type-of-employee', 'Type of employee', $html);
		
		return $html;
	}
	add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');

//
function littlecontent($limit) {
 		$excerpt = explode(' ', get_the_excerpt(), $limit);
 		if (count($excerpt)>=$limit) {
 			array_pop($excerpt);
 			$excerpt = implode(" ",$excerpt).'...';
		 } else {
 		$excerpt = implode(" ",$excerpt);
 		}
 		$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 		return $excerpt;
	}
// page id

function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}
/*add_action( 'init', 'custom_page_rules' );
 
function custom_page_rules() {
    global $wp_rewrite;
    $wp_rewrite->page_structure = $wp_rewrite->root . '/%pagename%/'; 
}*/
?>