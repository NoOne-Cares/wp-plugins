<?php
/*
 * Plugin Name:       Iconic Blocks
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Create beautiful blocks by adding icons.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.0
 * Category:          design
 * Author:            Suman Das
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       iconic_block
 * Domain Path:       /languages
 */

 if(!ABSPATH){
    wp.die();
 }

function iconic_block_enqueue_block_editor_assets() {
	$asset_file = include plugin_dir_path( __FILE__ ) . 'build/index.asset.php';

    

	wp_enqueue_script(
		'enable-decorative-images-editor-scripts',
		plugin_dir_url( __FILE__ ) . 'build/index.js',
		$asset_file['dependencies'],
		$asset_file['version']
	);

	wp_set_script_translations(
		'enable-decorative-images-editor-scripts',
		'enable-decorative-images'
	);
}
add_action( 'enqueue_block_editor_assets', 'iconic_block_enqueue_block_editor_assets' );

    
wp_register_style(
        'iconic-block-styles',
        plugin_dir_url( __FILE__ ) . 'build/index.css',
        $asset_file['dependencies'],
        $asset_file['version']
    );
    wp_enqueue_style('iconic-block-styles');



