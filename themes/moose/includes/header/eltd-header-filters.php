<?php

if(!function_exists('moose_elated_header_classes')) {
	/**
	 * Function that acts like filter for header classes based on theme settings
	 * @param array array of classes to add to header tag
	 *
	 * @see apply_filters()
	 */
	function moose_elated_header_classes($classes = array()) {
		$classes = array('page_header');
		$classes = apply_filters('moose_elated_header_classes', $classes);

		if(is_array($classes) && count($classes)) {
			echo implode(' ', $classes);
		}
	}
}

if(!function_exists('moose_elated_transparent_header_class')) {
	/**
	 * Function that adds transparency class to header based on page or theme options
	 *
*@param array array of classes from main filter
	 *
*@return array array of classes with added transparent class
	 *
	 * @see moose_elated_is_default_wp_template()
	 */
	function moose_elated_transparent_header_class($classes) {
		global $wp_query;
		global $moose_elated_options;

		$id = $wp_query->get_queried_object_id();

		if(moose_elated_is_woocommerce_page()) {
			$id = get_option('woocommerce_shop_page_id');
		}

		$is_header_transparent  	= false;
		$transparent_values_array 	= array('0.00', '0');
		$is_archive = moose_elated_is_default_wp_template();
        $sticky_headers_array       = array('stick','stick menu_bottom','stick_with_left_right_menu','stick compound');
        $fixed_headers_array        = array('fixed','fixed fixed_minimal','fixed_hiding','fixed_top_header');

		//is header transparent set on current page?
		if(!$is_archive && get_post_meta($id, "eltd_header_color_transparency_per_page", true) !== "") {
			//take value set for current page
			$transparent_header = esc_attr(get_post_meta($id, "eltd_header_color_transparency_per_page", true));
		} elseif(isset($moose_elated_options['header_background_transparency_initial'])) {
			//take value set in global options
			$transparent_header = $moose_elated_options['header_background_transparency_initial'];
		}

		//is header completely transparent?
		$is_header_transparent 	= in_array($transparent_header, $transparent_values_array);
		if($is_header_transparent) {
			$classes[]= 'transparent';
		}
		
		//is header transparent on scrolled window?
		if(isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] !== 'regular' &&
            ((!in_array($moose_elated_options['header_background_transparency_sticky'], $transparent_values_array) && in_array($moose_elated_options['header_bottom_appearance'], $sticky_headers_array)) ||
                (!in_array($moose_elated_options['header_background_transparency_scroll'], $transparent_values_array) && in_array($moose_elated_options['header_bottom_appearance'], $fixed_headers_array)))) {
			$classes[] = 'scrolled_not_transparent';
		}

		return $classes;
	}

	add_filter('moose_elated_header_classes', 'moose_elated_transparent_header_class');
}

if(!function_exists('moose_elated_with_border_header_class')) {
	/**
	 * Function that adds border class on header tag
	 *
*@param array array of classes from main filter
	 *
*@return array array of classes with added border class
	 *
     * @see moose_elated_is_default_wp_template()
	 */
	function moose_elated_with_border_header_class($classes) {
		global $moose_elated_options;

		$header_with_border = isset($moose_elated_options['header_bottom_border_color']) && $moose_elated_options['header_bottom_border_color'] != '';
		if($header_with_border) {
			$classes[]= 'with_border';
		}

		return $classes;
	}

	add_filter('moose_elated_header_classes', 'moose_elated_with_border_header_class');
}

if(!function_exists('moose_elated_wide_first_level_menu_bkg_header_class')) {
	/**
	 * Function that shows wide background in 1st level menu 
	 *
*@param array array of classes from main filter
	 *
*@return array array of classes with added wide background class
     *
     * @see moose_elated_is_default_wp_template()
	 */
	function moose_elated_wide_first_level_menu_bkg_header_class($classes) {
		global $moose_elated_options;

		$eltd_wide_first_level_menu_bkg_header_class = ((isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] == "fixed_hiding") || (isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] == "stick menu_bottom") ) && isset($moose_elated_options['enable_menu_wide_background']) && $moose_elated_options['enable_menu_wide_background'] == 'yes';
		if($eltd_wide_first_level_menu_bkg_header_class) {
			$classes[]= 'first_level_menu_wide_bkg';
		}

		return $classes;
	}

	add_filter('moose_elated_header_classes', 'moose_elated_wide_first_level_menu_bkg_header_class');
}

