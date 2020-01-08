<?php
/**
 * Plugin Name:     Baustube Arch Docs
 * Plugin URI:      https://github.com/neverything/baustube-arch-docs/
 * Description:     Adds features to turn a WP install into an architecture documentation site.
 * Author:          Silvan Hagen
 * Author URI:      https://silvanhagen.com/
 * Text Domain:     baustube-arch-docs
 * Domain Path:     /languages
 * Version:         0.4.0
 * GitHub Plugin URI: neverything/baustube-arch-docs
 *
 * @package         Neverything\Baustube_Arch_Docs
 */

namespace Neverything\Baustube_Arch_Docs;

/**
 * Load files needed for the plugin.
 */
function load_files() {

    load_plugin_textdomain( 
        'baustube-arch-docs', 
        false, 
        basename( dirname( __FILE__ ) ) . '/languages' 
    ); 

    require 'taxonomies/phase.php';
    require 'taxonomies/building-costs.php';
}

add_action( 'plugins_loaded', __NAMESPACE__ . '\load_files' );

/**
 * Add default taxonomies to page object.
 */
function add_taxonomies_to_page() {
    register_taxonomy_for_object_type( 'category', 'page' );
    register_taxonomy_for_object_type( 'post_tag', 'page' );
}

add_action( 'init', __NAMESPACE__ . '\add_taxonomies_to_page' ); 
