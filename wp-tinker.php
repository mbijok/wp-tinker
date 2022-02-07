<?php
/**
 * The WP Tinker plugin
 *
 * @link              https://github.com/mbijok
 * @since             1.0.0
 * @package           Wp_Tinker
 *
 * Plugin Name:       WP Tinker
 * Plugin URI:        https://github.com/mbijok/wp-tinker
 * Description:       A plugin that adds a few tweaks and modifications to WordPress.
 * Version:           1.0.1
 * Author:            Mariusz Bijok
 * Author URI:        https://github.com/mbijok
 * License:           MIT License
 * License URI:       https://raw.githubusercontent.com/mbijok/wp-tinker/master/LICENSE
 * Text Domain:       wp-tinker
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version - based on https://semver.org
 */
define( 'WP_TINKER_VERSION', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-tinker-activator.php
 */
function activate_wp_tinker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-tinker-activator.php';
	Wp_Tinker_Activator::activate();
}
register_activation_hook( __FILE__, 'activate_wp_tinker' );

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-tinker-deactivator.php
 */
function deactivate_wp_tinker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-tinker-deactivator.php';
	Wp_Tinker_Deactivator::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_wp_tinker' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-tinker.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_tinker() {

	$plugin = new Wp_Tinker();
	$plugin->run();

}
run_wp_tinker();
