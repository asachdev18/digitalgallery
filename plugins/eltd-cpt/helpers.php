<?php


if ( ! function_exists('elated_cpt_is_installed') ) {
	/**
	 * Function that checks if forward module installed
	 *
	 * @param $name string - module name
	 *
	 * @return bool
	 */
	function elated_cpt_is_installed($name ) {
		
		switch ( $name ) {
			case 'theme';
				return defined( 'MOOSE_ELATED' );
				break;
			case 'woocommerce';
				return function_exists( 'is_woocommerce' );
				break;
			case 'gutenberg-editor';
				return function_exists( 'register_block_type' );
				break;
			default:
				return false;
		}
	}
}
add_filter( 'widget_text', 'do_shortcode' );
add_filter( 'call_to_action_widget', 'do_shortcode' );

if(!function_exists('elated_cpt_version_class')) {
    /**
     * Adds plugins version class to body
     * @param $classes
     * @return array
     */
    function elated_cpt_version_class($classes) {
        $classes[] = 'eltd-cpt-'.ELATED_CPT_VERSION;

        return $classes;
    }

    add_filter('body_class', 'elated_cpt_version_class');
}

if(!function_exists('elated_cpt_theme_installed')) {
    /**
     * Checks whether theme is installed or not
     * @return bool
     */
    function elated_cpt_theme_installed() {
        return defined('ELATED_ROOT');
    }
}

if (!function_exists('elated_cpt_get_carousel_slider_array')){
    /**
     * Function that returns associative array of carousels,
     * where key is term slug and value is term name
     * @return array
     */
    function elated_cpt_get_carousel_slider_array() {
        $carousels_array = array();
        $terms = get_terms('carousels_category');

        if (is_array($terms) && count($terms)) {
            $carousels_array[''] = '';
            foreach ($terms as $term) {
                $carousels_array[$term->slug] = $term->name;
            }
        }

        return $carousels_array;
    }
}

if(!function_exists('elated_cpt_get_carousel_slider_array_vc')) {
    /**
     * Function that returns array of carousels formatted for Visual Composer
     *
     * @return array array of carousels where key is term title and value is term slug
     *
     * @see elated_cpt_get_carousel_slider_array
     */
    function elated_cpt_get_carousel_slider_array_vc() {
        return array_flip(elated_cpt_get_carousel_slider_array());
    }
}

if(! function_exists('elated_cpt_include_meta_boxes')){
	function elated_cpt_include_meta_boxes(){
		if ( class_exists( 'WP_Block_Type' ) && elated_cpt_is_installed('theme') ) {
			add_action( 'admin_head', 'moose_elated_meta_box_add' );
		} else if( elated_cpt_is_installed('theme') ) {
			add_action( 'add_meta_boxes', 'moose_elated_meta_box_add' );
		}
	}
	
	add_action('after_setup_theme', 'elated_cpt_include_meta_boxes');
}

if ( ! function_exists('elated_cpt_create_meta_box_handler') ) {
	function elated_cpt_create_meta_box_handler($box, $key, $screen ) {
		add_meta_box(
			'eltdf-meta-box-'.$key,
			$box->title,
			'moose_elated_render_meta_box',
			$box->scope,
			'advanced',
			'high',
			array( 'box' => $box)
		);
	}
}

if(!function_exists('elated_cpt_header_meta')) {
	/**
	 * Function that echoes meta data if our seo is enabled
	 */
	function elated_cpt_header_meta() {
		$moose_elated_options = moose_elated_return_global_options();
		
		if(moose_elated_is_seo_enabled() && !moose_elated_seo_plugin_installed()) {
			$seo_description = get_post_meta(moose_elated_get_page_id(), "eltd_seo_description", true);
			$seo_keywords = get_post_meta(moose_elated_get_page_id(), "eltd_seo_keywords", true);
			?>
			
			<?php if($seo_description) { ?>
				<meta name="description" content="<?php echo esc_html($seo_description); ?>">
			<?php } else if($moose_elated_options['meta_description']){ ?>
				<meta name="description" content="<?php echo esc_html($moose_elated_options['meta_description']) ?>">
			<?php } ?>
			
			<?php if($seo_keywords) { ?>
				<meta name="keywords" content="<?php echo esc_html($seo_keywords); ?>">
			<?php } else if($moose_elated_options['meta_keywords']){ ?>
				<meta name="keywords" content="<?php echo esc_html($moose_elated_options['meta_keywords']) ?>">
			<?php }
		}
		if(moose_elated_is_ios_format_detection_disabled()){ ?>
			<meta name="format-detection" content="telephone=no">
		<?php }
		
		?>
		
		<?php
		if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
			echo('<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">');
		?>
		
		
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url($moose_elated_options['favicon_image']); ?>">
			<link rel="apple-touch-icon" href="<?php echo esc_url($moose_elated_options['favicon_image']); ?>"/>
		<?php } ?>
	
	<?php }
	
	add_action('moose_elated_header_meta', 'elated_cpt_header_meta', 11);
}

