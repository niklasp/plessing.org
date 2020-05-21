<?php
/**
 * Custom hooks
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function understrap_site_info() {
		// do_action( 'understrap_site_info' );
	}
}

add_action( 'understrap_site_info', 'understrap_add_site_info' );
if ( ! function_exists( 'understrap_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function understrap_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'http://wordpress.org/', 'understrap' ) ),
			sprintf(
				/* translators:*/
				esc_html__( 'Proudly powered by %s', 'understrap' ),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Theme: %1$s by %2$s.', 'understrap' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'http://understrap.com', 'understrap' ) ) . '">understrap.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Version: %1$s', 'understrap' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'understrap_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}

add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );

if ( ! function_exists( 'create_topics_nonhierarchical_taxonomy' ) ) {
	function create_topics_nonhierarchical_taxonomy() {

	// Labels part for the GUI

	  $labels = array(
	    'name' => _x( 'Stadt', 'taxonomy general name' ),
	    'singular_name' => _x( 'Stadt', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Städte durchsuchen' ),
	    'popular_items' => __( 'Popular Städte' ),
	    'all_items' => __( 'All Städte' ),
	    'parent_item' => null,
	    'parent_item_colon' => null,
	    'edit_item' => __( 'Stadt bearbeite' ),
	    'update_item' => __( 'Stadt aktualisieren' ),
	    'add_new_item' => __( 'Neue Stadt' ),
	    'new_item_name' => __( 'Neue Stadt' ),
	    'separate_items_with_commas' => __( 'Separate topics with commas' ),
	    'add_or_remove_items' => __( 'Add or remove topics' ),
	    'choose_from_most_used' => __( 'Choose from the most used städte' ),
	    'menu_name' => __( 'Städte' ),
	  );

	// Now register the non-hierarchical taxonomy like tag

	  register_taxonomy('stadt','post',array(
	    'hierarchical' => true,
	    'labels' => $labels,
	    'show_ui' => true,
			'show_in_rest' => true,
	    'show_admin_column' => true,
	    'update_count_callback' => '_update_post_term_count',
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'stadt' ),
	  ));
	}
}
