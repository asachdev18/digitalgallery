<?php
if(!function_exists('moose_elated_admin_map_init')) {

	function moose_elated_admin_map_init() {

		do_action('moose_elated_action_before_options_map');

		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/10.general/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/20.logo/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/30.header/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/40.title/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/50.content/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/60.footer/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/70.fonts/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/80.elements/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/90.blog/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/100.portfolio/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/110.slider/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/120.social/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/130.error404/map.php');
		if (moose_elated_visual_composer_installed() && version_compare(moose_elated_get_vc_version(), '4.4.2') >= 0) {
			require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/140.visualcomposer/map.php');
		} else {
			moose_elated_framework()->eltdOptions->addOption('enable_grid_elements', 'no');
		}
		if (moose_elated_contact_form_7_installed()) {
			require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/150.contactform7/map.php');
		}
		if (function_exists('is_woocommerce')) {
			require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/160.woocommerce/map.php');
		}
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/options/170.reset/map.php');
	}

	add_action('after_setup_theme', 'moose_elated_admin_map_init', 0);
}