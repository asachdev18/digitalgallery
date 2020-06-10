<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

if(!function_exists('moose_elated_register_theme_included_plugins')) {

	/**
	 * Registers theme required and optional plugins. Hooks to tgmpa_register hook
	 */

	function moose_elated_register_theme_included_plugins()	{

		$plugins = array(
			array(
	            'name'					=> esc_html__('Elated CPT', 'moose'),
	            'slug'					=> 'eltd-cpt',
	            'source'				=> get_template_directory() . '/plugins/eltd-cpt.zip',
	            'required'				=> true,
	            'version'				=> '2.0',
	            'force_activation'		=> false,
	            'force_deactivation'	=> false,
	            'external_url'			=> ''
	        ),
			array(
				'name'					=> esc_html__('WPBakery Page Builder', 'moose'),
				'slug'					=> 'js_composer',
				'source'				=> get_template_directory() . '/plugins/js_composer.zip',
				'required'				=> true,
				'version'				=> '5.7',
				'force_activation'		=> false,
				'force_deactivation'	=> false,
				'external_url'			=> ''
			),
			array(
				'name'     				=> esc_html__('LayerSlider WP', 'moose'),
				'slug'     				=> 'LayerSlider',
				'source'   				=> get_template_directory() . '/plugins/layersliderwp-6.8.2.installable.zip',
				'required' 				=> true,
				'version' 				=> '6.8.2',
				'force_activation' 		=> false,
				'force_deactivation' 	=> false,
				'external_url' 			=> ''
			),
			array(
				'name'         			=> esc_html__('Envato Market', 'moose'),
				'slug'         			=> 'envato-market',
				'source'       			=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
				'required'     			=> false,
				'force_activation' 		=> false,
				'force_deactivation' 	=> false,
				'external_url' 			=> ''
			),
			 array(
	            'name'					=> esc_html__( 'Elated Twitter Feed', 'moose' ),
	            'slug'					=> 'eltd-twitter-feed',
	            'source'				=> get_template_directory() . '/plugins/eltd-twitter-feed.zip',
	            'required'				=> false,
	            'version'				=> '1.0',
	            'force_activation'		=> false,
	            'force_deactivation'	=> false,
	            'external_url'			=> ''
	        ),
			array(
				'name'					=> esc_html__( 'Moose Instagram Feed', 'moose' ),
				'slug'					=> 'moose-instagram-feed',
				'source'				=> get_template_directory() . '/plugins/moose-instagram-feed.zip',
				'required'				=> false,
				'version'				=> '1.0',
				'force_activation'		=> false,
				'force_deactivation'	=> false,
				'external_url'			=> ''
			),
			array(
		        'name'         			=> esc_html__( 'WooCommerce', 'moose' ),
		        'slug'         			=> 'woocommerce',
		        'external_url' 			=> 'https://wordpress.org/plugins/woocommerce/',
		        'required'     			=> false
	        ),
	        array(
		        'name'         			=> esc_html__( 'Contact Form 7', 'moose' ),
		        'slug'         			=> 'contact-form-7',
		        'external_url' 			=> 'https://wordpress.org/plugins/contact-form-7/',
		        'required'     			=> false
	        )
		);


		$config = array(
			'domain'			=> 'moose',
			'default_path'		=> '',
			'parent_slug'		=> 'themes.php',
			'capability'		=> 'edit_theme_options',
			'menu'				=> 'install-required-plugins',
			'has_notices'		=> true,
			'is_automatic'		=> false,
			'message'			=> '',
			'strings'			=> array(
				'page_title'						=> esc_html__('Install Required Plugins', 'moose'),
				'menu_title'						=> esc_html__('Install Plugins', 'moose'),
				'installing'						=> esc_html__('Installing Plugin: %s', 'moose'),
				'oops'								=> esc_html__('Something went wrong with the plugin API.', 'moose'),
				'notice_can_install_required'		=> _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'moose'),
				'notice_can_install_recommended'	=> _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'moose'),
				'notice_cannot_install'				=> _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'moose'),
				'notice_can_activate_required'		=> _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'moose'),
				'notice_can_activate_recommended'	=> _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'moose'),
				'notice_cannot_activate'			=> _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'moose'),
				'notice_ask_to_update'				=> _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'moose'),
				'notice_cannot_update'				=> _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'moose'),
				'install_link'						=> _n_noop('Begin installing plugin', 'Begin installing plugins', 'moose'),
				'activate_link'						=> _n_noop('Activate installed plugin', 'Activate installed plugins', 'moose'),
				'return'							=> esc_html__('Return to Required Plugins Installer', 'moose'),
				'plugin_activated'					=> esc_html__('Plugin activated successfully.', 'moose'),
				'complete'							=> esc_html__('All plugins installed and activated successfully. %s', 'moose'),
				'nag_type'							=> 'updated'
			)
		);
		tgmpa($plugins, $config);
	}

	add_action( 'tgmpa_register', 'moose_elated_register_theme_included_plugins' );

}

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if(function_exists('vc_set_as_theme')){
	vc_set_as_theme(true);
}

// Initialising Shortcodes
if (class_exists('WPBakeryVisualComposerAbstract')) {
	function moose_elated_require_vc_extend(){
		require_once locate_template('/extendvc/extend-vc.php');
	}
	add_action('after_setup_theme', 'moose_elated_require_vc_extend',2);
}