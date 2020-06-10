<?php

if(!function_exists('moose_elated_is_responsive_on')) {
    /**
     * Checks whether responsive mode is enabled in theme options
     * @return bool
     */
    function moose_elated_is_responsive_on() {
        global $moose_elated_options;

        return isset($moose_elated_options['responsiveness']) && $moose_elated_options['responsiveness'] !== 'no';
    }
}

if(!function_exists('moose_elated_is_seo_enabled')) {
    /**
     * Checks if SEO is enabled in theme options
     * @return bool
     */
    function moose_elated_is_seo_enabled() {
        global $moose_elated_options;

        return isset($moose_elated_options['disable_eltd_seo']) && $moose_elated_options['disable_eltd_seo'] == 'no';
    }
}

if(!function_exists('moose_elated_is_ios_format_detection_disabled')){
    /**
     * Checks whether iOS format detection is enabled in theme options
     * @return bool
     */
    function moose_elated_is_ios_format_detection_disabled(){
        global $moose_elated_options;

        return isset($moose_elated_options['ios_format_detection']) && $moose_elated_options['ios_format_detection'] == 'yes';
    }
}

if(!function_exists('moose_elated_get_header_variables')) {
    function moose_elated_get_header_variables() {
        global $moose_elated_options;

        //init variables
        $id = moose_elated_get_page_id();
        $loading_animation = true;
        $loading_image =  "";
        $enable_side_area = "yes";
        $enable_popup_menu = "no";
        $popup_menu_animation_style = '';
        $enable_fullscreen_search = "no";
        $fullscreen_search_animation = "fade";
        $fullscreen_search_in_header_top = "";
        $header_button_size = '';
        $paspartu_header_alignment = false;
        $header_in_grid = true;
        $header_bottom_class = ' header_in_grid';
        $menu_item_icon_position = "";
        $menu_position = "";
        $centered_logo = moose_elated_is_logo_centered();
        $enable_border_top_bottom_menu = false;
        $menu_dropdown_appearance_class = "";
		$menu_hover_animation_class = "";
        $logo_wrapper_style = "";
        $divided_left_menu_padding = "";
        $divided_right_menu_padding = "";
        $display_header_top = "yes";
        $header_top_area_scroll = "no";
        $header_style = moose_elated_get_header_style();
        $header_color_transparency_per_page = moose_elated_get_header_transparency();
        $header_color_per_page = "";
        $header_top_color_per_page = "";
        $header_color_transparency_on_scroll = "";
        $header_bottom_border_style = '';
        $header_bottom_appearance = 'fixed';
        $header_transparency = '';
        $enable_vertical_menu = false;
        $enable_search_left_sidearea_right = false;
        $vertical_area_background_image = "";
        $vertical_menu_style = "toggle";
        $vertical_area_scroll = " with_scroll";
        $page_vertical_area_background_transparency = "";
        $page_vertical_area_background = "";
        $header_search_type = "";
        $frame_around_content_class = '';
        $content_class = '';
        $paspartu_additional_classes = '';
        $eltd_back_to_top_button_styles = '';

        if (isset($moose_elated_options['loading_animation'])) {
            if($moose_elated_options['loading_animation'] == "off") {
                $loading_animation = false;
            }
        }

        if (isset($moose_elated_options['loading_image']) && $moose_elated_options['loading_image'] != "") {
            $loading_image = $moose_elated_options['loading_image'];
        }

        if (isset($moose_elated_options['enable_side_area'])) {
            if($moose_elated_options['enable_side_area'] == "no") {
                $enable_side_area = "no";
            }
        }

        if (isset($moose_elated_options['enable_popup_menu'])) {
            if($moose_elated_options['enable_popup_menu'] == "yes" && has_nav_menu('popup-navigation')) {
                $enable_popup_menu = "yes";
            }

            if (isset($moose_elated_options['popup_menu_animation_style']) && !empty($moose_elated_options['popup_menu_animation_style'])) {
                $popup_menu_animation_style = $moose_elated_options['popup_menu_animation_style'];
            }
        }

        if(isset($moose_elated_options['enable_search']) && $moose_elated_options['enable_search'] == "yes" && isset($moose_elated_options['search_type']) && $moose_elated_options['search_type'] == "fullscreen_search" ){
            $enable_fullscreen_search="yes";
        }

        if(isset($moose_elated_options['search_type']) && $moose_elated_options['search_type'] == "fullscreen_search" && isset($moose_elated_options['search_animation']) && $moose_elated_options['search_animation'] !== "" ){
            $fullscreen_search_animation = $moose_elated_options['search_animation'];
        }

        if(isset($moose_elated_options['search_icon_in_header_top']) && $moose_elated_options['search_icon_in_header_top'] == 'yes'){
        	$fullscreen_search_in_header_top = " fullscreen_search_in_header_top";
        }

        if(isset($moose_elated_options['header_buttons_size'])){
            $header_button_size = $moose_elated_options['header_buttons_size'];
        }

        if(isset($moose_elated_options['paspartu_header_alignment'])
            && $moose_elated_options['paspartu_header_alignment'] == 'yes'
            && isset($moose_elated_options['paspartu'])
            && $moose_elated_options['paspartu'] == 'yes') {
            $paspartu_header_alignment = true;
        }

        if ($moose_elated_options['header_in_grid'] == "no" || $paspartu_header_alignment){
            $header_in_grid = false;
        }

        if($header_in_grid) {
            $header_bottom_class = ' header_in_grid';
        } else {
            $header_bottom_class = ' header_full_width';
        }

        if(isset($moose_elated_options['menu_item_icon_position'])) {
            $menu_item_icon_position = $moose_elated_options['menu_item_icon_position'];
        }

        if(isset($moose_elated_options['menu_position'])) {
            $menu_position = $moose_elated_options['menu_position'];
        }


        if(isset($moose_elated_options['enable_border_top_bottom_menu']) && $moose_elated_options['enable_border_top_bottom_menu'] == "yes") {
            $enable_border_top_bottom_menu = true;
        }

        if(isset($moose_elated_options['menu_dropdown_appearance']) && $moose_elated_options['menu_dropdown_appearance'] != "default"){
            $menu_dropdown_appearance_class = $moose_elated_options['menu_dropdown_appearance'];
        }
		
		if(isset($moose_elated_options['menu_item_hover_animation']) && $moose_elated_options['menu_item_hover_animation'] != "default" ){
			$menu_hover_animation_class = $moose_elated_options['menu_item_hover_animation'];
		}

        if(isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] == "stick_with_left_right_menu"){
            $logo_wrapper_style = 'width:'.(esc_attr($moose_elated_options['logo_width'])/2).'px;';
            $divided_left_menu_padding = 'padding-right:'.(esc_attr($moose_elated_options['logo_width'])/4).'px;';
            $divided_right_menu_padding = 'padding-left:'.(esc_attr($moose_elated_options['logo_width'])/4).'px;';
        }

        if($moose_elated_options['center_logo_image'] == "yes" && $moose_elated_options['header_bottom_appearance'] == "regular"){
            $logo_wrapper_style = 'height:'.(esc_attr($moose_elated_options['logo_height'])/2).'px;';
        }

        if(isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] == "fixed_top_header"){
            $logo_wrapper_style = 'height:'.(esc_attr($moose_elated_options['logo_height'])/2).'px;';
        }

        if(isset($moose_elated_options['header_top_area'])){
            $display_header_top = $moose_elated_options['header_top_area'];
        }

        if(isset($moose_elated_options['header_top_area_scroll'])){
            $header_top_area_scroll = $moose_elated_options['header_top_area_scroll'];
        }

        if(get_post_meta($id, "eltd_header_color_per_page", true) != ""){
            if($header_color_transparency_per_page != ""){
                $header_background_color = moose_elated_hex2rgb(esc_attr(get_post_meta($id, "eltd_header_color_per_page", true)));
                $header_color_per_page .= "background-color:rgba(" . $header_background_color[0] . ", " . $header_background_color[1] . ", " . $header_background_color[2] . ", " . $header_color_transparency_per_page . ");";
            }else{
                $header_color_per_page .= "background-color:" . esc_attr(get_post_meta($id, "eltd_header_color_per_page", true)) . ";";
            }
        } else if($header_color_transparency_per_page != "" && get_post_meta($id, "eltd_header_color_per_page", true) == ""){
            $header_background_color = $moose_elated_options['header_background_color'] ? moose_elated_hex2rgb(esc_attr($moose_elated_options['header_background_color'])) : moose_elated_hex2rgb("#ffffff");
            $header_color_per_page .= "background-color:rgba(" . $header_background_color[0] . ", " . $header_background_color[1] . ", " . $header_background_color[2] . ", " . $header_color_transparency_per_page . ");";
        }

        if(isset($moose_elated_options['header_botom_border_in_grid']) && $moose_elated_options['header_botom_border_in_grid'] != "yes" && get_post_meta($id, "eltd_header_bottom_border_color", true) != ""){
            $header_color_per_page .= "border-bottom: 1px solid ".esc_attr(get_post_meta($id, "eltd_header_bottom_border_color", true)).";";
        }

        if(get_post_meta($id, "eltd_header_color_per_page", true) != ""){
            if($header_color_transparency_per_page != ""){
                $header_background_color = moose_elated_hex2rgb(esc_attr(get_post_meta($id, "eltd_header_color_per_page", true)));
                $header_top_color_per_page .= "background-color:rgba(" . esc_attr($header_background_color[0]) . ", " . esc_attr($header_background_color[1]) . ", " . esc_attr($header_background_color[2]) . ", " . esc_attr($header_color_transparency_per_page) . ");";
            }else{
                $header_top_color_per_page .= "background-color:" . esc_attr(get_post_meta($id, "eltd_header_color_per_page", true)) . ";";
            }
        } else if($header_color_transparency_per_page != "" && get_post_meta($id, "eltd_header_color_per_page", true) == ""){
            $header_background_color = $moose_elated_options['header_top_background_color'] ? moose_elated_hex2rgb(esc_attr($moose_elated_options['header_top_background_color'])) : moose_elated_hex2rgb("#ffffff");
            $header_top_color_per_page .= "background-color:rgba(" . esc_attr($header_background_color[0]) . ", " . esc_attr($header_background_color[1]) . ", " . esc_attr($header_background_color[2]) . ", " . esc_attr($header_color_transparency_per_page) . ");";
        }

        if(isset($moose_elated_options['header_background_transparency_sticky']) && $moose_elated_options['header_background_transparency_sticky'] != ""){
            $header_color_transparency_on_scroll = $moose_elated_options['header_background_transparency_sticky'];
        }

        if(isset($moose_elated_options['header_botom_border_in_grid']) && $moose_elated_options['header_botom_border_in_grid'] == "yes" && get_post_meta($id, "eltd_header_bottom_border_color", true) != ""){
            $header_bottom_border_style = 'border-bottom: 1px solid '.esc_attr(get_post_meta($id, "eltd_header_bottom_border_color", true)).';';
        }

        if(isset($moose_elated_options['header_bottom_appearance'])){
            $header_bottom_appearance = $moose_elated_options['header_bottom_appearance'];
        }

        $per_page_header_transparency = esc_attr(get_post_meta($id, 'eltd_header_color_transparency_per_page', true));
        if($per_page_header_transparency !== '' && $per_page_header_transparency !== false) {
            $header_transparency = $per_page_header_transparency;
        } else {
            $header_transparency = esc_attr($moose_elated_options['header_background_transparency_initial']);
        }

        if(moose_elated_is_side_header()){
            $enable_vertical_menu = true;
        }

        if(isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] =='fixed_hiding'){
            if(isset($moose_elated_options['search_left_sidearea_right']) && $moose_elated_options['search_left_sidearea_right'] =='yes'){
                $enable_search_left_sidearea_right = true;
            }
        }else{
            if(isset($moose_elated_options['search_left_sidearea_right_regular']) && $moose_elated_options['search_left_sidearea_right_regular'] =='yes'){
                $enable_search_left_sidearea_right = true;
            }
        }

        if(isset($moose_elated_options['vertical_area_background_image']) && $moose_elated_options['vertical_area_background_image'] != "" && isset($moose_elated_options['vertical_area_dropdown_showing']) && $moose_elated_options['vertical_area_dropdown_showing'] != "side" && get_post_meta($id, "eltd_page_disable_vertical_area_background_image", true) != "yes") {
            $vertical_area_background_image = $moose_elated_options['vertical_area_background_image'];
        }
        if(get_post_meta($id, "eltd_page_vertical_area_background_image", true) != "" && get_post_meta($id, "eltd_page_disable_vertical_area_background_image", true) != "yes" && isset($moose_elated_options['vertical_area_dropdown_showing']) && $moose_elated_options['vertical_area_dropdown_showing'] != "side"){
            $vertical_area_background_image = get_post_meta($id, "eltd_page_vertical_area_background_image", true);
        }

        $vertical_area_dropdown_showing = $moose_elated_options['vertical_area_dropdown_showing'];

        switch($vertical_area_dropdown_showing){
            case 'hover':
                $vertical_menu_style = "toggle";
                break;
            case 'click':
                $vertical_menu_style = "toggle click";
                break;
            case 'side':
                $vertical_menu_style = "side";
                break;
            case 'to_content':
                $vertical_menu_style = "to_content";
                break;
            default:
                $vertical_menu_style = "toggle";

        }
        $vertical_area_scroll = " with_scroll";
        if ($vertical_area_dropdown_showing == 'to_content') {
            $vertical_area_scroll = "";
        }

        if(isset($moose_elated_options['paspartu']) && $moose_elated_options['paspartu'] == 'yes' && isset($moose_elated_options['vertical_menu_inside_paspartu']) && $moose_elated_options['vertical_menu_inside_paspartu'] == 'yes'){
            if($moose_elated_options['vertical_area_background_transparency'] != "") {
                $page_vertical_area_background_transparency = esc_attr($moose_elated_options['vertical_area_background_transparency']);
            }
            if(get_post_meta($id, "eltd_page_vertical_area_background_opacity", true) != ""){
                $page_vertical_area_background_transparency = esc_attr(get_post_meta($id, "eltd_page_vertical_area_background_opacity", true));
            }

            if(isset($moose_elated_options['vertical_area_dropdown_showing']) && $moose_elated_options['vertical_area_dropdown_showing'] == "side"){
                $page_vertical_area_background_transparency = 1;
            }
        }
        else if(isset($moose_elated_options['paspartu']) && $moose_elated_options['paspartu'] == 'no') {
            if($moose_elated_options['vertical_area_background_transparency'] != "") {
                $page_vertical_area_background_transparency = esc_attr($moose_elated_options['vertical_area_background_transparency']);
            }
            if(get_post_meta($id, "eltd_page_vertical_area_background_opacity", true) != ""){
                $page_vertical_area_background_transparency = esc_attr(get_post_meta($id, "eltd_page_vertical_area_background_opacity", true));
            }

            if(isset($moose_elated_options['vertical_area_dropdown_showing']) && $moose_elated_options['vertical_area_dropdown_showing'] == "side"){
                $page_vertical_area_background_transparency = 1;
            }
        }

        if(get_post_meta($id, "eltd_page_vertical_area_background", true) != ""){
            $page_vertical_area_background =esc_attr(get_post_meta($id, 'eltd_page_vertical_area_background', true));

        }else if(get_post_meta($id, "eltd_page_vertical_area_background", true) == ""){
            $page_vertical_area_background = $moose_elated_options['vertical_area_background'];
        }

        $bkg_image="";
        $page_vertical_area_background_style = "";
        $page_vertical_area_background_transparency_style = "";
        if($vertical_area_background_image != ""){ $bkg_image = 'background-image:url('.esc_url($vertical_area_background_image).');'; }
        if($page_vertical_area_background != ""){ $page_vertical_area_background_style = 'background-color:'.esc_attr($page_vertical_area_background).';'; }
        if($page_vertical_area_background_transparency != ""){ $page_vertical_area_background_transparency_style = 'opacity:'.esc_attr($page_vertical_area_background_transparency).';'; }

        $vertical_area_menu_items_arrow = '';
        if (isset($moose_elated_options['vertical_area_menu_items_arrow']) && $moose_elated_options['vertical_area_menu_items_arrow'] =='yes' ){
            $vertical_area_menu_items_arrow = 'with_arrow';
        }

		$header_search_type = 'search_slides_from_top';
		if(isset($moose_elated_options['search_type']) && $moose_elated_options['search_type'] !== '') {
			$header_search_type = $moose_elated_options['search_type'];
		}
		if(isset($moose_elated_options['search_type']) && $moose_elated_options['search_type'] == 'search_covers_header') {
			if (isset($moose_elated_options['search_cover_only_bottom_yesno']) && $moose_elated_options['search_cover_only_bottom_yesno']=='yes') {
				$header_search_type .= ' search_covers_only_bottom';
			}
		}
		if (isset($moose_elated_options['search_icon_background_full_height']) && $moose_elated_options['search_icon_background_full_height'] == 'yes'){
			$header_search_type .= ' search_icon_bckg_full';
		}

        if($moose_elated_options['frame_around_content'] == 'yes'){
            $frame_around_content_class = 'frame_around_content';
        }

        if((get_post_meta(moose_elated_get_page_id(), "eltd_revolution-slider", true) == "" && ($header_transparency == '' || $header_transparency == 1))  || get_post_meta($id, "eltd_enable_content_top_margin", true) == "yes" ){
            if($moose_elated_options['header_bottom_appearance'] == "fixed" || $moose_elated_options['header_bottom_appearance'] == "fixed_hiding" || $moose_elated_options['header_bottom_appearance'] == "fixed fixed_minimal"){
                $content_class = "content_top_margin";
            }else {
                $content_class = "content_top_margin_none";
            }
        }

        if(isset($moose_elated_options['header_bottom_appearance']) && ($moose_elated_options['header_bottom_appearance'] == "stick" || $moose_elated_options['header_bottom_appearance'] == "stick menu_bottom" || $moose_elated_options['header_bottom_appearance'] == "stick_with_left_right_menu" || $moose_elated_options['header_bottom_appearance'] == "stick compound")){
            if(get_post_meta(moose_elated_get_page_id(), "eltd_page_hide_initial_sticky", true) !== ''){
                if(get_post_meta(moose_elated_get_page_id(), "eltd_page_hide_initial_sticky", true) == 'yes'){
                    $content_class = " ";
                }
            }else if(isset($moose_elated_options['hide_initial_sticky']) && $moose_elated_options['hide_initial_sticky'] == 'yes') {
                $content_class = " ";
            }
        }


        if(moose_elated_get_page_template_name() == "full_screen"){
            // solution for top header
            if(!moose_elated_is_side_header()){
                if (($header_transparency == '' || $header_transparency == 1) || ($moose_elated_options['header_bottom_appearance'] == "regular" || $moose_elated_options['header_bottom_appearance'] == "fixed_top_header")) {
                    if ($moose_elated_options['header_bottom_appearance'] == "fixed" || $moose_elated_options['header_bottom_appearance'] == "fixed_hiding" || $moose_elated_options['header_bottom_appearance'] == "fixed fixed_minimal") {
                        $content_class = "content_top_margin_none";
                    }
                    elseif($moose_elated_options['header_bottom_appearance'] == 'stick menu_bottom'){
                        $content_class = ""; // delete class if exists
                    }
                    else {
                        $content_class = "content_top_margin_negative content_top_margin_none";
                    }
                }
            }

            // solution for paspartu on side and top header
            if((isset($moose_elated_options['paspartu']) && $moose_elated_options['paspartu'] == 'yes') && (isset($moose_elated_options['paspartu_on_top']) && $moose_elated_options['paspartu_on_top'] == 'yes')){
                if(isset($moose_elated_options['paspartu_on_top_fixed']) && $moose_elated_options['paspartu_on_top_fixed'] == 'yes'){
                    if(!(moose_elated_is_side_header() && (isset($moose_elated_options['vertical_menu_inside_paspartu']) && $moose_elated_options['vertical_menu_inside_paspartu'] == 'yes'))){ // not for this case
                        $content_class .= " content_top_margin_vm_paspartu";
                    }
                }
                else{
                    // not resolved
                }
            }
        }

