<?php
/**
 * Plugin Name: MP Functions
 * Plugin URI: https://petrov.net.ua/
 * Description: Replacing the WordPress functions.php file for securely adding custom PHP code.
 * Version: 1.0.0
 * Author: Mykhailo Petrov
 * Author URI: https://petrov.net.ua/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mp-functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MP_FUNCTIONS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'MP_FUNCTIONS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'MP_FUNCTIONS_PLUGIN_TEXT_DOMAIN', 'mp-functions' );

add_action( 'plugins_loaded', function() {
	load_plugin_textdomain( 'mp-functions', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
} );

/* After this line, feel free to add your own code boldly! */
