<?php
/**
 * Plugin Name:     Custom Job Search for WP Job Manager
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     custom-job-search
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Custom_Job_Search
 */

defined( 'ABSPATH' ) || exit;

// Define CUSTOM_JOB_SEARCH_PLUGIN_FILE.
if ( ! defined( 'CUSTOM_JOB_SEARCH_PLUGIN_FILE' ) ) {
	define( 'CUSTOM_JOB_SEARCH_PLUGIN_FILE', __FILE__ );
}

// Include the main Custom_Job_Search class.
if ( ! class_exists( 'Custom_Job_Search' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class-custom-job-search.php';
	Custom_Job_Search::instance();
}