//check if there is slider added and set class to content div, this is used for content top margin in style_dynamic.php
        if(get_post_meta(moose_elated_get_page_id(), "eltd_revolution-slider", true) != ""){
            $content_class .= " has_slider";
        }

        if(isset($moose_elated_options['paspartu_on_top']) && $moose_elated_options['paspartu_on_top'] == 'no'){
            $paspartu_additional_classes .= " disable_top_paspartu";
        }
        if(isset($moose_elated_options['paspartu_on_bottom']) && $moose_elated_options['paspartu_on_bottom'] == 'no'){
            $paspartu_additional_classes .= " disable_bottom_paspartu";
        }
        if(isset($moose_elated_options['paspartu_on_bottom_slider']) && $moose_elated_options['paspartu_on_bottom_slider'] == 'yes'){
            $paspartu_additional_classes .= " paspartu_on_bottom_slider";
        }
        if((isset($moose_elated_options['paspartu_on_bottom']) && $moose_elated_options['paspartu_on_bottom'] == 'yes' && isset($moose_elated_options['paspartu_on_bottom_fixed']) && $moose_elated_options['paspartu_on_bottom_fixed'] == 'yes') ||
           (moose_elated_is_side_header() && isset($moose_elated_options['vertical_menu_inside_paspartu']) && $moose_elated_options['vertical_menu_inside_paspartu'] == 'yes')){
            $paspartu_additional_classes .= " paspartu_on_bottom_fixed";
        }

        if(isset($moose_elated_options['back_to_top_position']) && !empty($moose_elated_options['back_to_top_position'])) {
            $eltd_back_to_top_button_styles = $moose_elated_options['back_to_top_position'];
        }

        return array(
            'id' => $id,
            'loading_animation' => $loading_animation,
            'loading_image' => $loading_image,
            'enable_side_area' => $enable_side_area,
            'enable_popup_menu' => $enable_popup_menu,
            'popup_menu_animation_style' => $popup_menu_animation_style,
            'enable_fullscreen_search' => $enable_fullscreen_search,
            'fullscreen_search_animation' => $fullscreen_search_animation,
            'fullscreen_search_in_header_top' => $fullscreen_search_in_header_top,
            'header_button_size' => $header_button_size,
            'header_in_grid' => $header_in_grid,
            'header_bottom_class' => $header_bottom_class,
            'menu_item_icon_position' => $menu_item_icon_position,
            'menu_position' => $menu_position,
            'centered_logo' => $centered_logo,
            'enable_border_top_bottom_menu' => $enable_border_top_bottom_menu,
            'menu_dropdown_appearance_class' => $menu_dropdown_appearance_class,
			'menu_hover_animation_class' => $menu_hover_animation_class,
            'logo_wrapper_style' => $logo_wrapper_style,
            'divided_left_menu_padding' => $divided_left_menu_padding,
            'divided_right_menu_padding' => $divided_right_menu_padding,
            'display_header_top' => $display_header_top,
            'header_top_area_scroll' => $header_top_area_scroll,
            'header_style' => $header_style,
            'header_color_transparency_per_page' => $header_color_transparency_per_page,
            'header_color_per_page' => $header_color_per_page,
            'header_top_color_per_page' => $header_top_color_per_page,
            'header_color_transparency_on_scroll' => $header_color_transparency_on_scroll,
            'header_bottom_border_style' => $header_bottom_border_style,
            'header_bottom_appearance' => $header_bottom_appearance,
            'header_transparency' => $header_transparency,
            'enable_vertical_menu' => $enable_vertical_menu,
            'enable_search_left_sidearea_right' => $enable_search_left_sidearea_right,
            'vertical_area_background_image' => $vertical_area_background_image,
            'vertical_menu_style' => $vertical_menu_style,
            'vertical_area_scroll' => $vertical_area_scroll,
            'page_vertical_area_background_transparency' => $page_vertical_area_background_transparency,
            'page_vertical_area_background' => $page_vertical_area_background,
            'bkg_image' => $bkg_image,
            'page_vertical_area_background_style' => $page_vertical_area_background_style,
            'page_vertical_area_background_transparency_style' => $page_vertical_area_background_transparency_style,
            'vertical_area_menu_items_arrow' => $vertical_area_menu_items_arrow,
            'header_search_type' => $header_search_type,
            'frame_around_content_class' => $frame_around_content_class,
            'content_class' => $content_class,
            'paspartu_additional_classes' => $paspartu_additional_classes,
            'eltd_back_to_top_button_styles' => $eltd_back_to_top_button_styles
        );
    }
}

