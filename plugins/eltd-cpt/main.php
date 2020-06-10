<?php
/*
Plugin Name: Elated CPT
Description: Plugin that adds all post types needed by our theme
Author: Elated Themes
Version: 2.1
*/

require_once 'load.php';

use ElatedCPT\CPT;
use ElatedCPT\Lib;

add_action('after_setup_theme', array(CPT\PostTypesRegister::getInstance(), 'register'));

Lib\ShortcodeLoader::getInstance()->load();

if(!function_exists('elated_cpt_activation')) {
    /**
     * Triggers when plugin is activated. It calls flush_rewrite_rules
     * and defines eltd_cpt_on_activate action
     */
    function elated_cpt_activation() {
        do_action('eltd_cpt_on_activate');

        ElatedCPT\CPT\PostTypesRegister::getInstance()->register();
        flush_rewrite_rules();
    }

    register_activation_hook(__FILE__, 'elated_cpt_activation');
}

if(!function_exists('elated_cpt_text_domain')) {
    /**
     * Loads plugin text domain so it can be used in translation
     */
    function elated_cpt_text_domain() {
        load_plugin_textdomain('eltd-cpt', false, ELATED_CPT_REL_PATH.'/languages');
    }

    add_action('plugins_loaded', 'elated_cpt_text_domain');
}

if(!function_exists('elated_cpt_theme_menu')) {
	/**
	 * Function that generates admin menu for options page.
	 * It generates one admin page per options page.
	 */
	function elated_cpt_theme_menu() {
		
		if ( elated_cpt_is_installed('theme') ) {
			global $moose_elated_framework;
			moose_elated_init_theme_options();
			
			$page_hook_suffix = add_menu_page(
				esc_html__('Elated Options', 'eltd-cpt'),
				// The value used to populate the browser's title bar when the menu page is active
				esc_html__('Elated Options', 'eltd-cpt'),
				// The text of the menu in the administrator's sidebar
				'administrator',
				// What roles are able to access the menu
				'moose_elated_theme_menu',
				// The ID used to bind submenu items to this menu
				array( $moose_elated_framework->getSkin(), 'renderOptions' ),
				// The callback function used to render this menu
				$moose_elated_framework->getSkin()->getMenuIcon( 'options' ),
				// Icon For menu Item
				$moose_elated_framework->getSkin()->getMenuItemPosition( 'options' )            // Position
			);
			
			foreach ($moose_elated_framework->eltdOptions->adminPages as $key => $value ) {
				$slug = "";
				
				if ( ! empty( $value->slug ) ) {
					$slug = "_tab" . $value->slug;
				}
				
				$subpage_hook_suffix = add_submenu_page(
					'moose_elated_theme_menu',
					esc_html__('Elated Options - ', 'eltd-cpt') . $value->title,
					// The value used to populate the browser's title bar when the menu page is active
					$value->title,
					// The text of the menu in the administrator's sidebar
					'administrator',
					// What roles are able to access the menu
					'moose_elated_theme_menu' . $slug,
					// The ID used to bind submenu items to this menu
					array( $moose_elated_framework->getSkin(), 'renderOptions' )
				);
				
				add_action(
					'admin_print_scripts-' . $subpage_hook_suffix,
					'moose_elated_enqueue_admin_scripts'
				);
				add_action(
					'admin_print_styles-' . $subpage_hook_suffix,
					'moose_elated_enqueue_admin_styles'
				);
			};
			
			add_action(
				'admin_print_scripts-' . $page_hook_suffix,
				'moose_elated_enqueue_admin_scripts'
			);
			add_action(
				'admin_print_styles-' . $page_hook_suffix,
				'moose_elated_enqueue_admin_styles'
			);
		}
	}
	
	add_action( 'admin_menu', 'elated_cpt_theme_menu' );
}