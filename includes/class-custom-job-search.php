<?php
/**
 * Custom_Job_Search setup
 *
 * @package Custom_Job_Search
 */

namespace BengalStudio;

defined( 'ABSPATH' ) || exit;

/**
 * Main Custom_Job_Search Class.
 */
final class Custom_Job_Search {

	/**
	 * The single instance of the class.
	 *
	 * @var Custom_Job_Search
	 */
	protected static $_instance = null; // phpcs:ignore PSR2.Classes.PropertyDeclaration.Underscore

	/**
	 * Main Custom_Job_Search Instance.
	 * Ensures only one instance of Custom_Job_Search is loaded or can be loaded.
	 *
	 * @return Custom_Job_Search - Main instance.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * Custom_Job_Search Constructor.
	 */
	public function __construct() {
		$this->define_constants();
		$this->includes();
	}

	/**
	 * Define CJS Constants.
	 */
	private function define_constants() {
		define( 'CUSTOM_JOB_SEARCH_VERSION', '0.0.1' );
		define( 'CUSTOM_JOB_SEARCH_ABSPATH', dirname( CUSTOM_JOB_SEARCH_PLUGIN_FILE ) . '/' );
	}

	/**
	 * Include required core files used in admin and on the frontend.
	 * e.g. include_once CUSTOM_JOB_SEARCH_ABSPATH . 'includes/foo.php';
	 */
	private function includes() {
		include_once CUSTOM_JOB_SEARCH_ABSPATH . 'includes/util.php';
		include_once CUSTOM_JOB_SEARCH_ABSPATH . 'includes/class-custom-job-search-shortcode.php';
	}

	/**
	 * Get the URL for the Custom_Job_Search plugin directory.
	 *
	 * @return string URL
	 */
	public static function plugin_url() {
		return untrailingslashit( plugins_url( '/', CUSTOM_JOB_SEARCH_PLUGIN_FILE ) );
	}
}