if(!function_exists('moose_elated_get_footer_variables')) {
    function moose_elated_get_footer_variables() {
        global $moose_elated_options;

        $id = moose_elated_get_page_id();

        $footer_border_columns				= 'yes';
        $footer_top_border_color            = '';
        $footer_top_border_in_grid          = '';
        $footer_bottom_border_in_grid       = '';
        $footer_bottom_border_color         = '';
        $footer_bottom_border_bottom_color  = '';
        $footer_classes                     = '';
        $footer_classes_array               = array();
        $footer_in_grid                     = true;
        $display_footer_top                 = true;
        $footer_top_columns                 = 4;
        $footer_bottom_columns              = 3;

        if(isset($moose_elated_options['footer_border_columns']) && $moose_elated_options['footer_border_columns'] !== '') {
            $footer_border_columns = $moose_elated_options['footer_border_columns'];
        }

        if(!empty($moose_elated_options['footer_top_border_color'])) {
            if (isset($moose_elated_options['footer_top_border_width']) && $moose_elated_options['footer_top_border_width'] !== '') {
                $footer_border_height = $moose_elated_options['footer_top_border_width'];
            } else {
                $footer_border_height = '1';
            }

            $footer_top_border_color = 'height: '.esc_attr($footer_border_height).'px;background-color: '.esc_attr($moose_elated_options['footer_top_border_color']).';';
        }

        if(isset($moose_elated_options['footer_top_border_in_grid']) && $moose_elated_options['footer_top_border_in_grid'] == 'yes') {
            $footer_top_border_in_grid = 'in_grid';
        }

        if(isset($moose_elated_options['footer_bottom_border_in_grid']) && $moose_elated_options['footer_bottom_border_in_grid'] == 'yes') {
            $footer_bottom_border_in_grid = 'in_grid';
        }

        if(!empty($moose_elated_options['footer_bottom_border_color'])) {
            if(!empty($moose_elated_options['footer_bottom_border_width'])) {
                $footer_bottom_border_width = $moose_elated_options['footer_bottom_border_width'].'px';
            }
            else{
                $footer_bottom_border_width = '1px';
            }

            $footer_bottom_border_color = 'height: '.esc_attr($footer_bottom_border_width).';background-color: '.esc_attr($moose_elated_options['footer_bottom_border_color']).';';
        }


        if(!empty($moose_elated_options['footer_bottom_border_bottom_color'])) {
            if(!empty($moose_elated_options['footer_bottom_border_bottom_width'])) {
                $footer_bottom_border_bottom_width = $moose_elated_options['footer_bottom_border_bottom_width'].'px';
            } else {
                $footer_bottom_border_bottom_width = '1px';
            }

            $footer_bottom_border_bottom_color = 'height: '.esc_attr($footer_bottom_border_bottom_width).';background-color: '.esc_attr($moose_elated_options['footer_bottom_border_bottom_color']).';';
        }

        //is uncovering footer option set in theme options?
        if(isset($moose_elated_options['uncovering_footer']) && $moose_elated_options['uncovering_footer'] == "yes" && isset($moose_elated_options['paspartu']) && $moose_elated_options['paspartu'] == 'no') {
            //add uncovering footer class to array
            $footer_classes_array[] = 'uncover';
        }


        if(get_post_meta($id, "eltd_footer-disable", true) == "yes"){
            $footer_classes_array[] = 'disable_footer';
        }

        if($footer_border_columns == 'yes') {
            $footer_classes_array[] = 'footer_border_columns';
        }

        if(isset($moose_elated_options['paspartu']) && $moose_elated_options['paspartu'] == 'yes' && isset($moose_elated_options['paspartu_footer_alignment']) && $moose_elated_options['paspartu_footer_alignment'] == 'yes'){
            $footer_classes_array[]= 'paspartu_footer_alignment';
        }

        if($moose_elated_options['overlapping_content'] == 'yes' && $moose_elated_options['overlapping_bottom_content_amount'] !== "") {
            $footer_classes_array[]= 'footer_overlapped';
        }

        //is some class added to footer classes array?
        if(is_array($footer_classes_array) && count($footer_classes_array)) {
            //concat all classes and prefix it with class attribute
            $footer_classes = esc_attr(implode(' ', $footer_classes_array));
        }

        if(isset($moose_elated_options['footer_in_grid'])){
            if ($moose_elated_options['footer_in_grid'] != "yes") {
                $footer_in_grid = false;
            }
        }

        if (isset($moose_elated_options['show_footer_top']) && $moose_elated_options['show_footer_top'] == "no") {
            $display_footer_top = false;
        }

        if (isset($moose_elated_options['footer_top_columns'])) {
            $footer_top_columns = $moose_elated_options['footer_top_columns'];
        }

        if (isset($moose_elated_options['footer_bottom_columns'])) {
            $footer_bottom_columns = $moose_elated_options['footer_bottom_columns'];
        }

        return array(
            'moose_elated_footer_border_columns' => $footer_border_columns,
            'moose_elated_footer_top_border_color' => $footer_top_border_color,
            'moose_elated_footer_top_border_in_grid' => $footer_top_border_in_grid,
            'moose_elated_footer_bottom_border_in_grid' => $footer_bottom_border_in_grid,
            'moose_elated_footer_bottom_border_color' => $footer_bottom_border_color,
            'moose_elated_footer_bottom_border_bottom_color' => $footer_bottom_border_bottom_color,
            'moose_elated_footer_classes' => $footer_classes,
            'footer_in_grid' => $footer_in_grid,
            'display_footer_top' => $display_footer_top,
            'footer_top_columns' => $footer_top_columns,
            'footer_bottom_columns' => $footer_bottom_columns
        );
    }
}

