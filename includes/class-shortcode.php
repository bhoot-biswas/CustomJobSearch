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
		$permalink = job_manager_get_permalink( 'jobs' );
		if ( ! $permalink ) {
			return;
		}
		\ob_start();
		?>
		<form method="GET" action="<?php echo esc_url( $permalink ); ?>">
			<p>
				<label for="keywords"><?php _e( 'Keywords', 'custom-job-search' ); ?></label>
				<input type="text" id="search_keywords" name="search_keywords" />
			</p>
			<p>
				<label for="keywords"><?php _e( 'Location', 'custom-job-search' ); ?></label>
				<input type="text" id="search_location" name="search_location" />
			</p>
			<p>
				<label for="search_category"><?php _e( 'Category', 'custom-job-search' ); ?></label>
				<select id="search_category" name="search_category">
				<?php foreach ( get_job_listing_categories() as $cat ) : ?>
					<option value="<?php echo esc_attr( $cat->term_id ); ?>"><?php echo esc_html( $cat->name ); ?></option>
				<?php endforeach; ?>
				</select>
			</p>
			<p>
				<input type="submit" value="<?php _e( 'Search', 'custom-job-search' ); ?>" />
			</p>
		</form>
		<?php
		return \ob_get_clean();
	}
}

new Shortcode();
