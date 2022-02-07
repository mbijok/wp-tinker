<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/mbijok
 * @since      1.0.0
 *
 * @package    Wp_Tinker
 * @subpackage Wp_Tinker/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Tinker
 * @subpackage Wp_Tinker/includes
 * @author     Mariusz Bijok <mbijok@outlook.com>
 */
class Wp_Tinker_i18n { //phpcs:ignore
	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-tinker',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}
}