if(!function_exists('moose_elated_top_header_class')) {
	/**
	 * Function that adds top header class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added top header class
	 */
	function moose_elated_top_header_class($classes) {
		global $moose_elated_options;

		$display_header_top = "yes";
		if(isset($moose_elated_options['header_top_area'])){
			$display_header_top = $moose_elated_options['header_top_area'];
		}

		if($display_header_top == 'yes') {
			$classes[] = 'has_top';
		}

		return $classes;
	}

	add_filter('moose_elated_header_classes', 'moose_elated_top_header_class');
}

if(!function_exists('moose_elated_has_woocommerce_dropdown_class')) {
	/**
	 * Function that adds woocommerce dropdown class to header tag
	 *
*@param array array of classes from main filter
	 *
*@return array array of classes with added woocommerce dropdown class
	 *
	 * @see moose_elated_is_woocommerce_installed()
	 */
	function moose_elated_has_woocommerce_dropdown_class($classes) {
		if(is_active_sidebar('woocommerce_dropdown') && moose_elated_is_woocommerce_installed()) {
			$classes[]= 'has_woocommerce_dropdown ';
		}

		return $classes;
	}

	add_filter('moose_elated_header_classes', 'moose_elated_has_woocommerce_dropdown_class');
}

if(!function_exists('moose_elated_scroll_top_header_class')) {
	/**
	 * Function that adds top header scroll class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added top header scroll class
	 */
	function moose_elated_scroll_top_header_class($classes) {
		global $moose_elated_options;

		$header_top_area_scroll = "no";
		if(isset($moose_elated_options['header_top_area_scroll'])){
			$header_top_area_scroll = $moose_elated_options['header_top_area_scroll'];
        }

		if($header_top_area_scroll == 'yes') {
			$classes[] = 'scroll_top';
		}

		if($moose_elated_options['header_top_area_scroll'] == 'no' && $moose_elated_options['header_top_area'] == 'yes') {
			$classes[]= 'scroll_header_top_area';
		}

		return $classes;
	}

	add_filter('moose_elated_header_classes' ,'moose_elated_scroll_top_header_class');
}

if(!function_exists('moose_elated_center_logo_class')) {
	/**
	 * Function that adds center logo class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added center logo class
	 */
	function moose_elated_center_logo_class($classes) {
		global $moose_elated_options;

		if((isset($moose_elated_options['center_logo_image']) && $moose_elated_options['center_logo_image'] == 'yes' && $moose_elated_options['header_bottom_appearance'] !== "stick_with_left_right_menu") || (isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] == "fixed_hiding")) {
			$classes[] = 'centered_logo';
		}

		return $classes;
	}

	add_filter('moose_elated_header_classes', 'moose_elated_center_logo_class');
}

if(!function_exists('moose_elated_header_fixed_right_class')) {
	/**
	 * Function that adds fixed header class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added fixed header class
	 */
	function moose_elated_header_fixed_right_class($classes) {
		if(is_active_sidebar('header_fixed_right')) {
			$classes[]= 'has_header_fixed_right';
		}

		return $classes;
	}

	add_filter('moose_elated_header_classes', 'moose_elated_header_fixed_right_class');
}

if(!function_exists('moose_elated_header_style_class')) {
	/**
	 * Function that adds header style class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added header style class
	 */
	function moose_elated_header_style_class($classes) {
		global $wp_query;
		global $moose_elated_options;

		$id = $wp_query->get_queried_object_id();

		if(moose_elated_is_woocommerce_page()) {
			$id = get_option('woocommerce_shop_page_id');
		}

		if(get_post_meta($id, "eltd_header-style", true) != ""){
			$classes[]= get_post_meta($id, "eltd_header-style", true);
		} else if(isset($moose_elated_options['header_style'])){
			$classes[]= $moose_elated_options['header_style'];
		}

		return $classes;
	}

	add_filter('moose_elated_header_classes', 'moose_elated_header_style_class');
}

