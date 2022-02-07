<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/mbijok
 * @since      1.0.0
 *
 * @package    Wp_Tinker
 * @subpackage Wp_Tinker/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Tinker
 * @subpackage Wp_Tinker/admin
 * @author     Mariusz Bijok <mbijok@outlook.com>
 */
class Wp_Tinker_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-tinker-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-tinker-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register plugin settinges page
	 *
	 * @since   1.0.1
	 */
	public function settings_page() {

		add_options_page(
			__( 'WP Tinker Settings', 'wp-tinker' ),
			'WP Tinker',
			'manage_options',
			'wp-tinker',
			'settings_page_view'
		);

		/**
		 * Admin page settings view
		 *
		 * @since   1.0.1
		 */
		function settings_page_view() {

			require_once plugin_dir_path( __FILE__ ) . 'partials/wp-tinker-admin-display.php';

		}

	}

}
