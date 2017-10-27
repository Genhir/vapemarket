<?php
/**
 * Plugin Name: Meta Box AIO
 * Plugin URI: https://metabox.io/plugins/developer-bundle/
 * Description: All Meta Box extensions in one package.
 * Version: 1.2
 * Author: MetaBox.io
 * Author URI: https://metabox.io
 * License: GPL2+
 * Text Domain: meta-box
 * Domain Path: /languages/
 *
 * @package    Meta Box
 * @subpackage Meta Box AIO
 */

defined( 'ABSPATH' ) || die;

// List of premium extensions.
$extensions = glob( dirname( __FILE__ ) . '/extensions/*', GLOB_ONLYDIR );
$extensions = array_map( 'basename', $extensions );

/**
 * Load the settings page, allowing users to enable/disable modules.
 * Allows developers to bypass the settings page by filter.
 */
if ( true === apply_filters( 'mb_aio_show_settings', true ) ) {
	require_once ABSPATH . '/wp-admin/includes/plugin.php';
	require_once dirname( __FILE__ ) . '/extensions/mb-settings-page/mb-settings-page.php';
	require_once dirname( __FILE__ ) . '/class-mb-aio-settings.php';
	$settings = new MB_AIO_Settings( $extensions );
	$settings->init();
}

/**
 * Load the premium extensions enabled from the settings page.
 * Developers: you can filter this list with the filter 'option_meta_box_aio'
 */
$option = get_option( 'meta_box_aio' );
foreach ( $extensions as $extension ) {
	if ( ! empty( $option[ $extension ] ) ) {
		require_once dirname( __FILE__ ) . "/extensions/$extension/$extension.php";
	}
}

/**
 * Load the free extensions from wordpress.org with TGM Activation Class.
 * Allows developers to turn off by filter.
 */
if ( true === apply_filters( 'mb_aio_load_free_extensions', true ) ) {
	require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
	add_action( 'tgmpa_register', 'mb_aio_load_free_extensions' );

	/**
	 * Optionally load free extensions from wordpress.org.
	 */
	function mb_aio_load_free_extensions() {
		$plugins = array(
			array(
				'name'     => 'Meta Box',
				'slug'     => 'meta-box',
				'required' => true,
			),
			array(
				'name' => 'MB Rest API',
				'slug' => 'mb-rest-api',
			),
			array(
				'name' => 'MB Custom Post Type',
				'slug' => 'mb-custom-post-type',
			),
			array(
				'name' => 'MB Custom Taxonomy',
				'slug' => 'mb-custom-taxonomy',
			),
			array(
				'name' => 'Meta Box for Yoast SEO',
				'slug' => 'meta-box-yoast-seo',
			),
			array(
				'name' => 'Meta Box Text Limiter',
				'slug' => 'meta-box-text-limiter',
			),
		);
		$config  = array(
			'id' => 'meta-box-aio',
		);

		tgmpa( $plugins, $config );
	}
}
