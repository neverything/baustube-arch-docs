<?php

namespace Neverything\Baustube_Arch_Docs;

/**
 * Registers the `building_costs` taxonomy,
 * for use with 'page'.
 */
function building_costs_init() {
	register_taxonomy( 'building-costs', array( 'page', 'post' ), array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts',
		),
		'labels'            => array(
			'name'                       => __( 'Building costs', 'baustube-arch-docs' ),
			'singular_name'              => _x( 'Building costs', 'taxonomy general name', 'baustube-arch-docs' ),
			'search_items'               => __( 'Search Building costs', 'baustube-arch-docs' ),
			'popular_items'              => __( 'Popular Building costs', 'baustube-arch-docs' ),
			'all_items'                  => __( 'All Building costs', 'baustube-arch-docs' ),
			'parent_item'                => __( 'Parent Building costs', 'baustube-arch-docs' ),
			'parent_item_colon'          => __( 'Parent Building costs:', 'baustube-arch-docs' ),
			'edit_item'                  => __( 'Edit Building costs', 'baustube-arch-docs' ),
			'update_item'                => __( 'Update Building costs', 'baustube-arch-docs' ),
			'view_item'                  => __( 'View Building costs', 'baustube-arch-docs' ),
			'add_new_item'               => __( 'Add New Building costs', 'baustube-arch-docs' ),
			'new_item_name'              => __( 'New Building costs', 'baustube-arch-docs' ),
			'separate_items_with_commas' => __( 'Separate building costs with commas', 'baustube-arch-docs' ),
			'add_or_remove_items'        => __( 'Add or remove building costs', 'baustube-arch-docs' ),
			'choose_from_most_used'      => __( 'Choose from the most used building costs', 'baustube-arch-docs' ),
			'not_found'                  => __( 'No building costs found.', 'baustube-arch-docs' ),
			'no_terms'                   => __( 'No building costs', 'baustube-arch-docs' ),
			'menu_name'                  => __( 'Building costs', 'baustube-arch-docs' ),
			'items_list_navigation'      => __( 'Building costs list navigation', 'baustube-arch-docs' ),
			'items_list'                 => __( 'Building costs list', 'baustube-arch-docs' ),
			'most_used'                  => _x( 'Most Used', 'building-costs', 'baustube-arch-docs' ),
			'back_to_items'              => __( '&larr; Back to Building costs', 'baustube-arch-docs' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'building-costs',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', __NAMESPACE__ . '\building_costs_init' );

/**
 * Sets the post updated messages for the `building_costs` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `building_costs` taxonomy.
 */
function building_costs_updated_messages( $messages ) {

	$messages['building-costs'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Building costs added.', 'baustube-arch-docs' ),
		2 => __( 'Building costs deleted.', 'baustube-arch-docs' ),
		3 => __( 'Building costs updated.', 'baustube-arch-docs' ),
		4 => __( 'Building costs not added.', 'baustube-arch-docs' ),
		5 => __( 'Building costs not updated.', 'baustube-arch-docs' ),
		6 => __( 'Building costs deleted.', 'baustube-arch-docs' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', __NAMESPACE__ . '\building_costs_updated_messages' );
