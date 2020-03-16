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

 // Includes 
 include( 'includes/activate.php' ); 
 include( 'includes/init.php' );

 // Hooks 
register_activation_hook( __FILE__, 'r_activate_plugin' );
add_action( 'init', 'recipe_init' );

 // Shortcodes