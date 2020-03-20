<?php 
/**
 * Plugin Name: Recipe
 * Description: A simple wordpress plugin to create and rate recipes
 * Version: 1.0
 * Author: niko
 * Author URI: nikolashaug.com
 * Text Domain: recipe
 */

 if( !function_exists( 'add_action' ) ) {
     echo 'Hi there, I\'m just a plugin.';
     exit;
 }

 // Setup
 define( 'RECIPE_PLUGIN_URL', __FILE__ );

 // Includes 
 include( 'includes/activate.php' ); 
 include( 'includes/init.php' );
 include( 'process/save-post.php' );
 include( 'process/filter-content.php' );
 include( 'includes/enqueue.php' );

 // Hooks 
register_activation_hook( __FILE__, 'r_activate_plugin' );
add_action( 'init', 'recipe_init' );
add_action( 'save_post_recipe', 'r_save_post_admin', 10, 3 );
add_filter( 'the_content', 'r_filter_recipe_content' );
add_action( 'wp_enqueue_scripts', 'r_enqueue_scripts', 100 );

 // Shortcodes