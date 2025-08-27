<?php
/**
 * FoodPack Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FoodPack
 */

if ( ! defined( 'FOODPACK_VERSION' ) ) {
	define( 'FOODPACK_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function foodpack_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register menu locations
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'foodpack' ),
			'footer' => esc_html__( 'Footer Menu', 'foodpack' ),
			'social' => esc_html__( 'Social Links Menu', 'foodpack' ),
		)
	);

	// Switch default core markup to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for custom logo
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Add support for WooCommerce
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'foodpack_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function foodpack_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'foodpack_content_width', 1200 );
}
add_action( 'after_setup_theme', 'foodpack_content_width', 0 );

/**
 * Register widget areas.
 */
function foodpack_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'foodpack' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'foodpack' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	// Register 4 footer widget areas
	for ( $i = 1; $i <= 4; $i++ ) {
		register_sidebar(
			array(
				'name'          => sprintf( esc_html__( 'Footer %d', 'foodpack' ), $i ),
				'id'            => 'footer-' . $i,
				'description'   => esc_html__( 'Add widgets here to appear in the footer.', 'foodpack' ),
				'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>',
			)
		);
	}
}
add_action( 'widgets_init', 'foodpack_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function foodpack_scripts() {
	// Enqueue main stylesheet
	wp_enqueue_style( 'foodpack-style', get_stylesheet_uri(), array(), FOODPACK_VERSION );
	
	// Enqueue Bootstrap CSS
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0' );
	
	// Enqueue Font Awesome for icons
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
	
	// Enqueue theme JavaScript
	wp_enqueue_script( 'foodpack-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), FOODPACK_VERSION, true );
	
	// Enqueue Bootstrap JavaScript
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'foodpack_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Register Custom Post Types
 */
function foodpack_register_post_types() {
	// Register Products CPT if WooCommerce is not active
	if ( ! class_exists( 'WooCommerce' ) ) {
		$labels = array(
			'name'                  => _x( 'Products', 'Post type general name', 'foodpack' ),
			'singular_name'         => _x( 'Product', 'Post type singular name', 'foodpack' ),
			'menu_name'             => _x( 'Products', 'Admin Menu text', 'foodpack' ),
			'name_admin_bar'        => _x( 'Product', 'Add New on Toolbar', 'foodpack' ),
			'add_new'               => __( 'Add New', 'foodpack' ),
			'add_new_item'          => __( 'Add New Product', 'foodpack' ),
			'new_item'              => __( 'New Product', 'foodpack' ),
			'edit_item'             => __( 'Edit Product', 'foodpack' ),
			'view_item'             => __( 'View Product', 'foodpack' ),
			'all_items'             => __( 'All Products', 'foodpack' ),
			'search_items'          => __( 'Search Products', 'foodpack' ),
			'parent_item_colon'     => __( 'Parent Products:', 'foodpack' ),
			'not_found'             => __( 'No products found.', 'foodpack' ),
			'not_found_in_trash'    => __( 'No products found in Trash.', 'foodpack' ),
			'featured_image'        => _x( 'Product Cover Image', 'Overrides the "Featured Image" phrase', 'foodpack' ),
			'set_featured_image'    => _x( 'Set cover image', 'Overrides the "Set featured image" phrase', 'foodpack' ),
			'remove_featured_image' => _x( 'Remove cover image', 'Overrides the "Remove featured image" phrase', 'foodpack' ),
			'use_featured_image'    => _x( 'Use as cover image', 'Overrides the "Use as featured image" phrase', 'foodpack' ),
			'archives'              => _x( 'Product archives', 'The post type archive label used in nav menus', 'foodpack' ),
			'insert_into_item'      => _x( 'Insert into product', 'Overrides the "Insert into post" phrase', 'foodpack' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this product', 'Overrides the "Uploaded to this post" phrase', 'foodpack' ),
			'filter_items_list'     => _x( 'Filter products list', 'Screen reader text for the filter links', 'foodpack' ),
			'items_list_navigation' => _x( 'Products list navigation', 'Screen reader text for the pagination', 'foodpack' ),
			'items_list'            => _x( 'Products list', 'Screen reader text for the items list', 'foodpack' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'product' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
			'menu_icon'          => 'dashicons-products',
		);

		register_post_type( 'foodpack_product', $args );
		
		// Register Product Category taxonomy
		$cat_labels = array(
			'name'              => _x( 'Product Categories', 'taxonomy general name', 'foodpack' ),
			'singular_name'     => _x( 'Product Category', 'taxonomy singular name', 'foodpack' ),
			'search_items'      => __( 'Search Product Categories', 'foodpack' ),
			'all_items'         => __( 'All Product Categories', 'foodpack' ),
			'parent_item'       => __( 'Parent Product Category', 'foodpack' ),
			'parent_item_colon' => __( 'Parent Product Category:', 'foodpack' ),
			'edit_item'         => __( 'Edit Product Category', 'foodpack' ),
			'update_item'       => __( 'Update Product Category', 'foodpack' ),
			'add_new_item'      => __( 'Add New Product Category', 'foodpack' ),
			'new_item_name'     => __( 'New Product Category Name', 'foodpack' ),
			'menu_name'         => __( 'Categories', 'foodpack' ),
		);

		register_taxonomy( 'product_category', 'foodpack_product', array(
			'hierarchical'      => true,
			'labels'            => $cat_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'product-category' ),
		) );
		
		// Register Product Material taxonomy
		$material_labels = array(
			'name'              => _x( 'Materials', 'taxonomy general name', 'foodpack' ),
			'singular_name'     => _x( 'Material', 'taxonomy singular name', 'foodpack' ),
			'search_items'      => __( 'Search Materials', 'foodpack' ),
			'all_items'         => __( 'All Materials', 'foodpack' ),
			'parent_item'       => __( 'Parent Material', 'foodpack' ),
			'parent_item_colon' => __( 'Parent Material:', 'foodpack' ),
			'edit_item'         => __( 'Edit Material', 'foodpack' ),
			'update_item'       => __( 'Update Material', 'foodpack' ),
			'add_new_item'      => __( 'Add New Material', 'foodpack' ),
			'new_item_name'     => __( 'New Material Name', 'foodpack' ),
			'menu_name'         => __( 'Materials', 'foodpack' ),
		);

		register_taxonomy( 'product_material', 'foodpack_product', array(
			'hierarchical'      => false,
			'labels'            => $material_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'product-material' ),
		) );
	}
}
add_action( 'init', 'foodpack_register_post_types' );
