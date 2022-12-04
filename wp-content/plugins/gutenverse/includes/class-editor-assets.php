<?php
/**
 * Editor Assets class
 *
 * @author Jegstudio
 * @since 1.0.0
 * @package gutenverse
 */

namespace Gutenverse;

/**
 * Class Editor Assets
 *
 * @package gutenverse
 */
class Editor_Assets {
	/**
	 * Init constructor.
	 */
	public function __construct() {
		add_action( 'admin_footer', array( $this, 'register_root' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'register_script' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_backend' ) );
	}

	/**
	 * Register Javascript Script
	 */
	public function register_script() {
		// Register & Enqueue Style.
		wp_register_style(
			'fontawesome-gutenverse',
			GUTENVERSE_URL . '/assets/fontawesome/css/all.css',
			null,
			GUTENVERSE_VERSION
		);

		wp_enqueue_style(
			'gutenverse-iconlist',
			GUTENVERSE_URL . '/assets/gtnicon/gtnicon.css',
			array(),
			GUTENVERSE_VERSION
		);

		wp_enqueue_style(
			'gutenverse-editor-style',
			GUTENVERSE_URL . '/assets/css/editor-block.css',
			array( 'wp-edit-blocks', 'fontawesome-gutenverse' ),
			GUTENVERSE_VERSION
		);

		wp_enqueue_style(
			'gutenverse-frontend-style',
			GUTENVERSE_URL . '/assets/css/frontend-block.css',
			array( 'gutenverse-iconlist', 'fontawesome-gutenverse' ),
			GUTENVERSE_VERSION
		);

		// Register & Enqueue Script.
		$include = include_once GUTENVERSE_DIR . '/lib/dependencies/block.asset.php';
		$include = apply_filters( 'gutenverse_include_blocks', $include );

		wp_enqueue_script(
			'gutenverse-block',
			GUTENVERSE_URL . '/assets/js/block.js',
			$include['dependencies'],
			GUTENVERSE_VERSION,
			true
		);

		wp_set_script_translations(
			'gutenverse-block',
			'gutenverse',
			GUTENVERSE_LANG_DIR
		);

		wp_localize_script(
			apply_filters( 'gutenverse_block_script_handle', 'gutenverse-block' ),
			'GutenverseConfig',
			$this->gutenverse_config()
		);
	}

	/**
	 * Gutenverse Config
	 *
	 * @return array
	 */
	public function gutenverse_config() {
		$template       = get_user_meta( get_current_user_id(), 'gutense_templates_viewed', true );
		$global_setting = get_option( 'gutenverse-global-setting' );

		$config                     = array();
		$config['fonts']            = ( new Fonts() )->get_font_settings();
		$config['imagePlaceholder'] = GUTENVERSE_URL . '/assets/img/img-placeholder.jpg';
		$config['imgDir']           = GUTENVERSE_URL . '/assets/img';
		$config['pluginVersion']    = GUTENVERSE_VERSION;
		$config['serverUrl']        = GUTENVERSE_LIBRARY_URL;
		$config['serverEndpoint']   = 'wp-json/gutenverse-server/v1';
		$config['proUrl']           = GUTENVERSE_STORE_URL;
		$config['openedTemplate']   = $template ? $template : array();
		$config['globalSetting']    = ! empty( $global_setting ) ? $global_setting : array();
		$config['userId']           = get_current_user_id();
		$config['freeImg']          = GUTENVERSE_URL . '/assets/img/asset_21_small.webp';
		$config['isTools']          = ! ! defined( 'GUTENVERSE_TOOLS' );
		$config['settingsData']     = get_option( 'gutenverse-settings', array() );
		$config['globalVariable']   = Gutenverse::instance()->global_variable->get_global_variable();
		$config['adminUrl']         = admin_url();
		$config['themeListUrl']     = admin_url( 'admin.php?page=gutenverse&path=theme-list' );

		return apply_filters( 'gutenverse_block_config', $config );
	}

	/**
	 * Add root div
	 */
	public function register_root() {
		?>
		<div id='gutenverse-root'></div><div id='gutenverse-error'></div>
		<?php
	}

	/**
	 * Enqueue Backend Font
	 */
	public function enqueue_backend() {
		$include = include_once GUTENVERSE_DIR . '/lib/dependencies/shared.asset.php';

		wp_enqueue_script(
			'gutenverse-shared',
			GUTENVERSE_URL . '/assets/js/shared.js',
			$include['dependencies'],
			GUTENVERSE_VERSION,
			true
		);

		wp_set_script_translations( 'gutenverse-shared', 'gutenverse', GUTENVERSE_LANG_DIR );

		wp_enqueue_style(
			'gutenverse-backend-font',
			'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;family=Roboto:wght@400;500;600&amp;display=swap',
			array(),
			GUTENVERSE_VERSION
		);

		wp_enqueue_style(
			'gutenverse-backend-font-2',
			'https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600&amp;display=swap',
			array(),
			GUTENVERSE_VERSION
		);

		wp_enqueue_style(
			'gutenverse-toolbar',
			GUTENVERSE_URL . '/assets/css/toolbar.css',
			array(),
			GUTENVERSE_VERSION
		);

	}
}