if(!function_exists('elated_cpt_is_ajax')) {
	/**
	 * Function that checks if current request is ajax request
	 * @return bool whether it's ajax request or not
	 *
	 * @version 0.1
	 */
	function elated_cpt_is_ajax() {
		return !empty( $_SERVER[ 'HTTP_X_REQUESTED_WITH' ]) && strtolower( $_SERVER[ 'HTTP_X_REQUESTED_WITH' ]) == 'xmlhttprequest';
	}
}

if(!function_exists('elated_cpt_maintenance_mode')) {
	/**
	 * Function that redirects user to desired landing page if maintenance mode is turned on in options
	 */
	function elated_cpt_maintenance_mode() {
		$moose_elated_options = moose_elated_return_global_options();
		
		$protocol = is_ssl() ? "https://" : "http://";
		if(isset($moose_elated_options['moose_elated_maintenance_mode']) && $moose_elated_options['moose_elated_maintenance_mode'] == 'yes' && isset($moose_elated_options['eltd_maintenance_page']) && $moose_elated_options['eltd_maintenance_page'] != ""
		   && !in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'))
		   && !is_admin()
		   && !is_user_logged_in()
		   && $protocol.getenv('SERVER_NAME').getenv('REQUEST_URI') != get_permalink($moose_elated_options['eltd_maintenance_page'])
		) {
			
			wp_redirect(get_permalink($moose_elated_options['eltd_maintenance_page']));
			exit;
		}
	}
}

if(!function_exists('elated_cpt_initial_maintenance')) {
	/**
	 * Function that initalize maintenance function
	 */
	function elated_cpt_initial_maintenance() {
		$moose_elated_options = moose_elated_return_global_options();
		
		if(isset($moose_elated_options['moose_elated_maintenance_mode']) && $moose_elated_options['moose_elated_maintenance_mode'] == 'yes') {
			add_action('init', 'moose_elated_maintenance_mode', 2);
		}
	}
	
	add_action('init', 'elated_cpt_initial_maintenance', 1);
}


if(!function_exists('elated_cpt_ajax_meta')) {
	/**
	 * Function that echoes meta data for ajax
	 *
	 * @since 4.3
	 * @version 0.2
	 */
	function elated_cpt_ajax_meta() {
		$moose_elated_options = moose_elated_return_global_options();

		$seo_description = get_post_meta(moose_elated_get_page_id(), "eltd_seo_description", true);
		$seo_keywords = get_post_meta(moose_elated_get_page_id(), "eltd_seo_keywords", true);
		?>

		<div class="seo_title"><?php wp_title('|', true, 'right'); ?></div>

		<?php if($seo_description !== ''){ ?>
			<div class="seo_description"><?php echo esc_html($seo_description); ?></div>
		<?php } else if($moose_elated_options['meta_description']){?>
			<div class="seo_description"><?php echo esc_html($moose_elated_options['meta_description']); ?></div>
		<?php } ?>
		<?php if($seo_keywords !== ''){ ?>
			<div class="seo_keywords"><?php echo esc_html($seo_keywords); ?></div>
		<?php }else if($moose_elated_options['meta_keywords']){?>
			<div class="seo_keywords"><?php echo esc_html($moose_elated_options['meta_keywords']); ?></div>
		<?php }
	}

	add_action('moose_elated_ajax_meta', 'elated_cpt_ajax_meta');
}