if(!function_exists('moose_elated_is_logo_centered')) {
    /**
     * Checks if logo is centered or not
     * @return bool
     */
    function moose_elated_is_logo_centered() {
        global $moose_elated_options;

        $centered_logo = false;

        if (isset($moose_elated_options['center_logo_image'])) {
            if($moose_elated_options['center_logo_image'] == "yes" && $moose_elated_options['header_bottom_appearance'] !== "stick_with_left_right_menu") {
                $centered_logo = true;
            }
        }

        if(isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] == "fixed_hiding"){
            $centered_logo = true;
        }

        return $centered_logo;
    }
}

if(!function_exists('moose_elated_get_header_style')) {
    /**
     * Returns current page header style. It first checks in current page meta field,
     * if that isn't set it checks in global options
     * @return mixed|string
     */
    function moose_elated_get_header_style() {
        global $moose_elated_options;

        $id = moose_elated_get_page_id();
        $header_style = '';

        if(get_post_meta($id, "eltd_header-style", true) != "") {
            $header_style = get_post_meta($id, "eltd_header-style", true);
        } elseif(isset($moose_elated_options['header_style'])) {
            $header_style = $moose_elated_options['header_style'];
        }

        return $header_style;
    }
}

if(!function_exists('moose_elated_get_header_transparency')) {
    /**
     * Returns current page's header transparency. First it checks in current page custom field,
     * if not set it checks in global options
     * @return mixed|string
     */
    function moose_elated_get_header_transparency() {
        global $moose_elated_options;

        $id = moose_elated_get_page_id();
        $header_color_transparency_per_page = '';


        if(get_post_meta($id, "eltd_header_color_transparency_per_page", true) != ""){
            $header_color_transparency_per_page = get_post_meta($id, "eltd_header_color_transparency_per_page", true);
        } elseif($moose_elated_options['header_background_transparency_initial'] != "") {
            $header_color_transparency_per_page = $moose_elated_options['header_background_transparency_initial'];
        }

        return $header_color_transparency_per_page;
    }
}

