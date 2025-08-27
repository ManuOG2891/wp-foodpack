<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package FoodPack
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function foodpack_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'foodpack_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function foodpack_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'foodpack_pingback_header' );

/**
 * Adds custom meta tags to the header
 */
function foodpack_meta_tags() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
	echo '<meta name="description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '">';
}
add_action( 'wp_head', 'foodpack_meta_tags', 1 );

/**
 * Modify the excerpt length
 */
function foodpack_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'foodpack_excerpt_length' );

/**
 * Modify the excerpt more string
 */
function foodpack_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'foodpack_excerpt_more' );

/**
 * Add custom image sizes
 */
function foodpack_custom_image_sizes() {
	add_image_size( 'foodpack-featured', 1200, 600, true );
	add_image_size( 'foodpack-product', 300, 300, true );
}
add_action( 'after_setup_theme', 'foodpack_custom_image_sizes' );
