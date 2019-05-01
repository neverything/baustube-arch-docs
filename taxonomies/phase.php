<?php

namespace Neverything\Baustube_Arch_Docs;

/**
 * Registers the `phase` taxonomy,
 * for use with 'page'.
 */
function phase_init() {
	register_taxonomy( 'phase', array( 'page' ), array(
		'hierarchical'      => true,
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
			'name'                       => __( 'Phases', 'baustube-arch-docs' ),
			'singular_name'              => _x( 'Phase', 'taxonomy general name', 'baustube-arch-docs' ),
			'search_items'               => __( 'Search Phases', 'baustube-arch-docs' ),
			'popular_items'              => __( 'Popular Phases', 'baustube-arch-docs' ),
			'all_items'                  => __( 'All Phases', 'baustube-arch-docs' ),
			'parent_item'                => __( 'Parent Phase', 'baustube-arch-docs' ),
			'parent_item_colon'          => __( 'Parent Phase:', 'baustube-arch-docs' ),
			'edit_item'                  => __( 'Edit Phase', 'baustube-arch-docs' ),
			'update_item'                => __( 'Update Phase', 'baustube-arch-docs' ),
			'view_item'                  => __( 'View Phase', 'baustube-arch-docs' ),
			'add_new_item'               => __( 'Add New Phase', 'baustube-arch-docs' ),
			'new_item_name'              => __( 'New Phase', 'baustube-arch-docs' ),
			'separate_items_with_commas' => __( 'Separate phases with commas', 'baustube-arch-docs' ),
			'add_or_remove_items'        => __( 'Add or remove phases', 'baustube-arch-docs' ),
			'choose_from_most_used'      => __( 'Choose from the most used phases', 'baustube-arch-docs' ),
			'not_found'                  => __( 'No phases found.', 'baustube-arch-docs' ),
			'no_terms'                   => __( 'No phases', 'baustube-arch-docs' ),
			'menu_name'                  => __( 'Phases', 'baustube-arch-docs' ),
			'items_list_navigation'      => __( 'Phases list navigation', 'baustube-arch-docs' ),
			'items_list'                 => __( 'Phases list', 'baustube-arch-docs' ),
			'most_used'                  => _x( 'Most Used', 'phase', 'baustube-arch-docs' ),
			'back_to_items'              => __( '&larr; Back to Phases', 'baustube-arch-docs' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'phase',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', __NAMESPACE__ . '\phase_init' );

/**
 * Sets the post updated messages for the `phase` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `phase` taxonomy.
 */
function phase_updated_messages( $messages ) {

	$messages['phase'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Phase added.', 'baustube-arch-docs' ),
		2 => __( 'Phase deleted.', 'baustube-arch-docs' ),
		3 => __( 'Phase updated.', 'baustube-arch-docs' ),
		4 => __( 'Phase not added.', 'baustube-arch-docs' ),
		5 => __( 'Phase not updated.', 'baustube-arch-docs' ),
		6 => __( 'Phases deleted.', 'baustube-arch-docs' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', __NAMESPACE__ . '\phase_updated_messages' );
