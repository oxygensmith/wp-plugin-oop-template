<?php
/**
 * Plugin Name: Plugin Starter Template
 * Plugin URI: https://robbutz.com/
 * Description: An object-oriented starter template for your plugin.
 * Version: 1.0.0
 * Author: Rob Butz
 * Author URI: https://robbutz.com/
 * License: GPL2
 * Text Domain: add-plugin-domain-here
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin version.
define( 'WP_PLUGIN_VERSION', '1.0.0' );

// Define plugin path.
define( 'WP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

// Define plugin URL.
define( 'WP_MY_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include the main class.
require_once WP_PLUGIN_PATH . 'includes/class-wp-plugin.php';

// Run the plugin.
function run_plugin() {
    $plugin = new Plugin_Class();
    $plugin->run();
}
run_plugin();