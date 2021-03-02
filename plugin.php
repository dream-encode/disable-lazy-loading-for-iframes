<?php
/**
 * Disable Lazy Loading for IFRAMES
 *
 * @package disable-lazy-loading-for-iframes
 * @author David Baumwald <david@dream-encode.com>
 * @license MIT
 */

/**
 * Plugin Name: Disable Lazy Loading for IFRAMES
 * Author: David Baumwald
 * Description: A small plugin to quickly disable the lazy loading for iframes in WordPress 5.7 and beyond.
 * Version: 0.1.0
 * Network: true
 * License: MIT
 * Text Domain: disable-lazy-loading-for-iframes
 * Requires PHP: 7.4
 * Requires at least: 5.6
 * GitHub Plugin URI: https://github.com/dream-encode/disable-lazy-loading-for-iframes
 * Primary Branch: main
 */

 namespace DreamEncode;

 // Bail early if accessed directly around WP.
 defined( 'ABSPATH' ) || die( 'We\'re sorry, but you can not directly access this file.' );

 // Define the current plugin version.
 define( 'DE_DISABLE_LAZY_LOADING_FO_IFRAMES_VERSION', '0.1.0' );

/**
 * Class Disable_Lazy_Loading_For_Iframes.
 *
 * A small plugin to quickly disable the lazy loading for iframes in WordPress 5.7 and beyond.
 */
class Disable_Lazy_Loading_For_Iframes {
	/**
	 * Class constructor.
	 */
	public function __construct() {
		$this->add_hooks();
	}

	/**
	 * Add our custom filters and actions.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	public function add_hooks() {
		add_filter( 'wp_lazy_loading_enabled', array( $this, 'disable_lazy_loading_for_iframes_in_post_content' ), 10, 2 );
	}

	/**
	 * Disable lazy loading for IFRAMES in post content.
	 *
	 * @since 0.1.0
	 *
	 * @param  bool    $enabled   Current state of the "enabled" flag.
	 * @param  string  $tag_name  HTML tag being evaluated.
	 * @return bool    Whether to add loading="lazy" to the current tag.
	 */
	public function disable_lazy_loading_for_iframes_in_post_content( $enabled, $tag_name ) {
		if ( 'iframe' === $tag_name ) {
			return false;
		}

		return $enabled;
	}
}

new Disable_Lazy_Loading_For_Iframes();