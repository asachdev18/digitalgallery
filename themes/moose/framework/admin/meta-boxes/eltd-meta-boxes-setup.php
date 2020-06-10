<?php

if(!function_exists('moose_elated_meta_boxes_map_init')) {
	function moose_elated_meta_boxes_map_init() {

		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/meta-boxes/page/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/meta-boxes/portfolio/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/meta-boxes/slides/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/meta-boxes/post/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/meta-boxes/testimonials/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/meta-boxes/carousels/map.php');
		require_once(MOOSE_ELATED_ROOT_DIR . '/framework/admin/meta-boxes/masonry_gallery/map.php');
	}

	add_action('after_setup_theme', 'moose_elated_meta_boxes_map_init', 1);
}