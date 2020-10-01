<?php
/**
 * Shortcode class
 *
 * @package Custom_Job_Search
 */

namespace BengalStudio\Custom_Job_Search;

defined( 'ABSPATH' ) || exit;

/**
 * Main Custom_Job_Search_Shortcode Class.
 */
class Shortcode {
	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'add_shortcode' ) );
	}

	/**
	 * [add_shortcode description]
	 */
	public function add_shortcode() {
		add_shortcode( 'custom_job_search', array( $this, 'render_custom_job_search' ) );
	}

	/**
	 * [render_custom_job_search description]
	 * @param  array  $atts [description]
	 * @return [type]       [description]
	 */
	public function render_custom_job_search( $atts = array(), $content = null ) {
		return 'Hello World!';
	}
}

new Shortcode();