if(!function_exists('moose_elated_header_style_on_scroll_class')) {
    /**
     * Function that adds header style class to header tag
     * @param array array of classes from main filter
     * @return array array of classes with added header style class
     */
    function moose_elated_header_style_on_scroll_class($classes) {
        global $wp_query;
        global $moose_elated_options;

        $id = $wp_query->get_queried_object_id();

        if(moose_elated_is_woocommerce_page()) {
            $id = get_option('woocommerce_shop_page_id');
        }

        if(get_post_meta($id, "eltd_header-style-on-scroll", true) != ""){
            if(get_post_meta($id, "eltd_header-style-on-scroll", true) == "yes") {
                $classes[] = 'header_style_on_scroll';
            }
        } else if(isset($moose_elated_options['enable_header_style_on_scroll']) && $moose_elated_options['enable_header_style_on_scroll'] == 'yes'){
            $classes[]= 'header_style_on_scroll';
        }

        return $classes;
    }

    add_filter('moose_elated_header_classes', 'moose_elated_header_style_on_scroll_class');
}

if(!function_exists('moose_elated_header_class_first_level_bg_color')) {
	/**
	 * Function that adds first level menu background color class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added first level menu background color class
	 */
	function moose_elated_header_class_first_level_bg_color($classes) {
		global $moose_elated_options;

		//check if first level hover background color is set
		$has_first_lvl_bg_color = isset($moose_elated_options['menu_hover_background_color']) && $moose_elated_options['menu_hover_background_color'] !== '';

		if($has_first_lvl_bg_color) {
			$classes[]= 'with_hover_bg_color';
		}

		return $classes;
	}

	add_filter('moose_elated_header_classes', 'moose_elated_header_class_first_level_bg_color');
}

if(!function_exists('moose_elated_header_bottom_appearance_class')) {
	/**
	 * Function that adds bottom header appearance class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added bottom header appearance class
	 */
	function moose_elated_header_bottom_appearance_class($classes) {
		global $moose_elated_options;

        if(isset($moose_elated_options['header_bottom_appearance'])){
			$classes[]= $moose_elated_options['header_bottom_appearance'];
		} else {
			$classes[]= 'fixed';
		}

		return $classes;
	}

	add_filter('moose_elated_header_classes', 'moose_elated_header_bottom_appearance_class');
}

if(!function_exists('moose_elated_header_menu_items_position_class')) {
    /**
     * Function that ajax header animation class to header tag
     * @param array array of classes from main filter
     * @return array of classes with added ajax header animation class
     */
    function moose_elated_header_menu_items_position_class($classes) {
        global $moose_elated_options;

        if(isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] == 'stick_with_left_right_menu' && isset($moose_elated_options['menu_items_position'])){
            $classes[]= $moose_elated_options['menu_items_position'];
        }

        return $classes;
    }

    add_filter('moose_elated_header_classes', 'moose_elated_header_menu_items_position_class');
}

if(!function_exists('moose_elated_header_paspartu_alignment_class')) {
    /**
     * Function that adds paspartu alignment class to header tag
     * @param array array of classes from main filter
     * @return array of classes with added paspartu alignment class
     */
    function moose_elated_header_paspartu_alignment_class($classes) {
        global $moose_elated_options;

        if(isset($moose_elated_options['paspartu_header_alignment']) && $moose_elated_options['paspartu_header_alignment'] == 'yes' && isset($moose_elated_options['paspartu']) && $moose_elated_options['paspartu'] == 'yes'){
            $classes[]= 'paspartu_header_alignment';
        }
		
		if(isset($moose_elated_options['paspartu_header_inside']) && $moose_elated_options['paspartu_header_inside'] == 'yes' && isset($moose_elated_options['paspartu']) && $moose_elated_options['paspartu'] == 'yes'){
            $classes[]= 'paspartu_header_inside';
        }

        return $classes;
    }

    add_filter('moose_elated_header_classes', 'moose_elated_header_paspartu_alignment_class');
}

if(!function_exists('moose_elated_header_ajax_header_animation_class')) {
    /**
     * Function that ajax header animation class to header tag
     * @param array array of classes from main filter
     * @return array of classes with added ajax header animation class
     */
    function moose_elated_header_ajax_header_animation_class($classes) {

        if(moose_elated_is_ajax_header_animation_enabled()){
            $classes[]= 'ajax_header_animation';
        }

        return $classes;
    }

    add_filter('moose_elated_header_classes', 'moose_elated_header_ajax_header_animation_class');
}