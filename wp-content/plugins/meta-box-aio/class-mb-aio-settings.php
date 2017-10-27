<?php
/**
 * The settings page for Meta Box AIO.
 *
 * @package    Meta Box
 * @subpackage Meta Box AIO
 */

/**
 * The settings page class.
 */
class MB_AIO_Settings {
	/**
	 * List of extension slugs.
	 *
	 * @var array
	 */
	private $extensions;

	/**
	 * Base dir of extensions.
	 *
	 * @var string
	 */
	private $base_dir;

	/**
	 * Constructor
	 *
	 * @param array $extensions List of extension slugs.
	 */
	public function __construct( $extensions ) {
		$this->extensions = $extensions;
		$this->base_dir   = dirname( __FILE__ ) . '/extensions';
	}

	/**
	 * Initialize.
	 */
	public function init() {
		add_filter( 'mb_settings_pages', [ $this, 'add_settings_page' ] );
		add_filter( 'rwmb_meta_boxes', [ $this, 'register_settings' ] );
	}

	/**
	 * Add plugin settings page.
	 *
	 * @param array $settings_pages List of settings pages.
	 *
	 * @return array
	 */
	public function add_settings_page( $settings_pages ) {
		$settings_pages[] = array(
			'id'          => 'meta-box-aio',
			'option_name' => 'meta_box_aio',
			'menu_title'  => esc_html__( 'Meta Box AIO', 'meta-box-aio' ),
			'parent'      => 'options-general.php',
			'columns'     => 1,
			'style'       => 'no-boxes',
		);
		return $settings_pages;
	}

	/**
	 * Register settings.
	 *
	 * @param array $meta_boxes Meta boxes.
	 *
	 * @return array
	 */
	public function register_settings( $meta_boxes ) {
		$fields = array();
		foreach ( $this->extensions as $extension ) {
			$data     = get_plugin_data( "{$this->base_dir}/$extension/$extension.php" );
			$fields[] = array(
				'name' => $data['Name'],
				'type' => 'checkbox',
				'id'   => $extension,
			);
		}
		$meta_boxes[] = array(
			'id'             => 'extensions',
			'title'          => esc_html__( 'Extensions', 'meta-box-aio' ),
			'settings_pages' => 'meta-box-aio',
			'fields'         => $fields,
		);
		return $meta_boxes;
	}
}