if(!function_exists('moose_elated_is_top_header')) {
    /**
     * Checks if header type is top
     * @return bool
     */
    function moose_elated_is_top_header() {
        global $moose_elated_options;

		$top_header = false;
		
        if($moose_elated_options['header_type'] == "top") {
            $top_header = true;
        }

        return $top_header;
    }
}

if(!function_exists('moose_elated_is_side_header')) {
    /**
     * Checks if header type is side
     * @return bool
     */
    function moose_elated_is_side_header() {
        global $moose_elated_options;

		$side_header = false;
		
        if($moose_elated_options['header_type'] == "side") {
            $side_header = true;
        }

        return $side_header;
    }
}

if(!function_exists('moose_elated_space_around_content')) {
    /**
     * Checks if there is spacing around content
     * @return bool
     */
    function moose_elated_space_around_content() {
        global $moose_elated_options;

        $space_around_content = false;

        if($moose_elated_options['boxed'] == "yes" && $moose_elated_options['spacing_arround_content'] == "yes") {
            $space_around_content = true;
        }

        return $space_around_content;
    }
}

if(!function_exists('moose_elated_include_footer_in_content')) {
    /**
     * Checks if footer is included in spacing
     * @return bool
     */
    function moose_elated_include_footer_in_content() {
        global $moose_elated_options;

        $include_footer_in_content = false;

        if($moose_elated_options['boxed'] == "yes" && $moose_elated_options['spacing_arround_content'] == "yes" && $moose_elated_options['footer_in_content'] == "yes") {
            $include_footer_in_content = true;
        }

        return $include_footer_in_content;
    }
}
if ( ! function_exists( 'moose_elated_wp_link_pages_exist' ) ) {
	function moose_elated_wp_link_pages_exist() {
		$args_pages = array(
			'echo' => 0
		);
		
		return wp_link_pages( $args_pages );
	}
}
if ( ! function_exists( 'moose_elated_wp_link_pages' ) ) {
	function moose_elated_wp_link_pages() {
		wp_link_pages();
	}
}

if ( ! function_exists( 'moose_elated_pages_wp_link_pages' ) ) {
	function moose_elated_pages_wp_link_pages($classes) {

		$args_pages = array(
			'before'           => '<div class="single_links_pages ' .$classes. '"><div class="single_links_pages_inner">',
			'after'            => '</div></div>',
			'pagelink'         => '<span>%</span>'
		);

		wp_link_pages( $args_pages );
	}
}